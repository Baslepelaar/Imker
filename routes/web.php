<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelenController;
use App\Http\Controllers\CKEditorController;

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

//Route::post('ckeditor/upload', 'CKEditorController@upload')->name('image-upload');
//Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('upload');

Route::get('/', function () {
    return view('dashboard');
});


Route::middleware([
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/artikelen', function () {
        return view('artikelen');
    })->name('artikelen');
    Route::resource('Artikelen', ArtikelenController::class);
    Route::get('/openArtikel/{id}', [ArtikelenController::class, 'publicShow'])->name('openArtikel');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/links', function () {
        return view('links');
    })->name('links');

    Route::get('/basiscursus', function () {
        return view('basiscursus');
    })->name('basiscursus');
});

Route::middleware(['admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return view ('admin.index');
        })->name('admin');

        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/{id}', [UserController::class, 'show'])->name('user');
        Route::get('/users/{id}/edit', [UserController::class, 'edit']);
        Route::patch('/users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::post('/users/destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::resource('Artikelen', ArtikelenController::class);
    });

});

