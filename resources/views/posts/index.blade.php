@extends('layouts.app')

@section('content')

{{-- @component('components.notification')
    @slot('title') Post was successfully added! @endslot
@endcomponent --}}

<div class="container nav-screen">
    <div class="px-mobile">
        <div class="is-flex is-justify-content-space-between py-5">
            <h1>Posts</h1>
            <button class="button-black small-btn w-small">Create</button>
        </div>

        <div class="is-flex-desktop is-justify-content-space-between is-align-items-center">
            <div class="field search">
                <p class="control b-btm has-icons-left has-icons-right">
                    <input class="input inpt-search" type="text" placeholder="Search">
                    <span class="icon is-small is-left">
                        <img src="/images/Union.png">
                    </span>
                </p>
            </div>
            <div class="custom-radio control is-hidden-touch">
                <label class="radio is-inline-flex has-text-black">
                    <input type="radio" name="foobar" checked>
                    By Title
                </label>
                <label class="radio is-inline-flex">
                    <input type="radio" name="foobar">
                    By Publish Date
                </label>
            </div>
        </div>
    </div>

    <div class="is-hidden-desktop">
        @component('components.sort')
            @slot('title') Title @endslot
        @endcomponent
    </div>

    <div class="is-flex-desktop is-flex-wrap-wrap mb-6">
        @for ($i = 0; $i < 4; $i++)
            <div class="column is-half border-t padding-lrb box-container pt-5 @if($i % 2) border-l-desktop @endif @if($i > 1) border-t-desktop @endif">
                <div class="is-flex is-justify-content-space-between">
                    <label class="fs-18-desktop">Finance</label>
                    <label class="fs-18-desktop">8 min read</label>
                </div>
                <a href="#">
                    <div class="is-flex is-align-self-center">
                        <div class="is-flex-grow-2">
                            <h2 class="is-size-1-desktop is-size-4-mobile">How to make money online?</h2>
                        </div>
                        <div class="is-align-self-center pl-5">
                            <img src="/images/Shape.png" class="arrow">
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
</div>

@endsection
