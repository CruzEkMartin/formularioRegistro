<div>
     <!--tema propuesta, tipo propuesta-->
     <div class="row">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <span class="input-group-text"
                    id="lblTemaPropuesta">{{ __('Tema de Propuesta') }}</span>
                <select name="temaPropuesta" id="temaPropuesta"
                    class="form-control @error('temaPropuesta') is-invalid @enderror" required>
                    <option value="">Seleccionar</option>
                    <option value="Derechos">Derechos</option>
                    <option value="Transporte Inclusivo">Transporte Inclusivo</option>
                    <option value="Turismo Inclusivo">Turismo Inclusivo</option>

                </select>

                @error('temaPropuesta')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>

        <div class="col-md-4">
            <div class="input-group mb-3">
                <span class="input-group-text"
                    id="lblTipoPropuesta">{{ __('Propuesta por') }}</span>
                <select wire:model.live='tipoPropuesta' name="tipoPropuesta" id="tipoPropuesta"
                    class="form-control @error('tipoPropuesta') is-invalid @enderror" required>
                    <option value="">Seleccionar</option>
                    <option value="1">Libre</option>
                    <option value="2">Documento PDF o Docx</option>
                    <option value="3">Video</option>
                </select>

                @error('tipoPropuesta')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <!--Propuesta Libre-->
    @if ($idTipoPropuesta == 1)
    <div class="row">
        <div class="col-12">
            <div class="input-group align-items-start mb-3">
                <span class="input-group-text"
                    id="lblEscrito">{{ __('Propuesta libre') }}</span>
                <textarea class="form-control @error('tipoPropuesta') is-invalid @enderror" name="escrito" id="escrito"
                    cols="60" rows="4" required></textarea>
                @error('escrito')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    @endif



    <!--Propuesta de iniciativa documento-->
    @if ($idTipoPropuesta == 2)
    <div class="row">
        <div class="col-12">
            <livewire:formulario.subir-archivo-iniciativa-component />
        </div>
    </div>
    @endif


    <!--Propuesta de iniciativa video-->
    @if ($idTipoPropuesta == 3)
    <div class="row">
        <div class="col-12">
            <livewire:formulario.subir-video-iniciativa-component />
        </div>
    </div>
    @endif


</div>
