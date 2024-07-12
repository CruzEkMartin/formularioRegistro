<div class="container-fluid" style=" width: 100%;">

    <form wire:submit="save" class="was-validated">

        <div class="card">

            <div class="card-header text-center ">
                <h5>Registro al Programa</h5>
            </div> {{-- card-header --}}


            <div class="card-body">

                <!--nombre, apellido paterno, apellido materno-->
                <div class="row">

                    <!--nombre-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblNombre">{{ __('* Nombre(s)') }}</span>
                            <input wire:model="nombre" id="nombre" type="text"
                                class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}"
                                required autocomplete="nombre" autofocus aria-label="Nombre(s)"
                                aria-describedby="lblNombre">

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--apellido paterno-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblApellidoPaterno">{{ __('* Apellido Paterno') }}</span>
                            <input wire:model="apellido_paterno" id="apellido_paterno" type="text"
                                class="form-control @error('apellido_paterno') is-invalid @enderror"
                                value="{{ old('apellido_paterno') }}" required autocomplete="apellido_paterno" autofocus
                                aria-label="Apellido Paterno" aria-describedby="lblApellidoPaterno">

                            @error('apellido_paterno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!--apellido materno-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblApellidoMaterno">{{ __('* Apellido Materno') }}</span>
                            <input wire:model="apellido_materno" id="apellido_materno" type="text"
                                class="form-control @error('apellido_materno') is-invalid @enderror"
                                value="{{ old('apellido_materno') }}" required autocomplete="apellido_materno" autofocus
                                aria-label="Apellido Materno" aria-describedby="lblApellidoMaterno">

                            @error('apellido_materno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <!--fecha nacimiento, municipio, modalidad-->
                <div class="row">

                    {{-- <div class="form-group col-md-4">
                        <label for="periodicidad_id" class="form-label">Periodicidad</label>
                        <select wire:model='periodicidad_id' name="periodicidad_id" id="periodicidad_id"
                            class="form-control @error('periodicidad_id') is-invalid @enderror" required>
                            <option value="">Seleccionar</option>

                            @foreach ($this->Periodicidad as $periodicidad)
                                <option value="{{ $periodicidad->id }}">{{ $periodicidad->nombre }}</option>
                            @endforeach

                        </select>

                        @error('periodicidad_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    --}}

                    <!--fecha nacimiento-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text"
                                id="lblFechaNacimiento">{{ __('* Fecha de Nacimiento') }}</span>
                            <input wire:model.live="fechanacimiento" type="date"
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

                    <!--municipio-->
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="lblMunicipio">{{ __('* Municipio') }}</span>
                            <input wire:model="municipio" id="municipio" type="text"
                                class="form-control @error('municipio') is-invalid @enderror" value="Othón P. Blanco"
                                required disabled autofocus aria-label="Municipio" aria-describedby="lblMunicipio">
                        </div>

                    </div>


                    <!--modalidad-->
                    <div class="col-md-4">
                        <div class="input-group mb-3 align-items-center">
                            <span class="input-group-text" id="lblModalidad">{{ __('* Modalidad') }}</span>
                            @foreach ($modalidades as $modalidad)
                                <div class="form-check ">
                                    <input type="radio" wire:model="selectedModalidad" id="{{ $modalidad }}"
                                        class="form-check-input form-control @error('modalidad') is-invalid @enderror"
                                        value="{{ $modalidad }}" name="modalidad"
                                        @if ($selectedModalidad === $modalidad) checked @endif disabled>
                                    <label for="{{ $modalidad }}">{{ $modalidad }}</label>
                                </div>
                            @endforeach


                        </div>
                        @error('modalidad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>


                <!--Tipo de representacion-->
                <div class="row">
                    <div class="col-md-12">
                        <livewire:formulario.tipo-representacion-component />
                    </div>

                </div>


                <!--Discapacidades-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3 align-items-center">
                            <span class="input-group-text" id="lblDiscapacidad">{{ __('* Discapacidades') }}</span>
                            <div class="form-check ">
                                <input class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                    name="discapacidad[]" type="checkbox" id="opcion_1" value="opcion_1"
                                    @if (in_array('opcion_1', old('discapacidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_1">Opcion 1</label>
                            </div>

                            <div class="form-check ">
                                <input
                                    class="form-check-input form-control @error('discapacidad') is-invalid @enderror"
                                    name="discapacidad[]" type="checkbox" id="opcion_2" value="opcion_2"
                                    @if (in_array('opcion_2', old('discapacidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_2">Opcion 2</label>
                            </div>

                            @error('discapacidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>


                <!--Accesibilidades-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3 align-items-center">
                            <span class="input-group-text"
                                id="lblAccesibilidad">{{ __('* Medidas de Accesibilidad') }}</span>
                            <div class="form-check ">
                                <input
                                    class="form-check-input form-control @error('accesibilidad') is-invalid @enderror"
                                    name="accesibilidad[]" type="checkbox" id="opcion_11" value="opcion_1"
                                    @if (in_array('opcion_1', old('accesibilidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_11">Opcion 1</label>
                            </div>

                            <div class="form-check ">
                                <input
                                    class="form-check-input form-control @error('accesibilidad') is-invalid @enderror"
                                    name="accesibilidad[]" type="checkbox" id="opcion_22" value="opcion_2"
                                    @if (in_array('opcion_2', old('accesibilidad', []))) checked @endif>
                                <label class="form-check-label" for="opcion_22">Opcion 2</label>
                            </div>

                            @error('accesibilidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>



                <!--Propuesta de iniciativa documento-->
                <div class="row">
                    <div class="col-12">
                        <livewire:formulario.subir-archivo-iniciativa-component />
                    </div>
                </div>

                <!--Propuesta de iniciativa video-->
                <div class="row">
                    <div class="col-12">
                        <livewire:formulario.subir-video-iniciativa-component />
                    </div>
                </div>


                <!--Formulario de consulta-->
                <div class="row">

                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text"
                                id="lblConsulta">{{ __('* Formulario de Consulta') }}</span>
                            <input id="consulta" type="text"
                                class="form-control @error('consulta') is-invalid @enderror" name="consulta"
                                value="Formulario de consulta" required disabled autofocus aria-label="Consulta"
                                aria-describedby="lblConsulta">
                        </div>

                    </div>
                </div>


                <!--Subir carta de autorizacion documento-->
                @if ($esMenor)
                    <div class="row">
                        <div class="col-12">
                            <livewire:formulario.subir-carta-autorizacion-component />
                        </div>
                    </div>
                @endif


                <!--Subir aviso de privacidad documento-->
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3 align-items-start">
                            <span class="input-group-text" id="lblAviso">{{ __('Aviso de Privacidad') }}</span>
                            <label class="form-check-label col-md-7 ml-2" for="lblAviso">Manifiesto que he leído en su
                                totalidad el Aviso de Privacidad Integral de la Consulta pública, abierta y regular,
                                estrecha, libre e informada a personas con discapacidad en el Municipio de Othón P.
                                Blanco en materia de sus derechos, transporte inclusivo y turismo inclusivo, y entiendo
                                plenamente su alcance como contenido, por lo que otorgo mi consentimiento para que el
                                Municipio de Othón P. Blanco trate mis datos personales de acuerdo al
                                Aviso de Privacidad.</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input" name="chkAviso" type="checkbox" value="1"
                            {{ old('chkAviso') == '1' ? 'checked' : '' }} id="chkAviso" required>
                        <label class="form-check-label" for="chkAviso">
                            Confirmo que he Leído y Acepto el Aviso de Privacidad.
                        </label>
                    </div>
                    @error('chkAviso')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>
                </div>


            </div> {{-- card-body --}}

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Enviar
                    formulario de registro</button>
            </div>

        </div> {{-- card --}}
    </form>

</div>
