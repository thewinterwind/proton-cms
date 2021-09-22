@extends('layouts.app')

@section('content')

@component('components.notification')
    @slot('title') Collection was successfully added! @endslot
@endcomponent

@component('components.title_type_2')
    @slot('title') Collections @endslot
@endcomponent

@component('components.collections')
    @slot('title') Last 30 Days @endslot
    @slot('mediaPosts') 23 Media, 16 Posts @endslot
@endcomponent

<div class="border-t pt-5">
    @component('components.collections')
        @slot('title') E-commerce @endslot
        @slot('mediaPosts') 17 Media, 9 Posts @endslot
    @endcomponent
</div>

<div class="border-t pt-5">
    @component('components.collections')
        @slot('title') Entertainment @endslot
        @slot('mediaPosts') 15 Media, 28 Posts @endslot
    @endcomponent
</div>

<div class="border-t pt-5">
    @component('components.collections')
        @slot('title') Finance @endslot
        @slot('mediaPosts') 8 Media, 4 Posts @endslot
    @endcomponent
</div>

@endsection
