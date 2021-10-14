@extends('layouts.app')

@section('content')

<div class="container nav-screen">
    <div class="columns m-0">
        <div class="column is-4-desktop p-0">
            <div class="box-container pt-0 pl-none">
                @component('components.title_type_3')
                    @slot('title') Sample for Posts @endslot
                @endcomponent

                <div class="mt-6">
                    @component('components.input_type_1')
                        @slot('title') Name @endslot
                    @endcomponent
                </div>

                <div class="mt-6">
                    <h3 class="fs-18 has-text-weight-semibold has-text-black pb-3">Type</h3>
                    <div class="columns">
                        <div class="column is-5-desktop">
                            @component('components.multiple_selection_active')
                            @slot('title') Fragment @endslot
                            @endcomponent

                            @component('components.multiple_selection_inactive')
                                @slot('title') Page @endslot
                            @endcomponent
                        </div>
                        <div class="column is-5-desktop">
                            @component('components.multiple_selection_inactive')
                                @slot('title') Script @endslot
                            @endcomponent

                            @component('components.multiple_selection_inactive')
                                @slot('title') Style @endslot
                            @endcomponent
                        </div>
                    </div>
                </div>

                <div class="is-hidden-touch">
                    <div class="mt-6">
                        @component('components.button_type_1')
                            @slot('title') Update Template @endslot
                        @endcomponent
                    </div>

                    <div class="has-text-centered mt-4">
                        <button class="button-delete button has-text-black pb-3">Show Preview</button>
                        <div class="border-t border-t-desktop pt-3">
                            <button class="button-delete button delete-template">Delete Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-4-desktop p-0">
            <div class="box-container pt-0 pl-none margin-settings">
                @component('components.input_type_4')
                    @slot('title') Content @endslot
                @endcomponent

                <div class="mt-6">
                    @component('components.input_type_1')
                        @slot('title') URL Slug (Optional) @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

<div class="is-hidden-desktop has-text-centered">
    <div class="box-container py-2">
        @component('components.button_type_1')
            @slot('title') Update Template @endslot
        @endcomponent
    </div>

    <div class="box-container pt-0">
        <button class="button-delete text-black">Show Preview</button>
        <div class="border-t">
            <button class="button-delete">Delete Template</button>
        </div>
    </div>
</div>

<div id="delete-template" class="delete-template modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <section class="modal-card-body">
            <div class="p-5">
                <button class="btn-close delete-template-close is-block is-pulled-right mb-5" aria-label="close"><img src="/images/x_icon.png"></button>
            </div>

            <div class="px-5">
                <h1 class="mb-4">Delete Template?</h1>
                <p class="p-sen text-gray">Deleting this template will not delete any associated posts. However, this will delete the association of this template with all content. Are you sure you want to delete this template? If so, type the name of the template below and press the delete button.</p>
            </div>

            <form class="px-5 mb-4 pb-5">
                <div class="mt-5">
                    @component('components.input_type_1')
                        @slot('title') Template Name @endslot
                    @endcomponent
                </div>

                <div class="mt-6">
                    @component('components.button_type_1')
                        @slot('title') Delete @endslot
                    @endcomponent
                </div>
            </form>
        </section>
    </div>
</div>

@endsection

@push('js')
    <script>
        (function (){
            // Open modal
            var deleteCollection = document.querySelector('#delete-template');

            document.querySelector('.delete-template').addEventListener('click', function() {
                deleteCollection.classList.toggle('is-active');
            });
            document.querySelector('.delete-template-close').addEventListener('click', function() {
                deleteCollection.classList.toggle('is-active');
            });
        })();
    </script>
@endpush
