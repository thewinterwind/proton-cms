@extends('layouts.app')

@section('content')
<div class="categories">
    @component('components.title_type_3')
        @slot('title') Categories @endslot
    @endcomponent

    @component('components.title_type_1')
        @slot('title') E-commerce @endslot
        @slot('posts') 12 @endslot
    @endcomponent

    @component('components.title_type_1')
        <div class="border-t">
            @slot('title') Entertainment @endslot
            @slot('posts') 25 @endslot
        </div>
    @endcomponent

    @component('components.title_type_1')
        <div class="border-t">
            @slot('title') Finance @endslot
            @slot('posts') 9 @endslot
        </div>
    @endcomponent

    @component('components.title_type_1')
        <div class="border-t">
            @slot('title') Finance @endslot
            @slot('posts') 9 @endslot
        </div>
    @endcomponent

    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center mt-2">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4 px-0">Business</h2>
                    </div>
                    <div class="is-flex is-align-self-center">
                        <h2 class="num-posts">3 posts</h2>
                        <div class="pl-3 is-align-self-center">
                            <img src="/images/Shape.png" height="8px">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center mt-2">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4 px-0">Evolution</h2>
                    </div>
                    <div class="is-flex is-align-self-center">
                        <h2 class="num-posts">18 posts</h2>
                        <div class="pl-3 is-align-self-center">
                            <img src="/images/Shape.png" height="8px">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center mt-2">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4 px-0">Development</h2>
                    </div>
                    <div class="is-flex is-align-self-center">
                        <h2 class="num-posts">6 posts</h2>
                        <div class="pl-3 is-align-self-center">
                            <img src="/images/Shape.png" height="8px">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center mt-2">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4 px-0">Influencers</h2>
                    </div>
                    <div class="is-flex is-align-self-center">
                        <h2 class="num-posts">5 posts</h2>
                        <div class="pl-3 is-align-self-center">
                            <img src="/images/Shape.png" height="8px">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center mt-2">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4 px-0">Earnings</h2>
                    </div>
                    <div class="is-flex is-align-self-center">
                        <h2 class="num-posts">14 posts</h2>
                        <div class="pl-3 is-align-self-center">
                            <img src="/images/Shape.png" height="8px">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection