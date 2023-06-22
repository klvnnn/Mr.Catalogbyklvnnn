<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // mengambil data slider
        $sliders = Slider::all();

        return view('landing.index', compact('sliders'));
    }

    public function products(Request $request)
    {
        // mengambil data category
        $categories = Categories::all();
        $brands = Brands::all();

        if ($request->category) {
            $products = Products::with('category')->whereHas('category', function ($query) use ($request) {
                $query->where('name', $request->category)->where('status','=','Accepted');
            })->get();
        } else if ($request->min && $request->max) {
            $products = Products::where('sale_price', '>=', $request->min)->where('sale_price', '<=', $request->max)->where('status','=','Accepted')->get();
        } else {
            // mengambil semua data produk
            $products = Products::inRandomOrder()->where('status','=','Accepted')->get();
        }

        return view('landing.products', compact('products', 'categories'));
    }

    public function detail($id)
    {
        // ambil data product berdasarkan id
        $products = Products::where('id', $id)->with('category')->first();

        // ambil data brand dan category sebagai isian di pilihan (select)
        $brands = Brands::all();
        $categories = Categories::all();

        // tampilkan view edit dan passing data product
        return view('landing.product-details', compact('products', 'brands', 'categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
