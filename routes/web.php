<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelenController;

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
    return view('dashboard');
});

Route::middleware([
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view ('admin.index');
        })->name('admin');

        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/{id}', [UserController::class, 'show'])->name('user');
        Route::get('/Artikelen', [ArtikelenController::class, 'index'])->name('Artikelen');
        Route::get('/Artikelen/create', [ArtikelenController::class, 'create']);
//        Route::get('/Artikelen', [ArtikelenController::class, 'show']);
//
//        Route::resource('Artikelen', ArtikelenController::class);
//        Route::get('Artikelen/create',[ArtikelenController::class,'create']);
//        Route::post('Artikelen/store',[ArtikelenController::class,'store'])->name('admin.Artikelen.store');
    });
});
