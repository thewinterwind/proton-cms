@extends('layouts.app')

@section('content')

{{-- <div class="notification-red mb-4 is-size-6 is-flex">
    <img src="/images/attention_icon.png" class="mr-4">
    Username and Password Don't Match
</div> --}}
    <div class="modal-background"></div>

<div class="columns is-centered is-vcentered m-0">
    <div class="column is-4 has-background-white">
        @component('components.title_type_3')
            @slot('title') Login @endslot
        @endcomponent

        @component('components.input_type_1')
            @slot('title') Username @endslot
        @endcomponent

        @component('components.input_type_1')
            @slot('title') Password @endslot
        @endcomponent

        <div class="mb-6 pb-6 mt-3">
            @component('components.button_type_1')
                @slot('title') Login @endslot
            @endcomponent
        </div>
    </div>
</div>

@endsection