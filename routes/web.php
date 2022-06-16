<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WashController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\MainController;


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GoodsController;
use App\Http\Controllers\Admin\EquipmentControler;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PricesController;
use App\Http\Controllers\Admin\RewiewController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/wash', [WashController::class,'index'])->name('wash');

Route::get('/price', [PriceController::class,'price'])->name('price');

Route::get('/contact', [HomeController::class,'contact'])->name('contacts');


// отзывы

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::post('/reviews', [ReviewsController::class,'reviews'])->name('contact-form');




// отзывы 

// обратная связь
Route::post('/contact/check', [MainController::class, 'Applications_add']);
// обратная связь


Route::get('/login',[HomeController::class,'login'])->name('auth.login');
Route::get('/register',[HomeController::class,'register'])->name('auth.register');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');



Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::post('/login',[LoginController::class,'login'])->name('login');



Route::middleware(['is_admin:1'])->prefix('admin')->group(function (){
    Route::get('/main',[HomeController::class, 'adminHome'])->name('admin.main');
    Route::resource('goods', GoodsController::class);
Route::resource('equipment', EquipmentControler::class);
Route::resource('gallery', GalleryController::class);
Route::resource('prices', PricesController::class);
Route::resource('review', RewiewController::class);
});
Route::fallback(function(){
    abort(404,"К сожалению, эта страница недоступна");
});


Route::get('/{id}',[HomeController::class,'ShowPage']);
