<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::paginate(15);
       return view('Admin.Products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|',
            'type'        => 'required',
            'status'      => 'required',
            'image'       => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $product = Product::create([
            'name'   =>$request->name,
            'status' => $request->status,
            'type'   => $request->type
        ]);
        $product->addMedia($request->image)->toMediaCollection('image');

        return redirect()->route('products.index')->with(['create'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Admin.Products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'        => 'required|',
            'type'        => 'required',
            'status'      => 'required',
            'image'       => 'sometimes|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $product->update([
            'name'   =>$request->name,
            'status' => $request->status,
            'type'   => $request->type
        ]);

        if($request->hasFile('image')){
            $product->clearMediaCollection('image');
            $product->addMedia($request->image)->toMediaCollection('image');
        }

        return redirect()->route('products.index')->with(['edit'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with(['success'=>true]);
    }
}
