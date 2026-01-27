<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bios = Bio::first();
        return view('admin.bios.index', compact('bios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
            'favicon' => 'nullable|mimes:jpeg,png,jpg,gif,webp,ico,svg|max:2048',
            'brand_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'img_home' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'img_about' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->except(['favicon', 'brand_img', 'img_home', 'img_about']);

        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('bios', 'public');
        }
        if ($request->hasFile('brand_img')) {
            $data['brand_img'] = $request->file('brand_img')->store('bios', 'public');
        }
        if ($request->hasFile('img_home')) {
            $data['img_home'] = $request->file('img_home')->store('bios', 'public');
        }
        if ($request->hasFile('img_about')) {
            $data['img_about'] = $request->file('img_about')->store('bios', 'public');
        }

        Bio::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Bio berhasil ditambahkan!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bio = Bio::findOrFail($id);
        return response()->json($bio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,ico|max:2048',
            'brand_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'img_home' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'img_about' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $bio = Bio::findOrFail($id);
        $data = $request->except(['favicon', 'brand_img', 'img_home', 'img_about']);

        if ($request->hasFile('favicon')) {
            if ($bio->favicon) {
                Storage::disk('public')->delete($bio->favicon);
            }
            $data['favicon'] = $request->file('favicon')->store('bios', 'public');
        }
        if ($request->hasFile('brand_img')) {
            if ($bio->brand_img) {
                Storage::disk('public')->delete($bio->brand_img);
            }
            $data['brand_img'] = $request->file('brand_img')->store('bios', 'public');
        }
        if ($request->hasFile('img_home')) {
            if ($bio->img_home) {
                Storage::disk('public')->delete($bio->img_home);
            }
            $data['img_home'] = $request->file('img_home')->store('bios', 'public');
        }
        if ($request->hasFile('img_about')) {
            if ($bio->img_about) {
                Storage::disk('public')->delete($bio->img_about);
            }
            $data['img_about'] = $request->file('img_about')->store('bios', 'public');
        }

        $bio->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Bio berhasil diperbarui!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bio = Bio::findOrFail($id);
        
        if ($bio->favicon) {
            Storage::disk('public')->delete($bio->favicon);
        }
        if ($bio->brand_img) {
            Storage::disk('public')->delete($bio->brand_img);
        }
        if ($bio->img_home) {
            Storage::disk('public')->delete($bio->img_home);
        }
        if ($bio->img_about) {
            Storage::disk('public')->delete($bio->img_about);
        }
        
        $bio->delete();

        return response()->json([
            'success' => true,
            'message' => 'Bio berhasil dihapus!'
        ]);
    }
}
