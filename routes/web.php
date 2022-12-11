<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\FirstController;
use App\Http\Middleware\CheckIsAdmin;
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

Route::get('/', [FirstController::class, 'index']);


Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])
    ->withoutMiddleware('isAdmin');
    Route::resource('categories', CategoryController::class)
    ->except('show');
    Route::resource('products', ProductController::class)
        ->except('show');
});
//Route::get('/admin', [DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
