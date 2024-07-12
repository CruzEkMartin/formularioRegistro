<?php

namespace App\Livewire\Formulario;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class PrincipalComponent extends Component
{
    //trait para subir archivos
    use WithFileUploads;

    //tipo de archivo csv, máximo 100mb, para configurar el archivo temporal modificar config\livewire.php
    // #[Rule('required|file|mimetypes:text/csv,text/plain|max:102400')]
    public $archivo;
    //public $ruta = "";

    //para reiniciar el nombre del archivo seleccionado cada que se cancela una subida o se elimina el archivo temporal
    public $archivoId;



    //**propiedades de clase, variables que se usan en esta clase
    public bool $esMenor = false;
    public $edad;


    //**propiedades de modelo, los elementos del DOM de la vista
    public $Id, $nombre, $apellido_paterno, $apellido_materno, $fechanacimiento, $municipio, $selectedModalidad, $discapacidad;

    //**valores de elementos del dom */
    public $modalidades = ['Virtual', 'Presencial'];
    public $dispacidades = [];


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

    public function updatedDiscapacidad($value)
    {

        $this->dispacidades = $value;

    }

    // public function calcularEdad($fechanacimiento)
    // {
    //     $this->edad = Carbon::parse($fechanacimiento)->age;

    //     if ($this->edad < 18) {
    //         $this->esMenor =  true;
    //     } else {
    //         $this->esMenor = false;
    //     }
    // }

    public function mount()
    {
        $this->selectedModalidad = $this->modalidades[0]; // Selecciona el primer elemento por defecto
    }

    public function render()
    {
        return view('livewire.formulario.principal-component');
    }
}
