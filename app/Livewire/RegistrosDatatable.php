<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Registro;

class RegistrosDatatable extends DataTableComponent
{
    protected $model = Registro::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Apellido paterno", "apellido_paterno")
                ->sortable(),
            Column::make("Apellido materno", "apellido_materno")
                ->sortable(),
            Column::make("Municipio", "municipio")
                ->sortable(),
            Column::make("Modalidad", "modalidad")
                ->sortable(),
            Column::make("Telefono", "telefono")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Fechanacimiento", "fechanacimiento")
                ->sortable(),
            Column::make("Carta", "carta")
                ->sortable(),
            Column::make("Extension carta", "extension_carta")
                ->sortable(),
            Column::make("Tamanio carta", "tamanio_carta")
                ->sortable(),
            Column::make("Representacion", "representacion")
                ->sortable(),
            Column::make("Organizacion", "organizacion")
                ->sortable(),
            Column::make("Discapacidad", "discapacidad")
                ->sortable(),
            Column::make("TemaPropuesta", "temaPropuesta")
                ->sortable(),
            Column::make("TipoPropuesta", "tipoPropuesta")
                ->sortable(),
            Column::make("Escrito", "escrito")
                ->sortable(),
            Column::make("Documento", "documento")
                ->sortable(),
            Column::make("Extension documento", "extension_documento")
                ->sortable(),
            Column::make("Tamanio documento", "tamanio_documento")
                ->sortable(),
            Column::make("Video", "video")
                ->sortable(),
            Column::make("Extension video", "extension_video")
                ->sortable(),
            Column::make("Tamanio video", "tamanio_video")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
