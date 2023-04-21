<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CarritoDropdown extends Component
{
    public function eliminar_producto($rowId){
        Cart::remove($rowId);
    }
    public function render()
    {
        return view('livewire.carrito-dropdown');
    }
}
