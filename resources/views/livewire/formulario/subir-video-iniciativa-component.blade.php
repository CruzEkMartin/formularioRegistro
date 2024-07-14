<div class="col-12 d-flex align-content-center p-0" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
    x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">

    <div class="col-8 p-0">
        <div class="input-group mb-3">
            <span class="input-group-text" id="lblVideo">{{ __('Propuesta de Iniciativa (video máx. 1:30 min)') }}</span>
            <input wire:model.live='video' id="upload{{ $videoId }}" name="video" type="file"
                class="form-control @error('video') is-invalid @enderror" accept="video/*" required>

            {{-- @error('video')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}

        </div>

    </div>


    <div class="col-4 ">
        <div class="align-items-center" x-show="uploading">
            <div class="ml-3" wire:loading wire:target="video">Cargando...</div>
            <progress max="100" x-bind:value="progress"></progress>
            <button class="ml-3 btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Cancelar"
                type="button" wire:click="$cancelUpload('video')"><i class="fas fa-ban"></i></button>
        </div>
    </div>



</div>
