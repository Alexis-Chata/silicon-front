<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DetalleCarrito extends Component
{
    public function eliminar_producto($rowId){
        Cart::remove($rowId);
        $this->emit('actualizar');
    }

    public function render()
    {
        return view('livewire.detalle-carrito');
    }
}
