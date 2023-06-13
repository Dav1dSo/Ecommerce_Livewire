<?php

namespace App\Http\Livewire\Filter;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Filter extends Component
{
    public function render()
    {
        return view('livewire.filter.filter');
    }
    public function FilterBy($value)
    {
        $products = DB::table('products')->orderBy('price', "$value")->paginate(10);
        return view('livewire.show-produtos.show', compact('products'));

    }
}
