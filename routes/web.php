<?php

use App\Http\Livewire\ShoppingCart\ShoppingCart;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Main');
});

Route::get('/ShowCarrinho', [ShoppingCart::class, 'render']);
Route::get('//removeItem', [ShoppingCart::class, 'removeItem']);