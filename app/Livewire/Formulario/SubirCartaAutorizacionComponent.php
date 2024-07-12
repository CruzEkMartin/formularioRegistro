<?php

namespace App\Livewire\Formulario;

use Livewire\Component;
use Livewire\WithFileUploads;

class SubirCartaAutorizacionComponent extends Component
{

      //trait para subir archivos
      use WithFileUploads;

      //tipo de archivo csv, máximo 100mb, para configurar el archivo temporal modificar config\livewire.php
      // #[Rule('required|file|mimetypes:text/csv,text/plain|max:102400')]
      public $carta;
      //public $ruta = "";

      //para reiniciar el nombre del archivo seleccionado cada que se cancela una subida o se elimina el archivo temporal
      public $cartaId;



    public function render()
    {
        return view('livewire.formulario.subir-carta-autorizacion-component');
    }
}
