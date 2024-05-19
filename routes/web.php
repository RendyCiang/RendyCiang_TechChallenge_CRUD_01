<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ViewProduct');
});


//Product Page
Route::get('/product',[ProductController::class, 'ShowProductPage']);
Route::get('/add-product', [ProductController::class, 'ShowAddProductPage']);
//Post Product To Home Page
Route::post('/add-product1',[ProductController::class,'AddProduct']);
Route::get('/edit-product/{id}', [ProductController::class, 'EditProduct']);
Route::patch('/update-product/{id}', [ProductController::class, 'UpdateProduct']);
Route::delete('/delete-product/{id}', [ProductController::class, 'DeleteProduct']);