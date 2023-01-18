<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\User\MessageController;
use App\Http\Middleware\CheckIsAdmin;
use Illuminate\Support\Facades\Http;
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





Route::get('catalog', [CatalogController::class, 'catalog']);
Route::get('catalog/{category}/{product}', [CatalogController::class, 'product']);
Route::get('catalog/{category}', [CatalogController::class, 'category'])
        ->name('catalog_category');


Route::post('/add_to_cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [CartController::class, 'show']);

Route::get('/test', function (){
    $response = Http::get('http://api.weatherapi.com/v1/current.json', [
        'key'=>'f516f7d9b4d341ab923184228222712',
        'q' =>'Minsk'
    ])
    ;
    $data = $response->json();

    dump($data['current']['temp_f']);
});

Route::prefix('admin')->middleware('role:admin')->group(function (){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('categories', CategoryController::class)
    ->except('show');
    Route::resource('products', ProductController::class)
        ->except('show');
});
Route::middleware('auth')->prefix('user')->group(function (){
    Route::resource('messages', MessageController::class)
    ->except('show');
});
//Route::get('/admin', [DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
