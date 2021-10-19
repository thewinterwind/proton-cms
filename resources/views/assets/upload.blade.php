@extends('layouts.app')

@section('content')

<div class="box-container pt-0">
    @component('components.title_type_3')
        @slot('title') Upload Asset @endslot
    @endcomponent
</div>

<div class="box-container pt-0">
    <label class="help">Asset Name</label>
    <p class="has-text-weight-semibold">Estimate</p>
</div>

<div class="border-t">
    <div class="box-container">
        <label class="help">Description</label>
        <p class="has-text-weight-semibold">Exquisite cordially mr happiness of neglected distrusts. Boisterous impossible unaffected he me everything.</p>
    </div>
</div>

<div class="border-t">
    <div class="box-container">
        <label class="help">Collections</label>
        <div class="is-flex">
            <div class="tag mr-2">Tag 01</div>
            <div class="tag">Tag 02</div>
        </div>

        <button class="upload-btns button is-fullwidth mt-5">selected_asset.png</button>
        <progress class="upload-btns has-text-black progress show-value is-success mt-5" value="43" max="100"></progress>
        <button class="text-gray button is-fullwidth mt-5">Cancel</button>
    </div>
</div>

@endsection