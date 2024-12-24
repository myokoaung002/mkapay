<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PageController;


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
    Route::get('/', [PageController::class, 'home']);
});