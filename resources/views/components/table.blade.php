<div class="d-flex justify-content-between align-items-center mb-3">
     <div >
        {{ $btnTools }}
    </div>
    <div class="align-content-center">
        <span>Mostrar</span>
        <select wire:model.live='cant'>
            <option value="5">5</option>
            <option value="10" selected>10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <span>Entradas</span>
    </div>

    <div>
        <input type="text" wire:model.live='search' id='search' class="form-control" placeholder="Buscar...">
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-hover text-center">
        <thead  style="background-color: #b0aba1;">
            <tr>
                {{ $thead }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
