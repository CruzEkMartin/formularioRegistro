<div>
    <div class="row mt-2">

        <div class="col-md-4">
            <div class="input-group mb-3">
                <span class="input-group-text" id="lblCelPhone">Teléfono Celular</span>
                <input id="telefono" type="number" maxlength="10"
                    class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                    value="{{ old('telefono') }}" autocomplete="telefono" aria-label="Teléfono Celular"
                    aria-describedby="lblCelPhone">

                @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        </div>

        <div class="col-md-4 input-group mb-3">
            {{-- <select id="year" name="yyyy" onchange="change_year(this)"
                                    class="form-control @error('year') is-invalid @enderror" required>
                                    <option value="" selected>Año</option>
                                </select>
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <select id="month" name="month" onchange="change_month(this)"
                                    class="form-control @error('month') is-invalid @enderror" required>
                                    <option value="" selected>Mes</option>
                                </select>
                                @error('month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <select id="day" name="day"
                                    class="form-control @error('day') is-invalid @enderror" disabled required>
                                    <option value="" selected>Día</option>
                                </select>
                                @error('day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}


            <span class="input-group-text" id="lblFechaNacimiento">{{ __('Fecha de Nacimiento') }}</span>
            <input wire:model.live="fechanacimiento" type="date" name="fechanacimiento"
                class="form-control @error('fechanacimiento') is-invalid @enderror" id="fechanacimiento"
                value="{{ old('fechanacimiento') }}" required autofocus aria-label="Fecha Nacimiento"
                aria-describedby="lblFechaNacimiento">

            @error('fechanacimiento')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>



    <!--Subir carta de autorizacion documento-->
    <div class="row">
        @if ($esMenor)
            <livewire:formulario.subir-carta-autorizacion-component />
        @endif
    </div>



</div>
