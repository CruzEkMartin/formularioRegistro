<?php

namespace App\Livewire;

use App\Models\Registro;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class RegistrosDatatable extends DataTableComponent
{
    protected $model = Registro::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        //ordena por id
        //$this->setDefaultSort('id', 'desc');
        //indicamos que se puede ordenar por campo adicional
        //$this->setSingleSortingStatus(false);

        //$this->setColumnSelectDisabled();

        // $this->setConfigurableAreas([
        //     'toolbar-left-end' => 'tables.boton_enviar_todos',
        //     // 'after-pagination' => 'tables.export',
        // ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Ap. Paterno", "apellido_paterno")
                ->sortable(),
            Column::make("Ap. Materno", "apellido_materno")
                ->sortable(),
            Column::make('Nombre Completo', 'nombre')
                ->collapseAlways()
                ->format(
                    fn ($value, $row, Column $column) => $row->nombre . ' ' . $row->apellido_paterno . ' ' . $row->apellido_materno
                ),
            Column::make("Telefono", "telefono")
                ->collapseOnTablet(true)
                ->sortable(),
            Column::make("Fecha Nac.", "fechanacimiento")
                ->sortable()
                ->collapseAlways()
                ->format(
                    fn ($value, $row, Column $column) => '<span>' . date('d/m/Y', strtotime($value)) . '</span>'
                )
                ->html(),
            Column::make("Carta", "carta")
                ->collapseAlways()
                ->sortable(),
            LinkColumn::make('Action')
                ->title(fn ($row) => 'carta')
                ->location(fn ($row) => route('registros.carta', $row)),
            Column::make("Representacion", "representacion")
                ->collapseOnTablet(true)
                ->sortable(),
            Column::make("Organizacion", "organizacion")
                ->collapseOnTablet(true)
                ->sortable(),
            Column::make("Discapacidad", "discapacidad")
                ->collapseOnTablet(true)
                ->sortable(),
            Column::make("Tema", "temaPropuesta")
                ->collapseOnTablet(true)
                ->sortable(),
            Column::make("Tipo", "tipoPropuesta")
                ->collapseOnTablet(true)
                ->sortable(),
            Column::make("Escrito", "escrito")
                ->collapseAlways()
                ->sortable(),
            Column::make("Documento", "documento")
                ->collapseAlways()
                ->sortable(),
            Column::make("Video", "video")
                ->collapseAlways()
                ->sortable(),
            Column::make("F. Alta", "created_at")
                ->collapseOnTablet(true)
                ->sortable()
                ->format(
                    fn ($value, $row, Column $column) => '<span>' . date_format($value, "d/m/Y") . '</span>'
                )
                ->html(),
        ];
    }
}
