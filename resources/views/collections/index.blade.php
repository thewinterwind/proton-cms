@extends('layouts.app')

@section('content')

@component('components.notification')
    @slot('title') Collection was successfully added! @endslot
@endcomponent

<div class="box-container">
    <div class="is-flex is-justify-content-space-between is-align-items-center">
        <h2 class="is-size-3 has-text-weight-semibold">Collections</h2>
        <a href="{{ url('/collections/create') }}">
            <label class="is-size-6">New <span class="pl-2">+</span></label>
        </a>
    </div>
</div>

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
