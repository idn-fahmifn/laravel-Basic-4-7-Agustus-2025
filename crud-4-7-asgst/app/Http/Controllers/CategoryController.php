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
        $data = Category::all();
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi untuk form input
        $request->validate([
            'category_name' => ['required', 'string', 'min:3', 'max:50', 'unique:categories']
        ]);

        // untuk menyimpan.
        Category::create([
            'category_name' => $request->input('category_name')
        ]);

        return back()->with('success','Data Kategori sudah ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Category::find($id);
        return view('category.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // validasi untuk form input
        $request->validate([
            'category_name' => ['required', 'string', 'min:3', 'max:50', 'unique:categories']
        ]);

        $data = Category::find($id);

        $data->update([
            'category_name' => $request->category_name
        ]);
        

        return back()->with('success','Data Kategori sudah ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()
        ->route('category.index')
        ->with('success', 'Data kategori berhasil dihapus');
    }
}
