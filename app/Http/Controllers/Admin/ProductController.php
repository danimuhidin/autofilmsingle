<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->except(['icon', 'img1', 'img2', 'img3', 'img4', 'img5']);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('products', 'public');
        }
        if ($request->hasFile('img1')) {
            $data['img1'] = $request->file('img1')->store('products', 'public');
        }
        if ($request->hasFile('img2')) {
            $data['img2'] = $request->file('img2')->store('products', 'public');
        }
        if ($request->hasFile('img3')) {
            $data['img3'] = $request->file('img3')->store('products', 'public');
        }
        if ($request->hasFile('img4')) {
            $data['img4'] = $request->file('img4')->store('products', 'public');
        }
        if ($request->hasFile('img5')) {
            $data['img5'] = $request->file('img5')->store('products', 'public');
        }

        Product::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Product berhasil ditambahkan!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $product = Product::findOrFail($id);
        $data = $request->except(['icon', 'img1', 'img2', 'img3', 'img4', 'img5']);

        if ($request->hasFile('icon')) {
            if ($product->icon) {
                Storage::disk('public')->delete($product->icon);
            }
            $data['icon'] = $request->file('icon')->store('products', 'public');
        }
        if ($request->hasFile('img1')) {
            if ($product->img1) {
                Storage::disk('public')->delete($product->img1);
            }
            $data['img1'] = $request->file('img1')->store('products', 'public');
        }
        if ($request->hasFile('img2')) {
            if ($product->img2) {
                Storage::disk('public')->delete($product->img2);
            }
            $data['img2'] = $request->file('img2')->store('products', 'public');
        }
        if ($request->hasFile('img3')) {
            if ($product->img3) {
                Storage::disk('public')->delete($product->img3);
            }
            $data['img3'] = $request->file('img3')->store('products', 'public');
        }
        if ($request->hasFile('img4')) {
            if ($product->img4) {
                Storage::disk('public')->delete($product->img4);
            }
            $data['img4'] = $request->file('img4')->store('products', 'public');
        }
        if ($request->hasFile('img5')) {
            if ($product->img5) {
                Storage::disk('public')->delete($product->img5);
            }
            $data['img5'] = $request->file('img5')->store('products', 'public');
        }

        $product->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Product berhasil diperbarui!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        
        if ($product->icon) {
            Storage::disk('public')->delete($product->icon);
        }
        if ($product->img1) {
            Storage::disk('public')->delete($product->img1);
        }
        if ($product->img2) {
            Storage::disk('public')->delete($product->img2);
        }
        if ($product->img3) {
            Storage::disk('public')->delete($product->img3);
        }
        if ($product->img4) {
            Storage::disk('public')->delete($product->img4);
        }
        if ($product->img5) {
            Storage::disk('public')->delete($product->img5);
        }
        
        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product berhasil dihapus!'
        ]);
    }
}
