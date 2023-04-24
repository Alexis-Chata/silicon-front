<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CarritoDropdown extends Component
{
    protected $listeners = ['actualizar'];

    public function eliminar_producto($rowId){
        Cart::remove($rowId);
        $this->emit('actualizar');
    }

    public function actualizar(){
        $this->render();
    }

    public function render()
    {
        return view('livewire.carrito-dropdown');
    }
}
