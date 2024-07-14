<div class="col-12 d-flex align-content-center "  x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">

    <div class="col-8 p-0">
        <div class="input-group mb-3">
            <span class="input-group-text" id="lblCarta">{{ __('Autorización Tutor (JPG, PDF)') }}</span>
            <input wire:model.live='carta' id="upload{{ $cartaId }}" name="carta" type="file"
                class="form-control @error('carta') is-invalid @enderror"
                accept="application/pdf, image/jpeg,image/png,image/svg+xml,image/webp"
                required>

            @error('carta')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

    </div>


    <div class="col-4 ">
        <div class="align-items-center" x-show="uploading">
            <div class="ml-3" wire:loading wire:target="carta">Cargando...</div>
            <progress max="100" x-bind:value="progress"></progress>
            <button class="ml-3 btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Cancelar"
                type="button" wire:click="$cancelUpload('carta')"><i class="fas fa-ban"></i></button>
        </div>
    </div>



</div>
