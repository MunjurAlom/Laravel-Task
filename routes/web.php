<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


 Route::get('/add', [ProductController::class, 'productAdd']);
 Route::post('/store_data', [ProductController::class, 'storeData'] );
 Route::get('/product_view', [ProductController::class, 'productView'])->name('product.view');
 Route::post('/porduct/update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
 Route::get('/product/edit/{id}', [ProductController::class, 'productEdit']);
 Route::get('/product/delete/{id}', [ProductController::class, 'productDelete']);

