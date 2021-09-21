@extends('layouts.app')

@section('content')

@component('components.title_type_3')
    @slot('title') Sample for Posts @endslot
@endcomponent

@component('components.input_type_1')
    @slot('title') Name @endslot
@endcomponent

<div class="box-container pt-0">
    <h3 class="fs-18 has-text-weight-semibold has-text-black pb-3">Type</h3>
    @component('components.multiple_selection_active')
        @slot('title') Fragment @endslot
    @endcomponent
    @component('components.multiple_selection_inactive')
        @slot('title') Page @endslot
    @endcomponent
    @component('components.multiple_selection_inactive')
        @slot('title') Script @endslot
    @endcomponent
    @component('components.multiple_selection_inactive')
        @slot('title') Style @endslot
    @endcomponent
</div>

@component('components.input_type_4')
    @slot('title') Content @endslot
@endcomponent

@component('components.input_type_1')
    @slot('title') URL Slug (Optional) @endslot
@endcomponent

<div class="py-2">
    @component('components.button_type_1')
        @slot('title') Update Template @endslot
    @endcomponent
</div>

<div class="box-container pt-0">
    <button class="button-delete text-black">Show Preview</button>
    <div class="border-t">
        <button class="button-delete">Delete Template</button>
    </div>
</div>

@endsection
