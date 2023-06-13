<?php

namespace App\Http\Livewire\ViewDetails;

use App\Models\Products;
use Illuminate\Http\Request;
use Livewire\Component;

class Details extends Component
{
    public function render($id)
    {
        $product_id = Products::find($id);
        return view('livewire.view-details.details', compact('product_id'));
    }
}
