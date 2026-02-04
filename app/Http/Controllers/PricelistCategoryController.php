<?php

namespace App\Http\Controllers;

use App\Models\PricelistCategory;
use Illuminate\Http\Request;

class PricelistCategoryController extends Controller
{
    public function index()
    {
        $categories = PricelistCategory::withCount('pricelists')
            ->orderBy('order')
            ->get();

        return view('admin.layanan.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order' => 'nullable|integer'
        ]);

        PricelistCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'order' => $request->order ?? 0
        ]);

        return redirect()->route('admin.layanan.categories.index')
            ->with('success', 'Kategori berhasil ditambahkan! 🎉');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order' => 'nullable|integer'
        ]);

        $category = PricelistCategory::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'order' => $request->order ?? 0
        ]);

        return redirect()->route('admin.layanan.categories.index')
            ->with('success', 'Kategori berhasil diperbarui! ✨');
    }

    public function destroy($id)
    {
        $category = PricelistCategory::findOrFail($id);

        if ($category->pricelists()->count() > 0) {
            return redirect()->route('admin.layanan.categories.index')
                ->with('error', 'Kategori tidak dapat dihapus karena masih memiliki pricelist! ⚠️');
        }

        $category->delete();

        return redirect()->route('admin.layanan.categories.index')
            ->with('success', 'Kategori berhasil dihapus! 🗑️');
    }
}
