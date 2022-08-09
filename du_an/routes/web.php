<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
//Auth
Route::group(['prefix' =>'/auth'], function(){
    //Admin
    Route::group(['prefix' =>'/admin'], function(){
        Route::get('/',[AuthController::class,'loginAdmin'])->name('loginAdmin');
        Route::post('/',[AuthController::class,'postLoginAdmin'])->name('postLoginAdmin');
        Route::get('/logout',[AuthController::class,'logoutAdmin'])->name('logoutAdmin');
    });
    //Customer
    Route::group(['prefix' =>'/customer'], function(){
        Route::get('/',[AuthController::class,'loginCustomer'])->name('loginCustomer');
        Route::post('/',[AuthController::class,'postLoginCustomer'])->name('postLoginCustomer');
        Route::get('/logout',[AuthController::class,'logoutCustomer'])->name('logoutCustomer');
    });
});

//Customer
Route::group(['prefix' =>'/'], function(){
    Route::get('/',[CustomerController::class,'index'])->name('indexCustomer');
    Route::get('/category',[CustomerController::class,'category'])->name('categoryCustomer');
    Route::get('/cart',[CustomerController::class,'cart'])->name('cartCustomer');
    Route::get('/payment',[CustomerController::class,'payment'])->name('paymentCustomer');
    Route::get('/contact',[CustomerController::class,'contact'])->name('contactCustomer');
    Route::get('/detail_product',[CustomerController::class,'detailProduct'])->name('detailProductCustomer');
});

//Admin
Route::group(['prefix' =>'/admin'], function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
});
