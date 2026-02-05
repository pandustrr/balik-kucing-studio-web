<?php

namespace App\Http\Controllers;

use App\Models\MerchandiseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MerchandiseCategoryController extends Controller
{
    public function index()
    {
        $categories = MerchandiseCategory::latest()->get();
        return view('admin.merchandise.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.merchandise.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        MerchandiseCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.merchandise.categories.index')->with('success', 'Kategori berhasil ditambahkan! 🍊');
    }

    public function edit($id)
    {
        $category = MerchandiseCategory::findOrFail($id);
        return view('admin.merchandise.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = MerchandiseCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.merchandise.categories.index')->with('success', 'Kategori berhasil diperbarui! ✨');
    }

    public function destroy($id)
    {
        $category = MerchandiseCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.merchandise.categories.index')->with('success', 'Kategori berhasil dihapus! 🗑️');
    }
}
