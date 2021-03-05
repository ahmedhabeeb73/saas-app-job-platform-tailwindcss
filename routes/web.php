<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware'=>['auth','verified']],function (){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/settings/profile',[DashboardController::class,'profile'])->name('profile');
    Route::post('/settings/profile',[DashboardController::class,'profile_save'])->name('profile.save');
    Route::get('/settings/security',[DashboardController::class,'security'])->name('security');
    Route::post('/settings/security',[DashboardController::class,'security_save'])->name('security.save');
    Route::get('/settings/billing',[BillingController::class,'billing'])->name('billing');
    Route::post('/settings/billing',[BillingController::class,'billing_save'])->name('billing.save');
});


require __DIR__.'/auth.php';
