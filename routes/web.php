<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ PageController::class, 'index' ])->name('index');

Route::get('/login', [ AuthController::class, 'login' ])->name('login-form');
Route::post('/login', [ AuthController::class, 'loginHandle' ])->name('login-handle');
Route::get('/register', [ AuthController::class, 'register' ])->name('register-form');
Route::post('/register', [ AuthController::class, 'registerHandle' ])->name('register-handle');
Route::get('/logout', [ AuthController::class, 'logout' ])->name('logout')->middleware('isAuth');


Route::group(['middleware' => 'isAuth'], function(){
    Route::get('/list', [ PageController::class, 'listBarang' ])->name('daftar-barang');
    Route::get('/penawaran', [ PageController::class, 'tawar' ])->name('penawaran');
    Route::post('/penawaran', [ PageController::class, 'storeLelang' ])->name('store-lelang');
});

// Bagian Admin
Route::group(['middleware' => ['isAuth', 'isAdmin'], 'prefix' => 'dashboard'], function(){
    Route::resource('barang', AdminController::class)->parameter('barang', 'id')->except('show');
});
