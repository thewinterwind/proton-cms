@extends('layouts.app')

@section('content')

<div class="is-flex is-justify-content-space-between">
    @component('components.title_type_3')
        @slot('title') Templates @endslot
    @endcomponent

    @component('components.button_type_3')
        @slot('title') Add New @endslot
    @endcomponent
</div>

@component('components.tabs_group')
    @slot('tabOne') All @endslot
    @slot('tabTwo') Fragment @endslot
    @slot('tabThree') Page @endslot
    @slot('tabFour') Script @endslot
    @slot('tabFive') Style @endslot
@endcomponent

@component('components.post_template')
    @slot('category') Fragment @endslot
    @slot('posts') 12 posts @endslot
    @slot('title') Sample for Posts @endslot
@endcomponent

<div class="border-t pt-5">
    @component('components.post_template')
        @slot('category') Page @endslot
        @slot('posts') 8 posts @endslot
        @slot('title') Example Text @endslot
    @endcomponent
</div>

<div class="border-t pt-5">
    @component('components.post_template')
        @slot('category') Fragment @endslot
        @slot('posts') 5 posts @endslot
        @slot('title') Enjoy @endslot
    @endcomponent
</div>

<div class="border-t pt-5">
    @component('components.post_template')
        @slot('category') Fragment @endslot
        @slot('posts') 12 posts @endslot
        @slot('title') Lifestyle Post @endslot
    @endcomponent
</div>

@endsection
