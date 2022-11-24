<?php

use App\Http\Middleware\AdminMiddleWare;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//all basic pages routes

Route::get('/', function () {
    return view("HomePage");
})->name('HomePage');

Route::get('products', [App\Http\Controllers\Controller::class, 'listProducts'] ,function () {
    return view("Products");
})->name('Products');

Route::get('basket', [ProductController::class, 'viewAll'],function () {
    return view("Basket");
})->name('Basket');


Route::get('HomePage', [ProductController::class, 'index']);
Route::get('Basket', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add-to-cart');
Route::patch('update-cart/{request}', [ProductController::class, 'update'])->name('update-cart');
Route::delete('remove-from-cart/{request}', [ProductController::class, 'remove'])->name('remove-from-cart');



Route::get('aboutus', [App\Http\Controllers\Controller::class, 'search'], function () {
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
    Route::get('adminhome', [App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin.adminhome')->middleware('isAdmin');

    Route::get('/', function () {
        return view("HomePage");
    })->name('admin.HomePage');

    Route::get('/products', [App\Http\Controllers\Controller::class, 'listProducts'],function () {
        return view("Products");
    })->name('admin.Products');

    Route::get('/basket',function () {
        return view("Basket");
    })->name('admin.Basket');

    Route::get('/aboutus', [App\Http\Controllers\Controller::class, 'search'],function () {
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
