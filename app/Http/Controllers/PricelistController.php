<?php

namespace App\Http\Controllers;

use App\Models\Pricelist;
use App\Models\PricelistCategory;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->get('category', 'all');

        $query = Pricelist::with('category')->orderBy('order');

        if ($categoryId && $categoryId !== 'all') {
            $query->where('pricelist_category_id', $categoryId);
        }

        $pricelists = $query->get();
        $categories = PricelistCategory::orderBy('order')->get();

        return view('admin.layanan.pricelists.index', compact('pricelists', 'categories', 'categoryId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pricelist_category_id' => 'required|exists:pricelist_categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'features' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer'
        ]);

        // Features processing: from array of [name, is_available]
        $features = [];
        if ($request->has('features_names')) {
            foreach ($request->features_names as $index => $name) {
                if (!empty($name)) {
                    $features[] = [
                        'name' => $name,
                        'is_available' => isset($request->features_available[$index]) && $request->features_available[$index] == '1'
                    ];
                }
            }
        }

        Pricelist::create([
            'pricelist_category_id' => $request->pricelist_category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'features' => $features,
            'is_featured' => $request->boolean('is_featured'),
            'order' => $request->order ?? 0
        ]);

        return redirect()->route('admin.layanan.pricelists.index')
            ->with('success', 'Item pricelist berhasil ditambahkan! 🎉');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pricelist_category_id' => 'required|exists:pricelist_categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'features' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
            'order' => 'nullable|integer'
        ]);

        $pricelist = Pricelist::findOrFail($id);

        // Features processing: from array of [name, is_available]
        $features = [];
        if ($request->has('features_names')) {
            foreach ($request->features_names as $index => $name) {
                if (!empty($name)) {
                    $features[] = [
                        'name' => $name,
                        'is_available' => isset($request->features_available[$index]) && $request->features_available[$index] == '1'
                    ];
                }
            }
        }

        $pricelist->update([
            'pricelist_category_id' => $request->pricelist_category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'features' => $features,
            'is_featured' => $request->boolean('is_featured'),
            'order' => $request->order ?? 0
        ]);

        return redirect()->route('admin.layanan.pricelists.index')
            ->with('success', 'Item pricelist berhasil diperbarui! ✨');
    }

    public function destroy($id)
    {
        $pricelist = Pricelist::findOrFail($id);
        $pricelist->delete();

        return redirect()->route('admin.layanan.pricelists.index')
            ->with('success', 'Item pricelist berhasil dihapus! 🗑️');
    }
}
