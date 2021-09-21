@extends('layouts.app')

@section('content')
<div>
    <div class="notification mb-0 is-size-6 is-flex">
        <img src="/images/ok_icon.png" class="mr-4">
        Asset Uploaded Successfully
    </div>

    <div class="box-container">
        <div class="is-flex is-justify-content-space-between">
            <h1 class="">Assets</h1>
            <a href="#" class="s-btn button is-black is-align-self-center">Upload</a>
        </div>
        <div class="field search mt-4">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Search">
                <span class="icon is-small is-left">
                    <img src="/images/Union.png">
                </span>
            </p>
        </div>
        <div class="tabs mt-5">
            <ul>
                <li class="is-active"><a>All</a></li>
                <li><a>Photos</a></li>
                <li><a>Videos</a></li>
                <li><a>Others</a></li>
            </ul>
        </div>
        <div class="is-flex">
            <label class="is-align-self-center is-size-6 mr-1">Sort by</label>
            <button class="btn-sort is-flex is-align-self-center is-size-6">Title <img src="/images/arrow_down_black.png" class="is-align-self-center ml-2"></button>
        </div>

        <div class="is-flex is-justify-content-space-between mt-4">
            <div class="is-flex">
                <img src="/images/file_icon.png">
                <div class="is-align-self-center ml-4">
                    <h5 class="has-text-weight-semibold">Estimate in social</h5>
                    <div class="tag mr-2">Tag 01</div>
                    <div class="tag">Tag 02</div>
                </div>
            </div>
            <div class="is-align-self-center">
                <img src="/images/Shape.png" height="8px">
            </div>
        </div>

        <div class="is-flex is-justify-content-space-between mt-4">
            <div class="is-flex">
                <img src="/images/file_icon.png">
                <div class="is-align-self-center ml-4">
                    <h5 class="has-text-weight-semibold">Transfer Report</h5>
                    <div class="tag mr-2">Tag 01</div>
                    <div class="tag">Tag 02</div>
                </div>
            </div>
            <div class="is-align-self-center">
                <img src="/images/Shape.png" height="8px">
            </div>
        </div>

        <div class="is-flex is-justify-content-space-between mt-4">
            <div class="is-flex">
                <img src="/images/file_icon.png">
                <div class="is-align-self-center ml-4">
                    <h5 class="has-text-weight-semibold">Plan for the Weekend</h5>
                    <div class="tag mr-2">Tag 01</div>
                    <div class="tag">Tag 02</div>
                </div>
            </div>
            <div class="is-align-self-center">
                <img src="/images/Shape.png" height="8px">
            </div>
        </div>
    </div>
</div>
@endsection

