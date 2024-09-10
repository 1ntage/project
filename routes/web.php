<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = [
        ["name" => "Orange", "cost" => 50000000, "amount" => 27],
        ["name" => "Banana", "cost" => 120000000, "amount" => 17],
        ["name" => "Bread", "cost" => 70000000, "amount" => 0],
    ];

    return view('products', ['products' => $products]);
});
