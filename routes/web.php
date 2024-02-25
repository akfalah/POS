<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\userController;
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

Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [categoryController::class,'foodBeverage']);
    Route::get('/beauty-health', [categoryController::class, 'beautyHealth']);
    Route::get('/home-care', [categoryController::class, 'homeCare']);
    Route::get('/baby-kid', [categoryController::class, 'babyKid']);
});

Route::get('/id/{id?}/name/{name?}', [userController::class, 'userInfo'])->name('profile');

Route::get('/transaction', [transactionController::class, 'transac']);
