@extends('layouts.app')

@section('content')
<div class="container is-max-widescreen mb-5">
    <div class="is-flex-desktop columns is-variable is-8-desktop">
        <div class="column is-half-desktop">
            <img src="/images/photo.png" width="100%" class="inverted">
        </div>
        <div class="column is-half-desktop box-container px-5">
            <h5 class="is-size-1-desktop has-text-weight-bold-mobile mb-2">Hey! I'm Jacob!</h5>
            <p class="fs-18-desktop text-gray has-text-weight-bold fs-14">I deal with finance and management. I love this business and share it with everyone. I also love to write articles, I will gladly share these articles with you. I hope you enjoy it. I love this business and share it with everyone. I deal with finance and management.</p>
        </div>
    </div>

    <div class="is-flex-desktop is-flex-wrap-wrap">
        @for ($i = 0; $i < 4; $i++)
            <div class="column is-half border-t padding-lrb pt-5 @if($i % 2) border-l-desktop @endif @if($i > 1) border-t-desktop @endif">
                @component('components.post_type_2')
                    @slot('category') Finance @endslot
                    @slot('time') 8 @endslot
                    @slot('title') How to make money online? @endslot
                @endcomponent
            </div>
        @endfor
    </div>
    <div class="has-text-centered my-6">
        <a href="#" class="button m-btn">More posts</a>
    </div>

    {{-- <div class="border-t pt-5">
        @component('components.post_type_2')
            @slot('category') Entertainment @endslot
            @slot('time') 5 @endslot
            @slot('title') How to organize an event? @endslot
        @endcomponent
    </div>
    <div class="border-t pt-5">
        @component('components.post_type_2')
            @slot('category') E-commerce @endslot
            @slot('time') 6 @endslot
            @slot('title') What are the benefit of e-commerce? @endslot
        @endcomponent
    </div>
    <div class="border-t">
        <a href="#">
            @component('components.subtitle')
                @slot('category') E-commerce @endslot
                @slot('time') 6 @endslot
                @slot('title') What are the benefit of e-commerce? @endslot
            @endcomponent
        </a>
    </div> --}}
</div>
@endsection
