<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\DeveloperController;

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

/** Guests */
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/products', [ProductController::class, 'visitorIndex'])->name('products');
Route::get('/product/{id}', [ProductController::class, 'visitorShow'])->name('product');


Route::get('/developer/{id}', [DeveloperController::class, 'profile'])->name('profile');

/** Authentication*/
Auth::routes();


/** Admin Access */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    //Route::get('login', [UserController::class, 'adminLogin'])->name('admin.account.login');
    Route::get('/', [ProductController::class, 'index'])->name('admin.home');
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.list');
        Route::get('/add', [ProductController::class, 'create'])->name('admin.products.add');
        Route::post('/add', [ProductController::class, 'store'])->name('admin.products.store');
    });

    Route::group(['prefix' => 'devs'], function () {
        Route::get('/', [DeveloperController::class, 'index'])->name('admin.devs.list');
        Route::get('/add', [DeveloperController::class, 'create'])->name('admin.devs.add');
        Route::post('/add', [DeveloperController::class, 'store'])->name('admin.devs.store');
        Route::get('/show/{id}', [DeveloperController::class, 'edit'])->name('admin.devs.edit');
        Route::put('/update/{id}', [DeveloperController::class, 'update'])->name('admin.devs.update');
        Route::delete('/delete/{id}', [DeveloperController::class, 'destroy'])->name('admin.devs.delete');
    });
});

/** Developer Access */
Route::group(['prefix' => 'dev', 'middleware' => ['role:dev']], function () {
    //Route::get('login', [UserController::class, 'adminLogin'])->name('admin.account.login');
    Route::get('/', [ProductController::class, 'index'])->name('dev.home');
});

Route::get('/cert/{studentId}', [ProductController::class, 'generateCertificate'])->name('cert');
