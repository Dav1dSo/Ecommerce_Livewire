<?php

use App\Http\Livewire\ShoppingCart\ShoppingCart;
use App\Http\Livewire\ViewDetails\Details;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Main');
});

Route::get('/view-details/{id}', [Details::class, 'render']);


// Route::get('/ShowCarrinho', [ShoppingCart::class, 'render']);
// Route::get('/removeItem', [ShoppingCart::class, 'removeItem']);
