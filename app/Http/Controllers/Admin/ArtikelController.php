<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Tampilkan halaman list artikel
     */
    public function index()
    {
        $artikels = Artikel::with('tags')->paginate(10);

        return view('admin.artikels.index', compact('artikels'));
    }

    /**
     * Simpan artikel baru (Respon JSON)
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'img_cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|string',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'author' => $request->author,
        ];

        // Handle upload gambar
        if ($request->hasFile('img_cover')) {
            $image = $request->file('img_cover');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('storage/artikels'), $imageName);
            $data['img_cover'] = 'storage/artikels/' . $imageName;
        }

        $artikel = Artikel::create($data);

        // Simpan tags jika ada
        if ($request->tags) {
            $tagsArray = explode(',', $request->tags);
            foreach ($tagsArray as $tagName) {
                $tagName = trim($tagName);
                if (!empty($tagName)) {
                    Tag::create([
                        'artikel_id' => $artikel->id,
                        'name' => $tagName,
                    ]);
                }
            }
        }

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Artikel berhasil ditambahkan.']);
    }

    /**
     * Ambil data artikel untuk form edit (Respon JSON)
     */
    public function edit(Artikel $artikel)
    {
        $artikel->load('tags');
        $artikel->tags_string = $artikel->tags->pluck('name')->implode(', ');
        
        // Jika SUKSES, kembalikan data artikel sbg JSON
        return response()->json($artikel);
    }

    /**
     * Update data artikel (Respon JSON)
     */
    public function update(Request $request, Artikel $artikel)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'img_cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|string',
        ]);

        // Jika validasi GAGAL, kembalikan error sbg JSON
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'author' => $request->author,
        ];

        // Handle upload gambar baru
        if ($request->hasFile('img_cover')) {
            // Hapus gambar lama jika ada
            if ($artikel->img_cover && file_exists(public_path($artikel->img_cover))) {
                unlink(public_path($artikel->img_cover));
            }

            $image = $request->file('img_cover');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('storage/artikels'), $imageName);
            $data['img_cover'] = 'storage/artikels/' . $imageName;
        }

        $artikel->update($data);

        // Update tags
        // Hapus tags lama
        $artikel->tags()->delete();

        // Simpan tags baru jika ada
        if ($request->tags) {
            $tagsArray = explode(',', $request->tags);
            foreach ($tagsArray as $tagName) {
                $tagName = trim($tagName);
                if (!empty($tagName)) {
                    Tag::create([
                        'artikel_id' => $artikel->id,
                        'name' => $tagName,
                    ]);
                }
            }
        }

        // Jika SUKSES, kembalikan pesan sukses sbg JSON
        return response()->json(['success' => 'Artikel berhasil diupdate.']);
    }

    /**
     * Hapus artikel
     */
    public function destroy(Artikel $artikel)
    {
        // Hapus gambar jika ada
        if ($artikel->img_cover && file_exists(public_path($artikel->img_cover))) {
            unlink(public_path($artikel->img_cover));
        }

        // Hapus tags terkait (cascade sudah di-handle oleh database)
        $artikel->delete();

        // Kirim respon sukses JSON
        return response()->json(['success' => 'Artikel berhasil dihapus.']);
    }
}
