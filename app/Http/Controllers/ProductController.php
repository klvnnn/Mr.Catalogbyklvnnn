<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brands' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        // ubah nama file
        $imageName = time() . '.' . $request->image->extension();

        // simpan file ke folder public/product
        Storage::putFileAs('public/product', $request->image, $imageName);
        $product = Products::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'brands' => $request->brands,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'image' =>  $imageName,
        ]);

        return redirect()->route('products.products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::where('id', $id)->with('category')->first();
        
        if ($products) {
            return view('landing.products-details', compact('products'));
        } else {
            abort(404);
        }

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
        // cek jika user mengupload gambar di form
        if ($request->hasFile('image')) {
            // ambil nama file gambar lama dari database
            $old_image = Products::find($id)->image;

            // hapus file gambar lama dari folder slider
            Storage::delete('public/product/' . $old_image);

            // ubah nama file
            $imageName = time() . '.' . $request->image->extension();

            // simpan file ke folder public/product
            Storage::putFileAs('public/product', $request->image, $imageName);

            // update data product
            Products::where('id', $id)->update([
                'category_id' => $request->category,
                'name' => $request->name,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'brands' => $request->brand,
                'image' => $imageName,
            ]);
        } else {
            // update data product tanpa menyertakan file gambar
            Products::where('id', $id)->update([
                'category_id' => $request->category,
                'name' => $request->name,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'brands' => $request->brand,
            ]);
        }

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
