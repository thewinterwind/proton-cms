@extends('layouts.app')

@section('content')
<div>
    <div class="px-5">
        <h1 class="mb-4">Delete Collection?</h1>
        <p class="p-sen text-gray">Deleting this collection will not delete any associated media or posts. However, this will delete the association of this collection with any content. Are you sure you want to delete this collection? If so, type the name of the tag below and press the delete button.</p>
    </div>

    <form class="mb-6 pb-5">
        <div class="mt-5">
            @component('components.input_type_1')
                @slot('title') URL Slug @endslot
            @endcomponent
        </div>

        <div class="mt-4">
            @component('components.button_type_1')
                @slot('title') Delete @endslot
            @endcomponent
        </div>
    </form>
</div>

@endsection