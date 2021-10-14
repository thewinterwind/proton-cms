@extends('layouts.app')

@section('content')

{{-- <div class="notification-red mb-4 is-size-6 is-flex">
    <img src="/images/attention_icon.png" class="mr-4">
    File Size Must be Less Than 100MB.
</div> --}}

<div class="container nav-screen mb-large">
    <div class="columns is-variable is-1-desktop m-0">
        <div class="column is-4-desktop p-0">
            <div class="box-container pt-0 pl-none">
                <h1>Upload Asset</h1>
            </div>

            <div class="box-container pt-0 pl-none">
                <label class="help mt-0 pl-3">Asset Name</label>
                <div class="control b-btm">
                    <input class="input" type="text">
                </div>
            </div>

            <div class="is-hidden-desktop">
                <div class="box-container pt-0 pl-none">
                    <div class="field">
                        <label class="help pb-2 pl-2">Description (Optional)</label>
                        <textarea class="textarea" rows="6"></textarea>
                    </div>
                </div>
            </div>

            <div class="box-container pt-0 pl-none">
                <label class="help mt-0 pl-3">Collections</label>
                <div class="control b-btm has-icons-right">
                    <input class="input" type="tags" placeholder="Add Tag" value="Tag1,Tag2" style="width: 108px;">
                    <span class="icon is-small is-right">
                        <img src="/images/ok_icon_success.png">
                    </span>
                </div>
            </div>

            <div class="box-container pl-none">
                <button class="transparent-btn button btm-modal is-fullwidth mb-5">Select Asset</button>
                <button class="gray-btn button is-fullwidth">Upload</button>
            </div>
        </div>
        <div class="column is-4-desktop p-0">
            <div class="is-hidden-touch mt-6 pt-5">
                @component('components.input_type_4')
                    @slot('title') Description (Optional) @endslot
                @endcomponent
            </div>
        </div>
    </div>
</div>

<div id="btm-modal" class="btm-modal modal is-justify-content-flex-end">
    <div class="modal-background"></div>
    <div class="modal-content">
        <section class="modal-card-body">
            <div class="is-flex is-justify-content-space-between is-align-self-center">
                <h2 class="is-size-4 has-text-weight-semibold has-text-black mb-4">Upload Asset from</h2>
                <button class="delete btm-modal-close is-block is-pulled-right" aria-label="close"></button>
            </div>

            <div>
                <label class="radio_button">
                    <input type="radio" name="radio2" checked/>
                    <span class="is-size-6 has-text-weight-semibold has-text-black pl-0">Enable Camera</span>
                </label>
            </div>

            <div>
                <label class="radio_button">
                    <input type="radio" name="radio2"/>
                    <span class="is-size-6 has-text-weight-semibold has-text-black pl-0">Upload from Gallery</span>
                </label>
            </div>

        </section>
    </div>
</div>

@endsection

@push('js')
    <script>
        (function (){
            // Open modal
            var modal = document.querySelector('#btm-modal');

            document.querySelector('.btm-modal').addEventListener('click', function() {
                modal.classList.toggle('is-active');
            });

            document.querySelector('.btm-modal-close').addEventListener('click', function() {
                modal.classList.toggle('is-active');
            });
        })();
    </script>
@endpush