<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\productController;
use App\Http\Controllers\frontendController;
use App\Models\product;
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
Route::get('/index', [frontendController::class, 'index']);
Route::get('/login', [frontendController::class, 'login']);
Route::get('/', [frontendController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);


Route::get('/dashboard', function () {
    return view('backend.page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/store', [productController::class, 'store'])->name('store');
    Route::get('/product', [productController::class, 'index'])->name('product');
    Route::get('/create', [productController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [productController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [productController::class, 'update'])->name('update.product');
    Route::get('/delete/{id}', [productController::class, 'delete'])->name('delete');
});
require __DIR__.'/auth.php';
