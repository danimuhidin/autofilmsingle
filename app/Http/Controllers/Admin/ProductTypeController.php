<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of product types for a specific product
     */
    public function index($productId)
    {
        $product = Product::findOrFail($productId);
        $types = ProductType::where('product_id', $productId)->get();

        return response()->json([
            'success' => true,
            'product' => $product,
            'types' => $types,
        ]);
    }

    /**
     * Store a newly created product type
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'vlt' => 'nullable|string|max:255',
            'uvr' => 'nullable|string|max:255',
            'irr' => 'nullable|string|max:255',
            'tser' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->except(['image']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('storage/product-types'), $imageName);
            $data['image'] = 'storage/product-types/'.$imageName;
        }

        ProductType::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Product type berhasil ditambahkan!',
        ]);
    }

    /**
     * Show the form for editing the specified product type
     */
    public function edit($id)
    {
        $type = ProductType::findOrFail($id);

        return response()->json([
            'success' => true,
            'type' => $type,
        ]);
    }

    /**
     * Update the specified product type
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'vlt' => 'nullable|string|max:255',
            'uvr' => 'nullable|string|max:255',
            'irr' => 'nullable|string|max:255',
            'tser' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $type = ProductType::findOrFail($id);
        $data = $request->except(['image']);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($type->image && file_exists(public_path($type->image))) {
                unlink(public_path($type->image));
            }

            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('storage/product-types'), $imageName);
            $data['image'] = 'storage/product-types/'.$imageName;
        }

        $type->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Product type berhasil diperbarui!',
        ]);
    }

    /**
     * Remove the specified product type
     */
    public function destroy($id)
    {
        $type = ProductType::findOrFail($id);

        // Hapus gambar jika ada
        if ($type->image && file_exists(public_path($type->image))) {
            unlink(public_path($type->image));
        }

        $type->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product type berhasil dihapus!',
        ]);
    }
}
