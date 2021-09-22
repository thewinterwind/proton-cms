@extends('layouts.app')

@section('content')

@component('components.title_type_3')
    @slot('title') New Collection @endslot
@endcomponent

<form class="c-fields">
    <div class="box-container pt-0">
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
            <label class="help mt-3 pl-3">https://proton.com/collections/<b class="has-text-black">business</b></label>
        </div>
    </div>

    <div class="mt-2 mb-6 pb-5">
        @component('components.button_type_1')
            @slot('title') Create Collection @endslot
        @endcomponent
    </div>
</form>
@endsection
