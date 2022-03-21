<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Product;
use App\Models\Seed;
use App\Models\Variance;
use Illuminate\Http\Request;

class SeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seeds =  Seed::all();

        return view('Admin.Seed.index',compact('seeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $products =  Product::all();
        $variances =  Variance::all();
        $branches =  Branch::all();
        return view('Admin.Seed.create',compact('products','variances','branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'         => 'required',
            'editor1'  => 'required',
            'status'       => 'required',
            'product_id'   => 'required',
            'main_image' => 'required',
            'sub_image' => 'required',
        ]);

        $seed = Seed::create([
            'name'        => $data['name'],
            'description' => $data['editor1'],
            'status'      => $data['status'],
            'product_id'  => $data['product_id'],
            'variance_id' => $request->variance_id,
            'branch_id'   => $request->branch_id,
        ]);


        $seed->addMedia($data['main_image'])->toMediaCollection('main_image_seed');


        foreach ($data['sub_image'] as $image){
            $seed->addMedia($image)->toMediaCollection('sub_image_seed');
        }

        return redirect()->route('seeds.index')->with(['create'=>true]);;


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
    public function edit(Seed $seed)
    {
        $products =  Product::all();
        $variances =  Variance::all();
        $branches =  Branch::all();
        return view('Admin.Seed.edit',compact('products','seed','variances','branches'))->with(['edit'=>true]);;
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
    public function destroy(Seed $seed)
    {
        $seed->delete();
        return redirect()->route('seeds.index');
    }
}
