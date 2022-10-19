<?php

use App\Http\Middleware\AdminMiddleWare;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('basket',[App\Http\Controllers\CartController::class, 'cartList'],function () {
    return view("Basket");
})->name('Basket');

//routes for products on cart
Route::get('productlist', [App\Http\Controllers\Controller::class, 'listProducts'])->name('products.list');
Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');



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





//admin routes working
// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('adminhome', [App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin.adminhome')->middleware('isAdmin');

//     Route::get('/', function () {
//         return view("HomePage");
//     })->name('admin.HomePage');

//     Route::get('/products', function () {
//         return view("Products");
//     })->name('admin.Products');

//     Route::get('/basket', function () {
//         return view("Basket");
//     })->name('admin.Basket');

//     Route::get('/aboutus', function () {
//         return view("Aboutus");
//     })->name('admin.Aboutus');

//     Route::get('/contactus', function () {
//         return view('Contactus');
//     })->name('admin.Contactus');

//     Route::get('/login', function () {
//         return view('login');
//     })->name('admin.login');

//     Route::get('/register', function () {
//         return view('register');
//     })->name('admin.register');
// });


/// this was for testing purposes not needed but can be useful for voyager
// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();

//     Route::get('home', [App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin.adminhome')->middleware('isAdmin');
// });




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

    Route::get('/basket', [App\Http\Controllers\CartController::class, 'cartList'],function () {
        return view("Basket");
    })->name('admin.Basket');

    //same as up, but these are for the admin section
    Route::get('productlist', [App\Http\Controllers\Controller::class, 'listProducts'])->name('admin.products.list');
    Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('admin.cart.list');
    Route::post('cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('admin.cart.store');
    Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('admin.cart.update');
    Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('admin.cart.remove');
    Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('admin.cart.clear');


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
