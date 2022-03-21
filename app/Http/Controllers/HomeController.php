<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\EventsController;
use App\Models\ContactUs;
use App\Models\Event;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Seed;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $special_products = Seed::where('status',2)->get();

        $new_products = Seed::where('status',3)->get();
        return view('User.index',compact('sliders','special_products','new_products'));
    }





    public function contact()
    {
        return view('User.contact');
    }

    public function about()
    {
        return view('User.about');
    }

    public function events()
    {
        $events = Event::where('status',1)->get();
        return view('User.event',compact('events'));
    }
}
