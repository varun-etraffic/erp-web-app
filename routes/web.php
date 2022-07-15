<?php

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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['IsAdminRole'])->group(function(){  

//     Route::any('/admin-login',[App\Http\Controllers\AdminController::class, 'index'])->name('adminlogin');
// });

Route::any('/admin-login',[App\Http\Controllers\AdminController::class, 'index'])->name('adminlogin');

Route::any('/qrcode-scanner',[App\Http\Controllers\QrcodeController::class, 'qrcodscannereview'])->name('qrcodescanner');

Route::get('/generate-qrcode/{OrderId}/{UserId}',[App\Http\Controllers\QrcodeController::class,'qrcode']);

Route::get('/show-host-order/{OrderId}/{UserId}',[App\Http\Controllers\ShowHostOrderDetails::class,'ShowOrderDetail']);



