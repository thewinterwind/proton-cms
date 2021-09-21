@extends('layouts.app')

@section('content')
<div>
    <div class="px-5">
        <h1 class="mb-4">Delete Collection?</h1>
        <p class="p-sen text-gray">Deleting this collection will not delete any associated media or posts. However, this will delete the association of this collection with any content. Are you sure you want to delete this collection? If so, type the name of the tag below and press the delete button.</p>
    </div>

    <form>
        <div class="box-container">
            <div class="field mt-5">
                <label class="help mt-0 pl-3">URL Slug</label>
                <div class="control">
                    <input class="input" type="text">
                </div>
            </div>

            <button class="button is-black mt-5 mb-6">Delete</button>
        </div>
    </form>
</div>

@endsection