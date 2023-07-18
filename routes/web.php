<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('main.home');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post_login', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/dtl_murid/{id}', [HomeController::class, 'detail'])->name('dtl_murid');
    Route::get('/add_murid', [HomeController::class, 'create'])->name('add_murid');
    Route::post('/post_murid', [HomeController::class, 'store'])->name('murid.simpan');
    Route::get('/edit_murid/{id}', [HomeController::class, 'edit'])->name('edit.murid');
    Route::post('/update_murid/{id}', [HomeController::class, 'update'])->name('update.murid');
    Route::get('/hapus/{id}', [HomeController::class, 'hapus'])->name('hapus.murid');
});

