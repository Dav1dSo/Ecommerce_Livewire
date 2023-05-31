<?php

namespace App\Http\Livewire\ShoppingCart;

use Livewire\Component;

class ShoppingCart extends Component
{
    public $teste;

    public function render()
    {
        return view('livewire.shopping-cart.shopping-cart', ['teste' => $this->teste]);
    }
}
