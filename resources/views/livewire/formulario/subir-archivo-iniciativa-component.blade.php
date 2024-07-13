<div class="col-12 d-flex align-content-center p-0" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
    x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">

    <div class="col-8 p-0">
        <div class="input-group mb-3">
            <span class="input-group-text" id="lblDocumento">{{ __('Propuesta de Iniciativa (JPG, PDF, Docx)') }}</span>
            <input wire:model.live='documento' id="upload{{ $documentoId }}" name="documento" type="file"
                class="form-control @error('documento') is-invalid @enderror"
                accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf, image/*"
                required>

            @error('documento')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>


    <div class="col-4 ">
        <div class="align-items-center" x-show="uploading">
            <div class="ml-3" wire:loading wire:target="documento">Cargando...</div>
            <progress max="100" x-bind:value="progress"></progress>
            <button class="ml-3 btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Cancelar"
                type="button" wire:click="$cancelUpload('documento')"><i class="fas fa-ban"></i></button>
        </div>
    </div>



</div>
