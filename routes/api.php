<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pizzas', 'PizzasController')->name('pizza.index');

Route::get('currencies', 'CurrenciesController')->name('currencies');

Route::middleware('cors')->post('place-order', 'OrdersController')->name('orders');

Route::middleware('cors')->post('contact', 'ContactController')->name('contact');
