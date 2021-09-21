@extends('layouts.app')

@section('content')

<div class="notification-red mb-4 is-size-6 is-flex">
    <img src="/images/attention_icon.png" class="mr-4">
    File Size Must be Less Than 100MB.
</div>

@component('components.title_type_3')
    @slot('title') Upload Asset @endslot
@endcomponent

@component('components.input_type_1')
    @slot('title') Asset Name @endslot
@endcomponent

@component('components.input_type_4')
    @slot('title') Description (Optional) @endslot
@endcomponent

@component('components.input_type_3')
    @slot('title') Collections @endslot
@endcomponent

<div class="box-container">
    <button class="transparent-btn button btm-modal is-fullwidth mb-5">Select Asset</button>
    <button class="gray-btn button is-fullwidth">Upload</button>
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