<?php

namespace App\Http\Controllers;

use App\Model\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */     
    public function index()
    {
        //
        return view('products/show', ['products' => Products::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('products/create');
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
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'berat' =>'required'
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Products::find($id);
        return view('products.detail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Products::findOrFail($id);
        return view('products.edit', ['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'berat' =>'required'
        ]);
        
        $products = Products::find($id);
        $products->update($request->all());

        return redirect()->route('products.index')->with('success', 'Produk berhasil dirubah');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Products::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }
}
