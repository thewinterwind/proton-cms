@extends('layouts.app')

@section('content')

@component('components.notification')
    @slot('title') Post was successfully added! @endslot
@endcomponent

<div class="is-flex is-justify-content-space-between is-align-self-center">
    @component('components.title_type_3')
        @slot('title') Posts @endslot
    @endcomponent

    <div class="pt-5">
        @component('components.button_type_3')
        @endcomponent
    </div>
</div>

@component('components.input_type_6')
@endcomponent

@component('components.sort')
    @slot('title') Title @endslot
@endcomponent

@component('components.post_type_2')
    @slot('category') Finance @endslot
    @slot('time') 8 min @endslot
    @slot('title') How to make money online? @endslot
@endcomponent

<div class="border-t">
    <div class="pt-5">
        @component('components.post_type_2')
            @slot('category') Entertainment @endslot
            @slot('time') 5 min @endslot
            @slot('title') How to organize an event? @endslot
        @endcomponent
    </div>
</div>

<div class="border-t">
    <div class="pt-5">
        @component('components.post_type_2')
            @slot('category') E-commerce @endslot
            @slot('time') 6 min @endslot
            @slot('title') What are the benefits of e-commerce? @endslot
        @endcomponent
    </div>
</div>

@endsection
