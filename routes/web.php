<?php

use App\Http\Middleware\AdminMiddleWare;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

//all basic pages routes

Route::get('/', function () {
    return view("HomePage");
})->name('HomePage');

Route::get('products', [App\Http\Controllers\Controller::class, 'listProducts'] ,function () {
    return view("Products");
})->name('Products');

Route::get('basket', [CartController::class, 'cartList'],function () {
    return view("Basket");
})->name('Basket');


Route::get('HomePage', [ProductController::class, 'productList'])->name('products.list');;
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Route::get('aboutus', function () {
    return view("Aboutus");
})->name('Aboutus');

Route::get('contactus', function () {
    return view('Contactus');
})->name('Contactus');


//register and login routes
Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');


//auth routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group([
    'namespace' => 'admin',
    'prefix' => 'admin',
    'middleware' => 'auth',
    'middleware' => 'isAdmin',
], function () {
    Route::get('adminhome',[App\Http\Controllers\Controller::class, 'search'],[App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin.adminhome')->middleware('isAdmin');


    Route::get('/', function () {
        return view("HomePage");
    })->name('admin.HomePage');

    Route::get('/products', [App\Http\Controllers\Controller::class, 'listProducts'],function () {
        return view("Products");
    })->name('admin.Products');

    Route::get('/basket',function () {
        return view("Basket");
    })->name('admin.Basket');

    Route::get('/aboutus',function () {
        return view("Aboutus");
    })->name('admin.Aboutus');

    Route::get('/contactus', function () {
        return view('Contactus');
    })->name('admin.Contactus');

    Route::get('/login', function () {
        return view('login');
    })->name('admin.login');

    Route::get('/register', function () {
        return view('register');
    })->name('admin.register');
});