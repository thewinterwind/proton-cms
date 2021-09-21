@extends('layouts.app')

@section('content')

@component('components.title_type_3')
    @slot('title') Delete Template @endslot
@endcomponent

<div class="box-container pt-0">
    <p class="p-sen">Deleting this collection will not delete any associated media or posts. However, this will
    delete the association of this collection with
    any content. Are you sure you want to delete
    this collection? If so, type the name of the tag below and press the delete button.</p>
</div>

@component('components.input_type_1')
    @slot('title') Delete Template @endslot
@endcomponent

<div class="mt-5 mb-6 pb-6">
    @component('components.button_type_1')
        @slot('title') Delete @endslot
    @endcomponent
</div>

@endsection