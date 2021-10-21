@extends('layouts.app')

@section('content')
<div class="categories container is-max-widescreen mb-large">
    <div class="box-container py-0">
        @component('components.title_type_3')
            @slot('title') Categories @endslot
        @endcomponent
    </div>

    <div class="is-flex-desktop is-flex-wrap-wrap mt-5">
        @for ($i = 0; $i < 9; $i++)
            <div class="column is-one-third border-t box-container @if($i % 3) border-l-desktop @endif @if($i > 2) border-t-desktop @endif">
                <a href="{{ url('/categories/category-name') }}">
                    <div class="is-flex-mobile is-justify-content-space-between mt-2">
                        <h2 class="is-size-1-desktop has-text-weight-medium is-size-4 px-0">E-commerce</h2>
                        <div class="is-flex justify-content is-align-items-center">
                            <label class="is-size-4-desktop num-posts pr-5">12 posts</label>
                            <img src="/images/Shape.png" height="8px">
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
</div>
@endsection
