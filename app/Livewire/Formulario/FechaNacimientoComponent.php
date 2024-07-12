<?php

namespace App\Livewire\Formulario;

use Carbon\Carbon;
use Livewire\Component;

class FechaNacimientoComponent extends Component
{

    //**propiedades de clase, variables que se usan en esta clase
    public bool $esMenor = false;
    public $edad;

    //**propiedades de modelo, los elementos del DOM de la vista
    public $fechanacimiento;

    public function updatedFechanacimiento($value)
    {
        //$this->calcularEdad($value);

        $this->edad = Carbon::parse($value)->age;

        if ($this->edad < 18) {
            $this->esMenor =  true;
        } else {
            $this->esMenor = false;
        }

    }

    public function render()
    {
        return view('livewire.formulario.fecha-nacimiento-component');
    }
}
