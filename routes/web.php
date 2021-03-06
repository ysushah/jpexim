<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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


Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('products',[ProductController::class,'index'])->name('products');

Route::get('product/{slug}',[ProductController::class,'view'])->name('product.view');

Route::get('blogs',[BlogController::class,'index'])->name('blogs');

Route::get('blog/{slug}',[BlogController::class,'view'])->name('blog.view');

Route::get('about',[AboutController::class,'index'])->name('about');

Route::get('contact',[ContactController::class,'index'])->name('contact');

Route::post('contact',[ContactController::class,'store'])->name('contact.store');


require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
