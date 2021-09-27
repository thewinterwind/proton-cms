@extends('layouts.app')

@section('content')

<div>
    <h1 class="px-5 mb-5">Video Feed</h1>
    <div class="feed" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('/images/sample_img.png');">
        <div class="header_feed is-flex is-align-items-center">
            <img src="/images/avatar.png">
            <div class="ml-3">
                <h6 class="has-text-weight-semibold">Jakob Smith</h6>
                <p class="is-size-7 has-text-weight-semibold">Dream big. Stay Curious. Be great. Do you</p>
            </div>
        </div>

        <div class="mid_feed">
            <img src="/images/sample_img.png">
        </div>

        <div class="btm_feed">
            <h5 class="has-text-white has-text-weight-semibold">Modern New York Architecture</h5>
            <p class="has-text-weight-semibold">#new_york #times_square #night #crowded #usa #travel</p>
            <div class="options is-flex is-align-items-center is-justify-content-space-between mt-4">
                <div class="is-flex is-align-items-center">
                    <img src="/images/like.png">
                    <img src="/images/heart.png">
                    <img src="/images/thinking.png">
                    <span class="ml-2">256</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/comment.png">
                    <span class="ml-2">3 Comments</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/share.png">
                    <span class="ml-2">Share</span>
                </div>
            </div>
        </div>
    </div>

    <div class="feed" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('/images/sample_img2.png');">
        <div class="header_feed is-flex is-align-items-center">
            <img src="/images/avatar.png">
            <div class="ml-3">
                <h6 class="has-text-weight-semibold">Jakob Smith</h6>
                <p class="is-size-7 has-text-weight-semibold">Dream big. Stay Curious. Be great. Do you</p>
            </div>
        </div>

        <div class="mid_feed">
            <img src="/images/sample_img2.png">
        </div>

        <div class="btm_feed">
            <h5 class="has-text-white has-text-weight-semibold">Modern New York Architecture</h5>
            <p class="has-text-weight-semibold">#new_york #times_square #night #crowded #usa #travel</p>

            <div class="options is-flex is-align-items-center is-justify-content-space-between mt-4">
                <div class="is-flex is-align-items-center">
                    <img src="/images/react_icon.png">
                    <span class="ml-2">React</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/comment.png">
                    <span class="ml-2">31 Comments</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/share.png">
                    <span class="ml-2">Share</span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
