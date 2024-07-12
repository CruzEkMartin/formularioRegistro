<?php

namespace App\Livewire\Formulario;

use Livewire\Component;

class TipoRepresentacionComponent extends Component
{


    public $representacion ='';

    public function render()
    {
        return view('livewire.formulario.tipo-representacion-component');
    }
}
