<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::group(['prefix' => "{locale}"],function(){
    Route::get('/',function(){
        return view("frontend.index");
    } )->middleware("setLocale");
    
});

Auth::routes();



    
Route::middleware("auth")->prefix("admin")->group(function(){
    Route::get("/admindashboard",function(){
        return view("dashboard.layouts.master");
    })->name("admin");

    Route::get("/postcreate",[PostController::class,"create"])->name("postcreate");
    Route::post("/poststore",[PostController::class,"store"])->name("poststore");
    Route::get("/postlist",[PostController::class,"index"])->name("postlist");
    Route::get("/postedit/{id}",[PostController::class,"edit"])->name("postedit");
    Route::post("/postupdate",[PostController::class,"update"])->name("postupdate");
    Route::post("/postdelete",[PostController::class,"destroy"])->name("postdelete");
});


    Route::get("blog",[BlogController::class,"index"])->name('blog');
    Route::get("blog/postdetail/{id}",[BlogController::class,"detail"])->name("detail");
    




