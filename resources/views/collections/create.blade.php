@extends('layouts.app')

@section('content')
<div>
    <h1 class="px-5">New Collection</h1>

    <form>
        <div class="box-container">
            <div class="field">
                <label class="help mt-0 pl-3">Name</label>
                <div class="control has-icons-right">
                    <input class="input" type="text">
                    <span class="icon is-small is-right">
                        <img src="/images/ok_icon_success.png">
                    </span>
                </div>
            </div>

            <div class="field mt-5">
                <label class="help mt-0 pl-3">URL Slug</label>
                <div class="control has-icons-right">
                    <input class="input" type="text">
                    <span class="icon is-small is-right">
                        <img src="/images/ok_icon_success.png">
                    </span>
                </div>
                <label class="help mt-3 pl-3">https://proton.com/collections/<b class="has-text-black">business</b></label>
            </div>

            <button class="button is-black mt-5 mb-6">Create Collection</button>
        </div>
    </form>
</div>
@endsection
