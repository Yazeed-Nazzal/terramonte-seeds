<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Variance;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getBranches (Request $request) {
        $branches = Variance::where('product_id',$request->product)->get();

        return response()->json([
            'branches' => $branches
            ]
        );
    }
    public function getSubBranches (Request $request) {
        $Subbranches = Branch::where('variance_id',$request->branch)->get();

        return response()->json([
                'Subbranches' => $Subbranches
            ]
        );
    }

}
