@extends('layouts.app')

@section('content')
<div class="container nav-screen mb-large">
    <div class="columns is-variable is-1-desktop m-0">
        <div class="column is-4-desktop p-0">
            <div class="box-container pt-0 pl-none">
                <h1>Asset Details</h1>

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

                <label class="help mt-5 pt-4 pl-3">Asset Name</label>
                <div class="control b-btm">
                    <input class="input" type="text">
                </div>

                <div class="is-hidden-desktop">
                    <div class="field pt-5">
                        <label class="help pb-2 pl-2">Description (Optional)</label>
                        <textarea class="textarea" rows="6"></textarea>
                    </div>
                </div>

                <label class="help mt-5 pt-4 pl-3">Collections</label>
                <div class="control b-btm has-icons-right">
                    <input class="input" type="tags" placeholder="Add Tag" value="Tag1,Tag2" style="width: 108px;">
                    <span class="icon is-small is-right">
                        <img src="/images/ok_icon_success.png">
                    </span>
                </div>

                <div class="has-text-centered mt-5 pt-4">
                    <button class="button-black is-size-6 is-fullwidth inverted">Optimize Asset</button>
                    <button class="button-delete button btm-modal my-5">Delete Collection</button>
                </div>
            </div>
        </div>
        <div class="column is-4-desktop p-0">
            <div class="is-hidden-touch mt-large">
                @component('components.input_type_4')
                    @slot('title') Description (Optional) @endslot
                @endcomponent
            </div>
        </div>
    </div>
</div>

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

<div id="btm-modal" class="btm-modal modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <section class="modal-card-body">
            <div class="is-flex is-justify-content-space-between is-align-self-center">
                <div class="p-5">
                    <button class="btn-close btm-modal-close is-block is-pulled-right mb-5" aria-label="close"><img src="/images/x_icon.png"></button>
                    <h2 class="is-size-4 has-text-weight-semibold has-text-black mt-5">Are you sure you want to delete this media file?</h2>
                </div>
            </div>

            <div class="has-text-centered box-container">
                <button class="button-black is-size-6 is-fullwidth">No</button>
                <button class="button-delete button is-size-6 is-fullwidth">Yes, Delete</button>
            </div>
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
