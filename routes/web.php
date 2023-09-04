<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ ClientController::class,'home']);
Route::get('/shop',[ ClientController::class,'shop'])->name('shop');
Route::get('/cart',[ ClientController::class,'cart'])->name('cart');
Route::get('/checkout',[ ClientController::class,'checkout'])->name('checkout');
Route::get('/account',[ ClientController::class,'account'])->name('account');
Route::get('/register',[ ClientController::class,'register'])->name('register');
Route::get('/login',[ ClientController::class,'login'])->name('login');



// ADMIN
Route::get('/admin',[ AdminController::class,'home'])->name('login');
Route::get('/add.category',[ AdminController::class,'addCategory'])->name('add.category');
Route::get('/list.category',[ AdminController::class,'listcategory'])->name('list.category');
Route::get('/slider',[ AdminController::class,'slider'])->name('slider');
Route::get('/add.slider',[ AdminController::class,'addSlider'])->name('add.slider');
Route::get('/produit',[ AdminController::class,'produit'])->name('produi');
Route::get('/add.produit',[ AdminController::class,'addProduit'])->name('add.produit');
Route::get('/orders',[ AdminController::class,'order'])->name('order');

// CATEGORY CONTROLLER
Route::post('/admin/savecategory',[ CategoryController::class,'saveCategory'])->name('saveCategory');
Route::delete('/deleteCategorie/{id}',[ CategoryController::class,'deleteCategorie'])->name('deleteCategorie');
Route::PUT('/categoryEdit/{id}',[ CategoryController::class,'categoryEdit'])->name('categoryEdit');