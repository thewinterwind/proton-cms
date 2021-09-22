@extends('layouts.app')

@section('content')
<div>
    <img src="/images/photo.png" width="100%">
    <div class="box-container">
        <h5 class="has-text-weight-bold mb-2">Hey! I'm Jacob!</h5>
        <p class="text-gray has-text-weight-bold fs-14">I deal with finance and management. I love this business and share it with everyone. I also love to write articles, I will gladly share these articles with you.</p>
    </div>

    <div class="border-t pt-5">
        @component('components.post_type_2')
            @slot('category') Finance @endslot
            @slot('time') 8 @endslot
            @slot('title') How to make money online? @endslot
        @endcomponent
    </div>
    <div class="border-t pt-5">
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
    </div>
</div>
@endsection
