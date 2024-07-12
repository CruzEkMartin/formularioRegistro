<?php

namespace App\Livewire\Formulario;

use Livewire\Component;
use Livewire\WithFileUploads;

class SubirArchivoIniciativaComponent extends Component
{

      //trait para subir archivos
      use WithFileUploads;

      //tipo de archivo csv, máximo 100mb, para configurar el archivo temporal modificar config\livewire.php
      // #[Rule('required|file|mimetypes:text/csv,text/plain|max:102400')]
      public $archivo;
      //public $ruta = "";

      //para reiniciar el nombre del archivo seleccionado cada que se cancela una subida o se elimina el archivo temporal
      public $archivoId;



    public function render()
    {
        return view('livewire.formulario.subir-archivo-iniciativa-component');
    }


    // //metodo para limpiar los campos y las validaciones
    // public function limpiar()
    // {
    //     //modificamos el id del upload para reiniciar el valor
    //     $this->archivo = null;
    //     $this->archivoId++;

    //     //reiniciamos los valores de los campos
    //     //$this->reset(['archivo', 'anio_ejercicio_id', 'periodicidad_id', 'nombre_periodicidad', 'selectedDependencias', 'selectedProgramas', 'observaciones']);
    //     //limpiamos las validaciones
    //     //$this->resetErrorBag();
    // }

}
