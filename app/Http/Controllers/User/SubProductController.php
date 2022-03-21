<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SubProduct;
use Illuminate\Http\Request;

class SubProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
//        SubProduct $subProduct
        return view('User.subProduct.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(SubProduct $subProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubProduct $subProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubProduct  $subProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubProduct $subProduct)
    {
        //
    }
}
