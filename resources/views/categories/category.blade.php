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

    {{-- <a href="{{ url('/categories/category-name/category-id') }}">
        @component('components.post_type_2')
            @slot('category') Finance @endslot
            @slot('time') 8 @endslot
            @slot('title') How to make money online? @endslot
        @endcomponent
    </a>

    <div class="border-t pt-5">
        <a href="#">
            @component('components.post_type_2')
                @slot('category') Entertainment @endslot
                @slot('time') 5 @endslot
                @slot('title') How to organize an event? @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t pt-5">
        <a href="#">
            @component('components.post_type_2')
                @slot('category') E-commerce @endslot
                @slot('time') 6 @endslot
                @slot('title') What are the benefit of e-commerce? @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t pt-5">
        <a href="#">
            @component('components.post_type_3')
                @slot('category') Entertainment @endslot
                @slot('title') Dropshipping @endslot
                @slot('time') 5 @endslot
            @endcomponent
        </a>
    </div>

    <div>
        <div class="border-t pt-5">
            <div class="box-container">
                <div class="is-flex is-justify-content-space-between">
                    <label>Entertainment</label>
                    <label>5 min read</label>
                </div>
            </div>
        </div>

        <img src="/images/category-img2.png" class="category-img-full">

        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">How to organize an event?</h2>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t pt-5">
        <a href="#">
            @component('components.post_type_2')
                @slot('category') E-commerce @endslot
                @slot('time') 6 @endslot
                @slot('title') What are the benefit of e-commerce? @endslot
            @endcomponent
        </a>
    </div> --}}

    <div class="border-t is-hidden-tablet mb-5">
        @component('components.pagination')
        @endcomponent
    </div>
</div>
@endsection
