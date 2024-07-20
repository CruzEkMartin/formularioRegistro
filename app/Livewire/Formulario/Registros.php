<?php

namespace App\Livewire\Formulario;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Registros')]
class Registros extends Component
{
    public function render()
    {
        return view('livewire.formulario.registros');
    }
}
