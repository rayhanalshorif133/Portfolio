<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteAssetController;
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



Route::get('/', [HomeController::class, 'index'])->name('welcome');
// admin
Route::get('/admin', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        // admin user
        Route::get('/user', [UserController::class, 'adminUserIndex'])->name('user.index');
        Route::put('/user', [UserController::class, 'adminUserUpdate'])->name('user.update');
        // admin user

        // site
        Route::get('/site', [SiteAssetController::class, 'index'])->name('site.index');
        Route::put('/site', [SiteAssetController::class, 'update'])->name('site.update');
        // site
});

