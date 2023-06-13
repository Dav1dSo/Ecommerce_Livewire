<?php

namespace App\Http\Livewire\ShowProdutos;

use App\Models\Products;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        $products = Products::all();
        return view('livewire.show-produtos.show', compact('products'));
    }
}
