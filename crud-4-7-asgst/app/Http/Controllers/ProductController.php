<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        $category = Category::all();
        return view('product.index', 
        compact('data', 'category'));
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
        $request->validate([
            'product_name' => ['required', 'string', 'min:3', 'max:10'],
            'category_id' => ['required', 'numeric'],
            'image' => ['required', 'file', 'max:10240', 'mimes:jpeg,jpg,png,svg,webp,heic'],
            'qty' => ['required', 'numeric ', 'min:0', 'max:100'],
            'price' => ['required', 'numeric ', 'min:0'],
            'desc' => ['required'],
        ]);

        // ketika ada file gambar yang diupload
        if ($request->hasFile('image')) {
            $gambar = $request->file('image'); //file yang diupload
            $path = 'public/images/product'; //path tempat menyimpan
            $ext = $gambar->getClientOriginalExtension(); //mengambil nilai ext
            $nama = 'gambar_produk_' . Carbon::now()->format('Ymdhis') . random_int(10, 100) . $ext; //nama setelah diupload
            $gambar->storeAs($path, $nama);
        }

        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
