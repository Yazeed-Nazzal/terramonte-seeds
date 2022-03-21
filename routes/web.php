<?php

use App\Http\Controllers\Admin\AdminProductsController;
use App\Http\Controllers\Admin\VarianceController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\BranchesController;
use App\Http\Controllers\User\CropsController;
use App\Http\Controllers\User\SubBrancheController;
use App\Http\Controllers\User\UserSeedController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
#---------------------- Start Path Controller User---------------------------#
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\SubProductController;
use App\Http\Controllers\User\AboutFrontController;
#---------------------- End Path Controller User---------------------------#

#---------------------- Start Path Controller Admin---------------------------#
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\SeedsController;
#---------------------- End Path Controller Admin---------------------------#

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('clearcache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear ');
    Artisan::call('view:clear ');
    return back();
})->name('clearcache');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [\App\Http\Controllers\ContactUsController::class, 'create'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactUsController::class, 'store'])->name('contactSave');
Route::resource('/about-us', AboutFrontController::class);
Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');


//##########################Products########################################
Route::get('/crops',[CropsController::class,'getCrops']);
Route::get('/products/{crops}',[ProductController::class,'index']);
Route::get('/branches/{crops}',[BranchesController::class,'getBranches']);
Route::get('/sub-branches/{crops}/{branch}',[SubBrancheController::class,'getSubBranches']);
Route::get('/branch-products/{crops}/{branche}',[ProductController::class,'getBranchProducts']);
Route::get('/sub-branches-products/{subBranche}/{crops}',[ProductController::class,'getSubBranchProducts']);
Route::get('/product/{product}',[ProductController::class,'show']);
Route::get('/new-crops',[CropsController::class,'getNewCrops']);
Route::get('/special-crops',[CropsController::class,'getSpecialCrops']);
Route::get('/new-products',[HomeController::class,'new-products']);
Route::get('/special-products',[HomeController::class,'new-products']);
//##########################Products########################################


//##########################Seed########################################
Route::get('/Seed',[UserSeedController::class,'show']);
//##########################Seed########################################


########################## Start DashBoard Route ###################################
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashbourd');
    Route::resource('events', EventsController::class);
    Route::resource('about', AboutController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('products', AdminProductsController::class);
    Route::resource('variances', VarianceController::class);
    Route::resource('branches', BranchController::class);
    Route::resource('seeds', SeedsController::class);
    Route::get('/messages', [ContactUsController::class, 'index'])->name('messages');
    Route::get('/getBranches', [ApiController::class, 'getBranches']);
    Route::get('/getSubBranches', [ApiController::class, 'getSubBranches']);
    Route::get('/message/delete/{contactUs}', [ContactUsController::class, 'destroy'])->name('messagesDelete');
    Route::get('/message/{contactUs}', [ContactUsController::class, 'show'])->name('messagesShow');
});

########################## End DashBoard Route   ###################################










