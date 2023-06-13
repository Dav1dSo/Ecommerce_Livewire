<?php

namespace App\Http\Livewire\ShowProdutos;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $products = Products::paginate(10);
        return view('livewire.show-produtos.show', compact('products'));
    }
}
