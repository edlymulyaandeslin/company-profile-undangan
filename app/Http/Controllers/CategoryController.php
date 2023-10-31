<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'title' => 'Category',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'title' => 'Category | Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create($validateData);

        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('dashboard.categories.edit', [
            'title' => 'Category | Edit',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

    {
        // $category = Category::find($id);

        $validateData = $request->validate([
            'name' => 'required'
        ]);

        Category::where('id', $id)->update($validateData);

        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil diupdate!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Category::destroy($id);

        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil dihapus!!');
    }
}
