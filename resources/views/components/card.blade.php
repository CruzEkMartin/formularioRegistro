@props(['cardTitle' => '', 'cardTools' => '', 'cardFooter' => ''])

<div class="card">
     {{-- <div class="card-header">
{{ $cardTitle }}
    </div> --}}

    <div class="card-body">
        {{ $slot }}
    </div>

    <div class="card-footer">
        {{ $cardFooter }}
    </div>

</div>
