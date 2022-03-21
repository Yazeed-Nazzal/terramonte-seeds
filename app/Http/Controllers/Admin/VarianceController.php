<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variance;
use Illuminate\Http\Request;


class VarianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variances = Variance::paginate(15);
        return view('Admin.Variances.index',compact('variances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products =  Product::where('type','!=' ,1)->get();
        return view('Admin.Variances.create',compact('products'));
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
            'product'        => 'required',
            'status'      => 'required',
            'image'       => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $variance = Variance::create([
            'name'   =>$request->name,
            'status' => $request->status,
            'product_id'   => $request->product
        ]);
        $variance->addMedia($request->image)->toMediaCollection('image');

        return redirect()->route('variances.index')->with(['create'=>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variance  $variance
     * @return \Illuminate\Http\Response
     */
    public function show(Variance $variance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variance  $variance
     * @return \Illuminate\Http\Response
     */
    public function edit(Variance $variance)
    {
        $products =  Product::where('type','!=' ,1)->get();

        return view('Admin.Variances.edit',compact('variance','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variance  $variance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variance $variance)
    {
        $request->validate([
            'name'        => 'required|',
            'product'     => 'required',
            'status'      => 'required',
            'image'       => 'sometimes|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $variance->update([
            'name'   =>$request->name,
            'status' => $request->status,
            'product_id'   => $request->product
        ]);

        if($request->hasFile('image')){
            $variance->clearMediaCollection('image');
            $variance->addMedia($request->image)->toMediaCollection('image');
        }


        return redirect()->route('variances.index')->with(['edit'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variance  $variance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variance $variance)
    {
        $variance->delete();
        return back()->with(['success'=>true]);
    }
}
