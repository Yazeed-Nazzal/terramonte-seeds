<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variance;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function getBranches ($crops) {
        $branches =Variance::where('product_id',$crops)->paginate(15);
        $crops = Product::where('id',$crops)->first();

        return view('User.branches.index',compact('branches','crops'));

    }
}
