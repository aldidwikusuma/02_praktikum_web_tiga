<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\ControllerNews;
use App\Http\Controllers\ControllersPrograms;
use App\Http\Controllers\ControllerAboutUs;
use App\Http\Controllers\ControllerContactUs;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [ControllerHome::class, 'index']);

Route::prefix("category")->group(function(){
    Route::get("/marbel-edu-games", [ControllerProducts::class, 'category1']);
    Route::get("/marbel-and-friends-kind-games", [ControllerProducts::class, 'category2']);
    Route::get("/riri-story-books", [ControllerProducts::class, 'category3']);
    Route::get("/kolak-kids-songs", [ControllerProducts::class, 'category4']);
});

Route::get("/news/{berita}", [ControllerNews::class, 'index']);

Route::prefix("program")->group(function(){
    Route::get("/karir", [ControllerPrograms::class, 'karir']);
    Route::get("/magang", [ControllerPrograms::class, 'magang']);
    Route::get("/kunjungan-industri", [ControllerPrograms::class, 'kunjunganIndustri']);
});

Route::get("/about-us", [ControllerAboutUs::class, 'index']);

Route::get("/contact", [ControllerContactUs::class, 'index']);