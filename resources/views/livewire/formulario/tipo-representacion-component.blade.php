<div class="input-group mb-3 p-0 ">
    <div class="col-12  d-flex  p-0">
        <span class="input-group-text" id="lblRepresentacion">{{ __('* Tipo de Representación') }}</span>

        <div class="form-check ">
            <input class=" form-check-input form-control " wire:model.live="representacion" name="representacion" type="radio"
                id="personal" value="Personal" required>
            <label class="form-check-label" for="personal">Personal</label>
        </div>

        <div class="form-check ">
            <input class="form-check-input form-control" wire:model.live="representacion" name="representacion"
                type="radio" id="Rorganizacion" value="Organizacion" required>
            <label class="form-check-label" for="Rorganizacion">Organización o Asociación</label>
        </div>

        @if ($representacion == 'Organizacion')

            <input wire:model="organizacion" type="text"
                class="form-control ml-3 w-50 @error('organizacion') is-invalid @enderror" value="{{ old('organizacion') }}"
                required autofocus aria-label="Organizacion" aria-describedby="lblRepresentacion"
                placeholder="Nombre de la Organización o Asociación">

    @endif

    </div>

    {{-- @if ($representacion == 'Organizacion')
        <div class="col-12 col-md-7  p-0">
            <input wire:model="organizacion" type="text"
                class="form-control ml-3 @error('organizacion') is-invalid @enderror" value="{{ old('organizacion') }}"
                required autofocus aria-label="Organizacion" aria-describedby="lblRepresentacion"
                placeholder="Nombre de la Organización o Asociación">
        </div>
    @endif --}}

</div>
