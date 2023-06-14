<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::with('category')->get();

        return view('products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brands::all();
        $categories = Categories::all();

        return view('products.create', compact('brands', 'categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Products::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'brands' => $request->brands,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'image' => '1.jpg',
        ]);

        return redirect()->route('products.products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ambil data product berdasarkan id
        $products = Products::where('id', $id)->with('category')->first();

        // ambil data brand dan category sebagai isian di pilihan (select)
        $brands = Brands::all();
        $categories = Categories::all();

        // tampilkan view edit dan passing data product
        return view('products.edit', compact('products', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Products::where('id', $id)->update([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brands,
        ]);

        return redirect()->route('products.products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ambil data product berdasarkan id
        $product = Products::find($id);

        // hapus data product
        $product->delete();

        // redirect ke halaman product.index
        return redirect()->route('products.products');
    }
}
