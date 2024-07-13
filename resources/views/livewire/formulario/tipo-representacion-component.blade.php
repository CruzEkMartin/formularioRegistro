<div>
    <div class="row col-12">

        <div class="input-group d-flex mb-3 ">

            <span class="input-group-text" id="lblRepresentacion">{{ __('Tipo de Representación') }}</span>

            <div class="form-check ">
                <input class=" form-check-input form-control " wire:model.live="representacion" name="representacion"
                    type="radio" id="personal" value="Personal"  >
                <label class="form-check-label" for="personal">Personal</label>
            </div>

            <div class="form-check ">
                <input class="form-check-input form-control" wire:model.live="representacion" name="representacion"
                    type="radio" id="Rorganizacion" value="Organizacion" >
                <label class="form-check-label" for="Rorganizacion">Organización o Asociación</label>
            </div>


            @error('representacion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
    </div>


    @if ($representacion == 'Organizacion')
        <div class="row col-12">
            <div class=" input-group d-flex mb-3 ">
                <span class="input-group-text" id="lblOrganizacion">{{ __('Nombre de Organizacion/Asociación') }}</span>
                <input wire:model="organizacion" type="text" name="organizacion" id="organizacion"
                    class="form-control ml-3 @error('organizacion') is-invalid @enderror"
                    value="{{ old('organizacion') }}" required autofocus aria-label="Organizacion"
                    aria-describedby="lblOrganizacion"
                    placeholder="Proporcione el Nombre de la Organización o Asociación">

                @error('organizacion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    @endif

</div>
