@extends('layouts.app')

@section('content')

@component('components.title_type_3')
    @slot('title') Create Post @endslot
@endcomponent

@component('components.input_type_1')
    @slot('title') URL Slug @endslot
@endcomponent

@component('components.input_type_1')
    @slot('title') Name @endslot
@endcomponent

@component('components.input_type_1')
    @slot('title') Excerpt (Optional) @endslot
@endcomponent

@component('components.input_type_4')
    @slot('title') Content @endslot
@endcomponent

<div class="box-container pt-0 custom-dropdown">
    <label class="help pb-2 pl-2">Collections</label>
    <div class="dropdown is-fullwidth">
        <div class="dropdown-trigger is-fullwidth b-btm">
            <button class="button button-dropdown is-fullwidth is-justify-content-space-between" aria-haspopup="true" aria-controls="dropdown-menu">
                <div class="tag has-text-right">
                    E-commerce
                    <a href="#"><img src="/images/x_icon.png" class="pl-2 pt-1"></a>
                </div>
                <span class="icon is-small">
                    <img src="/images/dropdown-arrow.png">
                </span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
                <a href="#" class="dropdown-item pr-4 pt-4">
                    @component('components.subtitle_toggle')
                        @slot('title') E-Commerce @endslot
                    @endcomponent
                </a>
                <a href="#" class="dropdown-item pr-4">
                    @component('components.subtitle_toggle')
                        @slot('title') Finance @endslot
                    @endcomponent
                </a>
                <a href="#" class="dropdown-item pr-4">
                    @component('components.subtitle_toggle')
                        @slot('title') Entertainment @endslot
                    @endcomponent
                </a>
                <a href="#" class="dropdown-item pr-4">
                    @component('components.subtitle_toggle')
                        @slot('title') Business @endslot
                    @endcomponent
                </a>
                <a href="#" class="dropdown-item pr-4">
                    @component('components.subtitle_toggle')
                        @slot('title') Estimate @endslot
                    @endcomponent
                </a>
                <a href="#" class="dropdown-item pr-4">
                    @component('components.subtitle_toggle')
                        @slot('title') Online Marketing @endslot
                    @endcomponent
                </a>
                <a href="#" class="dropdown-item pr-4">
                    @component('components.subtitle_toggle')
                        @slot('title') Money Transfers @endslot
                    @endcomponent
                </a>
                <a href="#" class="dropdown-item pr-4 pb-4">
                    @component('components.subtitle_toggle')
                        @slot('title') Information @endslot
                    @endcomponent
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item add-new has-text-weight-semibold has-text-black is-size-6 pr-4">
                    + Add New Collection
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
