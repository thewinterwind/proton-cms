@extends('layouts.app')

@section('content')
    @component('components.title_type_3')
        @slot('title') Asset Details @endslot
    @endcomponent

    <div class="box-container pt-0">
        <div class="is-flex">
            <img class="upload-modal" src="/images/zip_file.png">
            <div class="is-align-self-center ml-4">
                <label class="help">Asset ID</label>
                <div class="is-flex is-align-self-center">
                    <h2 class="is-size-4 has-text-weight-semibold">086547</h2>
                    <img src="/images/copy_icon.png" class="is-align-self-center pl-4">
                </div>
                <label class="help">File Size</label>
                <h2 class="is-size-4">3.4 MB</h2>
            </div>
        </div>
    </div>

    @component('components.input_type_1')
        @slot('title') Asset Name @endslot
    @endcomponent

    @component('components.input_type_4')
        @slot('title') Description (Optional) @endslot
    @endcomponent

    @component('components.input_type_3')
        @slot('title') Collections @endslot
    @endcomponent

    <div class="mt-3 pb-5">
        @component('components.button_type_1')
            @slot('title') Optimize Asset @endslot
        @endcomponent
    </div>

    <button class="button-delete btm-modal mb-5">Delete Collection</button>

    <div id="upload-modal" class="modal zip-modal">
        <div class="modal-background"></div>
            <div class="modal-card">
            <section class="modal-card-body">
                <button class="delete upload-modal-close is-block is-pulled-right" aria-label="close"></button>
                <div class="mt-50 has-text-centered">
                    <img src="/images/zip_file.png">
                    <h5>estimate_in_social_networks.zip</h5>
                    <label>Added on March 20.2021 • 3.4 MB </label>
                </div>
            </section>
        </div>
    </div>

    <div id="btm-modal" class="btm-modal modal is-justify-content-flex-end">
        <div class="modal-background"></div>
        <div class="modal-content">
            <section class="modal-card-body">
                <div class="is-flex is-justify-content-space-between is-align-self-center">
                    <h2 class="is-size-4 has-text-weight-semibold has-text-black mb-5">Are you sure you want to delete this media file?</h2>
                    <button class="delete btm-modal-close is-block is-pulled-right" aria-label="close"></button>
                </div>

                <button class="button-black is-size-6 is-fullwidth">No</button>
                <button class="button-delete is-size-6 is-fullwidth">Yes, Delete</button>
            </section>
        </div>
    </div>

@endsection

@push('js')
    <script>
        (function (){
            // Open modal
            var uploadModal = document.querySelector('#upload-modal');
            var btmModal = document.querySelector('#btm-modal');

            document.querySelector('.upload-modal').addEventListener('click', function() {
                uploadModal.classList.toggle('is-active');
            });
            document.querySelector('.upload-modal-close').addEventListener('click', function() {
                uploadModal.classList.toggle('is-active');
            });

            document.querySelector('.btm-modal').addEventListener('click', function() {
                btmModal.classList.toggle('is-active');
            });
            document.querySelector('.btm-modal-close').addEventListener('click', function() {
                btmModal.classList.toggle('is-active');
            });
        })();
    </script>
@endpush
