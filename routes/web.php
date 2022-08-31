<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
//Auth::routes(['except' => ['register', 'login']]);

Route::group(['guest'],function () {
    Route::get('/register', [UserController::class, 'create'])->name('register');
    Route::post('/register', [UserController::class, 'store']);

    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'attempt']);

    Route::get('/verify', [UserController::class, 'getPhoneVerify'])->name('verify');
    Route::post('/verify', [UserController::class, 'postPhoneVerify']);
});

Route::group(['auth'], function () {

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function () {
        Route::get('/categories', function () {
            return view('admin.categories');
        });
        Route::get('/', fn()=> view('admin.index'));
    });

});


Route::get('/app/{app:slug}', [AppController::class, 'show'])->name('app.show');


Route::get('/', [HomeController::class, 'index'])->name('home');
