<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Backend\AdminUserController;


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

Route::prefix('admin')->namespace('Backend')->middleware('auth:admin_user')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('admin.home');
});

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm']);

Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::resource('admin-user', AdminUserController::class);