<?php

namespace App\Livewire\Formulario;

use Livewire\Component;

class PropuestaComponent extends Component
{

    //**propiedades de clase, variables que se usan en esta clase
    public $idTipoPropuesta;

    //**propiedades de modelo, los elementos del DOM de la vista
    public $tipoPropuesta;



    public function updatedTipoPropuesta($value)
    {
        //$this->calcularEdad($value);
        $this->idTipoPropuesta = $value;
    }

    public function render()
    {
        return view('livewire.formulario.propuesta-component');
    }
}
