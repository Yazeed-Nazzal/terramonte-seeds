<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\ContactUs;
use App\Models\Product;
use App\Models\Seed;
use App\Models\Variance;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $products  = Product::all()->count();
        $variances = Variance::all()->count();
        $branches  = Branch::all()->count();
        $seeds     = Seed::all()->count();
        $messages     = ContactUs::all()->count();
        return view('Admin.index',compact('products','branches','variances','seeds','messages'));
    }
}
