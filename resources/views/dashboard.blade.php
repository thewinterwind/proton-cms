@extends('layouts.app')

@section('content')

<div class="container nav-screen mb-large pb-5">
    <div class="is-flex-desktop is-justify-content-space-between pt-5">
        <h1 class="is-hidden-touch is-size-3 has-text-weight-semibold">Dashboard</h1>
        @component('components.button_type_1')
            @slot('title') New Post @endslot
        @endcomponent
    </div>

    <div class="is-flex-desktop is-flex-wrap-wrap mt-5 mb-6">

        <div class="p-32 box-container column is-one-quarter">
            <div class="is-flex-mobile is-align-items-center mt-4">
                <img src="/images/google_desktop.png" class="google-icon">
                <div class="is-flex">
                    <h5 class="is-size-4 has-text-weight-semibold">Google Analytics</h5>
                    <div class="is-align-self-center ml-5"><img src="/images/external_link_icon.png" class="pt-2 pl-2"></div>
                </div>
            </div>
        </div>

        @for ($i = 1; $i < 8; $i++)
            <div class="p-32 column is-one-quarter border-t box-container @if($i % 4) border-l-desktop @endif @if($i > 3) border-t-desktop @endif">
                <a href="{{ url('/categories/category-name') }}" class="category-num">
                    <h2 class="is-hidden-touch is-size-4-mobile text-gray px-0">7</h2>
                    <div class="is-flex is-justify-content-space-between">
                        <label class="is-size-4 sub-tag has-text-weight-normal mr-6">Collections</label>
                        <div class="is-flex-mobile is-align-self-center">
                            <h2 class="is-hidden-tablet is-size-4-mobile text-gray px-0">7</h2>
                            <div class="is-align-self-center"><img src="/images/Shape.png" height="8px"></div>
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>

    {{-- @component('components.google_analytics')
    @endcomponent

    <div class="border-t">
        <a href="{{ url('/collections') }}">
            @component('components.dashboard')
                @slot('title') Collections @endslot
                @slot('num') 7 @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t">
        <a href="#">
            @component('components.dashboard')
                @slot('title') Total Posts @endslot
                @slot('num') 35 @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t">
        <a href="#">
            @component('components.dashboard')
                @slot('title') Upcoming Posts @endslot
                @slot('num') 16 @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t">
        <a href="#">
            @component('components.dashboard')
                @slot('title') Audio @endslot
                @slot('num') 12 @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t">
        <a href="#">
            @component('components.dashboard')
                @slot('title') Documents @endslot
                @slot('num') 15 @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t">
        <a href="#">
            @component('components.dashboard')
                @slot('title') Photos @endslot
                @slot('num') 26 @endslot
            @endcomponent
        </a>
    </div>

    <div class="border-t">
        <a href="#">
            @component('components.dashboard')
                @slot('title') Videos @endslot
                @slot('num') 17 @endslot
            @endcomponent
        </a>
    </div> --}}
</div>
@endsection
