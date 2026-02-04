<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MerchandiseProduct;
use App\Models\MerchandiseCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MerchandiseProductController extends Controller
{
    public function index()
    {
        $products = MerchandiseProduct::with('category')->latest()->get();
        $categories = MerchandiseCategory::oldest('name')->get();
        return view('admin.merchandise.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        // This will be handled by a modal if needed, but since the user asked for CRUD,
        // and we might want a separate page or modal logic.
        // For consistency let's use modals on the index page like categories.
    }

    public function store(Request $request)
    {
        $request->validate([
            'merchandise_category_id' => 'required|exists:merchandise_categories,id',
            'name' => 'required|string|max:255|unique:merchandise_products,name',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'qris_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        if ($request->hasFile('qris_image')) {
            $data['qris_image'] = $request->file('qris_image')->store('qris', 'public');
        }

        MerchandiseProduct::create($data);

        return redirect()->back()->with('success', 'Produk merchandise berhasil ditambahkan! ✨');
    }

    public function edit(string $id)
    {
        // Return JSON for modal if needed, or handle via index.
    }

    public function update(Request $request, string $id)
    {
        $product = MerchandiseProduct::findOrFail($id);

        $request->validate([
            'merchandise_category_id' => 'required|exists:merchandise_categories,id',
            'name' => 'required|string|max:255|unique:merchandise_products,name,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'qris_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        // Handle explicit deletion of product image
        if ($request->boolean('delete_image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = null;
        }

        // Handle new product image upload
        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // Handle explicit deletion of QRIS image
        if ($request->boolean('delete_qris_image')) {
            if ($product->qris_image) {
                Storage::disk('public')->delete($product->qris_image);
            }
            $data['qris_image'] = null;
        }

        // Handle new QRIS image upload
        if ($request->hasFile('qris_image')) {
            if ($product->qris_image) {
                Storage::disk('public')->delete($product->qris_image);
            }
            $data['qris_image'] = $request->file('qris_image')->store('qris', 'public');
        }

        $product->update($data);

        return redirect()->back()->with('success', 'Produk merchandise berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $product = MerchandiseProduct::findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        if ($product->qris_image) {
            Storage::disk('public')->delete($product->qris_image);
        }

        $product->delete();

        return redirect()->back()->with('success', 'Produk merchandise berhasil dihapus!');
    }
}
