<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Seed;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($crops)
    {
       $products = Seed::where('product_id',$crops)->paginate(12);
       $crops    =Product::where('id',$crops)->first();
       return view('User.Products.index',compact('products','crops'));



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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $product)
    {
        //Crops $product\
        $product = Seed::where('id',$product)->with('media')->first();
        return view('User.Products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function newProducts (){
        return view('User.Crops.newProducts');
    }
    public function specialProducts (){
        return view('User.Crops.specialProducts');
    }

    public function getBranchProducts ($crops , $branche){
        $products = Seed::where(['product_id'=>$crops,'variance_id'=>$branche])->paginate(12);

        $crops    =Product::where('id',$crops)->first();
        return view('User.Products.index',compact('products','crops'));
    }
    public function getSubBranchProducts ($subBranche,$crops){
        $products = Seed::where(['product_id'=>$crops,'branch_id'=>$subBranche])->paginate(12);

        $crops    =Product::where('id',$crops)->first();
        return view('User.Products.index',compact('products','crops'));
    }
}
