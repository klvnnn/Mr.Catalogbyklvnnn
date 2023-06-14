<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // load data dari table brands
        $brands = Brands::all();

        // passing data brands ke view brand.index
        return view('brands.brands', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load view create.blade.php
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table brands
        $brands = Brands::create([
            'name' => $request->name,
        ]);

        // alihkan halaman ke halaman brands
        return redirect()->route('brands.brands');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // cari data berdasarkan id menggunakan find()
        // find() merupakan fungsi eloquent untuk mencari data berdasarkan primary key
        $brands = Brands::find($id);

        // load view edit.blade.php dan passing data brand
        return view('brands.edit', compact('brands'));
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
        // update data brands
        Brands::where('id', $id)->update([
            'name' => $request->name,
        ]);

        // alihkan halaman ke halaman brands
        return redirect()->route('brands.brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ambil data category berdasarkan id
        $brand = Brands::find($id);

        // hapus data category
        $brand->delete();

        // alihkan halaman ke halaman brands
        return redirect()->route('brands.brands');
    }
}
