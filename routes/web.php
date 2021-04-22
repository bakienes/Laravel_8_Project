<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BookCreated;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeEditController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\UserAuth;

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

Route::get('/admin/aboutedit', [HomeEditController::class,'homePage'])->name('home_edit');

Route::post('about/store', [HomeEditController::class, 'postAbout'])->name('post_about');

Route::get('/admin/homeedit', [BookCreated::class,'created'])->name('book_created');

Route::get('/', [IndexController::class,'getIndex'])->name('index');

Route::post('book/store', [IndexController::class,'postBook'])->name('post_book');

Route::get('/about', [AboutController::class, 'aboutPage'])->name('about');

Route::get('/admin/serviceedit', [ServiceController::class, 'servicePage'])->name('service_page');

Route::post('service/store', [ServiceController::class, 'postService'])->name('post_service');

Route::get('/service', [ServiceController::class, 'ServiceHomePage'])->name('service');

Route::get('/price', [PriceController::class, 'priceHomePage'])->name('price');

Route::get('/admin/priceedit', [PriceController::class, 'pricePage'])->name('price_edit');

Route::post('price/store', [PriceController::class, 'postprice'])->name('post_price');

Route::get('/admin/blogedit', [BlogController::class, 'BlogPage'])->name('blog_edit');

Route::post('service/blog', [BlogController::class, 'postBlog'])->name('post_blog');

Route::get('blog', [BlogController::class, 'blogHomePage'])->name('blog');

Route::get('/contact', function(){
    return view('contact');
});

Route::post("user", [UserAuth::class, 'userLogin']);

Route::view("adminpanel", 'adminpanel');  

Route::get('/login', function(){
    if(session()->has('user')){
        return redirect('adminpanel');
    }
    return view('login');
});

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});