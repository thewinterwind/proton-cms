@extends('layouts.app')

@section('content')

@component('components.title_type_3')
    @slot('title') Edit Collection @endslot
@endcomponent

<form class="c-fields">
    <div class="box-container">
        <div class="field">
            <label class="help mt-0 pl-3">Name</label>
            <div class="control has-icons-right b-btm">
                <input class="input" type="text">
                <span class="icon is-small is-right">
                    <img src="/images/ok_icon_success.png">
                </span>
            </div>
        </div>

        <div class="field mt-5">
            <label class="help mt-0 pl-3">URL Slug</label>
            <div class="control has-icons-right b-btm">
                <input class="input" type="text">
                <span class="icon is-small is-right">
                    <img src="/images/ok_icon_success.png">
                </span>
            </div>
            <label class="help mt-3 pl-3">https://proton.com/collections/<b class="has-text-black">slug</b></label>
        </div>

        <button class="button is-black mt-5">Update Collection</button>
        <a href="{{ url('/collections/delete') }}" class="button button-delete mt-3">Delete Collection</a>
    </div>
</form>
@endsection
