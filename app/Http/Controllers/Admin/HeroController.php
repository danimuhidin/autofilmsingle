<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class HeroController extends Controller
{
    /**
     * Tampilkan halaman list hero
     */
    public function index()
    {
        $heroes = Hero::paginate(10);

        return view('admin.heroes.index', compact('heroes'));
    }

    /**
     * Simpan hero baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('heroes', 'public');
            $data['image'] = $imagePath;
        }

        Hero::create($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Hero berhasil ditambahkan.']);
    }

    /**
     * Ambil data hero untuk form edit (Respon JSON)
     */
    public function edit(Hero $hero)
    {
        // Jika SUKSES, kembalikan data hero sbg JSON
        return response()->json($hero);
    }

    /**
     * Update data hero (Respon JSON)
     */
    public function update(Request $request, Hero $hero)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }
            $imagePath = $request->file('image')->store('heroes', 'public');
            $data['image'] = $imagePath;
        }

        $hero->update($data);

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Hero berhasil diupdate.']);
    }

    /**
     * Hapus hero
     */
    public function destroy(Hero $hero)
    {
        // Hapus gambar jika ada
        if ($hero->image && Storage::disk('public')->exists($hero->image)) {
            Storage::disk('public')->delete($hero->image);
        }

        $hero->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Hero berhasil dihapus.']);
    }
}
