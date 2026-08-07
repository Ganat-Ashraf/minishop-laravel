<?php
use App\Http\Controllers\ProductsController;
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

Route::get('/' , [ProductsController::class, 'home']);
Route::post('/store', [ProductsController::class, 'store'])->name('store');

Route::get('/about', [ProductsController::class, 'about']);

Route::get('/blog' , [ProductsController::class, 'blog']);

Route::get('/cart' , [ProductsController::class, 'cart']);

Route::delete('/cart/{id}', [ProductsController::class, 'destroy'])->name('cart.remove');
Route::post('/checkout', [ProductsController::class, 'checkout'])->name('checkout');

Route::get('/admin/create', [ProductsController::class, 'create']);
Route::post('/admin/store', [ProductsController::class, 'storeProduct'])->name('products.store');