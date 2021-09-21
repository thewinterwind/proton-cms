@extends('layouts.app')

@section('content')
<div>
    <div class="notification mb-0 is-size-6 is-flex">
        <img src="/images/ok_icon.png" class="mr-4">
        Collection was successfully added!
    </div>

    <div class="is-flex is-justify-content-space-between px-5 pt-4">
        <h1>Collections</h1>
        <a href="#">
            <label class="is-align-self-center is-size-6">New <span class="pl-2">+</span></label>
        </a>
    </div>

    <div class="box-container">
        <a href="#">
            <div class="is-flex is-align-self-center">
                <div class="is-flex-grow-2">
                    <h2 class="is-size-4">Last 30 Days</h2>
                    <label>23 Media, 16 Posts</label>
                </div>
                <div class="is-align-self-center">
                    <img src="/images/Shape.png" class="arrow">
                </div>
            </div>
        </a>
    </div>

    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">E-commerce</h2>
                        <label>17 Media, 9 Posts</label>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">Entertainment</h2>
                        <label>15 Media, 28 Posts</label>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">Finance</h2>
                        <label>8 Media, 4 Posts</label>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
