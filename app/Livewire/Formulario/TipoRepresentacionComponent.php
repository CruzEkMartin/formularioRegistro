<?php

namespace App\Livewire\Formulario;

use Livewire\Component;
use Livewire\Attributes\Validate;

class TipoRepresentacionComponent extends Component
{

    #[Validate('required')]
    public $representacion ='Personal';

    public function render()
    {
        return view('livewire.formulario.tipo-representacion-component');
    }
}
