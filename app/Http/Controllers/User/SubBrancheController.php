<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Product;
use Illuminate\Http\Request;

class SubBrancheController extends Controller
{
    public function getSubBranches ($crops,$branche){
        $subBranches = Branch::where('variance_id',$branche)->paginate(12);
        $crops     = Product::where('id',$crops)->first();
        return view('User.SubBranche.index',compact('subBranches','crops'));
    }

}
