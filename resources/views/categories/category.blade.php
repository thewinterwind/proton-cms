@extends('layouts.app')

@section('content')
<div class="categories container nav-screen mb-large">
    <div class="is-flex is-justify-content-space-between box-container pt-0">
        <h1>E-commerce</h1>
        <label class="is-align-self-center fs-18">12 posts</label>
    </div>

    <div class="is-flex-desktop is-flex-wrap-wrap">
        @for ($i = 0; $i < 4; $i++)
            <div class="column is-half border-t padding-lrb pt-5 @if($i % 2) border-l-desktop @endif @if($i > 1) border-t-desktop @endif">
                {{-- @component('components.post_type_2')
                    @slot('category') Finance @endslot
                    @slot('time') 8 @endslot
                    @slot('title') How to make money online? @endslot
                @endcomponent --}}
                @component('components.post_type_2_with_image')
                    @slot('category') Entertainment @endslot
                    @slot('time') 5 @endslot
                    @slot('title') How to organize an event? @endslot
                @endcomponent
            </div>
        @endfor
    </div>

    <div class="border-t is-hidden-tablet mb-5">
        @component('components.pagination')
        @endcomponent
    </div>
</div>
@endsection
