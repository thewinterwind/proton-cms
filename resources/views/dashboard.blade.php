@extends('layouts.app')

@section('content')

<div class="pt-5">
    @component('components.button_type_1')
        @slot('title') New Post @endslot
    @endcomponent
</div>

@component('components.google_analytics')
@endcomponent

<div class="border-t">
    <a href="{{ url('/collections') }}">
        @component('components.dashboard')
            @slot('title') Collections @endslot
            @slot('num') 7 @endslot
        @endcomponent
    </a>
</div>

<div class="border-t">
    <a href="#">
        @component('components.dashboard')
            @slot('title') Total Posts @endslot
            @slot('num') 35 @endslot
        @endcomponent
    </a>
</div>

<div class="border-t">
    <a href="#">
        @component('components.dashboard')
            @slot('title') Upcoming Posts @endslot
            @slot('num') 16 @endslot
        @endcomponent
    </a>
</div>

<div class="border-t">
    <a href="#">
        @component('components.dashboard')
            @slot('title') Audio @endslot
            @slot('num') 12 @endslot
        @endcomponent
    </a>
</div>

<div class="border-t">
    <a href="#">
        @component('components.dashboard')
            @slot('title') Documents @endslot
            @slot('num') 15 @endslot
        @endcomponent
    </a>
</div>

<div class="border-t">
    <a href="#">
        @component('components.dashboard')
            @slot('title') Photos @endslot
            @slot('num') 26 @endslot
        @endcomponent
    </a>
</div>

<div class="border-t">
    <a href="#">
        @component('components.dashboard')
            @slot('title') Videos @endslot
            @slot('num') 17 @endslot
        @endcomponent
    </a>
</div>
@endsection
