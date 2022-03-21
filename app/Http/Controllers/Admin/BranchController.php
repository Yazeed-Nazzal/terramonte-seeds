<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variance;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\Models\Branch;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $branches =   Branch::paginate(15);
       return view('Admin.Branch.index',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $variances =  Variance::whereHas('product', function ( $query) {
            $query->where('type',3);
        })->get();

        return view('Admin.Branch.create',compact('variances'));
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
            'status'       => 'required',
            'variance_id'  => 'required',
            'image_branch' => 'required',
        ]);

        $branch = Branch::create([
            'name'        => $data['name'],
            'status'      => $data['status'],
            'variance_id' => $data['variance_id'],
        ]);

        $branch->addMedia($data['image_branch'])->toMediaCollection('branch');

        return redirect()->route('branches.index')->with(['create'=>true]);

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
    public function edit(Branch $branch)
    {
        $variances =  Variance::all();
        return view('Admin.Branch.edit',compact('branch','variances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Branch $branch)
    {

        $data = $request->validate([
            'name'         => 'required',
            'status'       => 'required',
            'variance_id'  => 'required',
        ]);

        $branch->update([
            'name'        => $data['name'],
            'status'      => $data['status'],
            'variance_id' => $data['variance_id'],
        ]);

        if($request->hasFile('image_branch')){
            $branch->clearMediaCollection('branch');
            $branch->addMedia($request->image_branch)->toMediaCollection('branch');
        }


        return redirect()->route('branches.index')->with(['edit'=>true]);
    }

    /**+
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branches.index');
    }
}
