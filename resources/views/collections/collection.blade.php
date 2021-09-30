@extends('layouts.app')

@section('content')

<div class="px-5 pb-5">
    <div class="is-flex is-justify-content-space-between">
        <h1>E-commerce</h1>
        <a href="{{ url('/collections/edit') }}" class="is-align-self-center">
            <label class="is-size-6">Edit <span class="pl-2"><img src="/images/edit.png"></span></label>
        </a>
    </div>
</div>

@component('components.sort')
    @slot('title') A to Z @endslot
@endcomponent

<div class="tab-content">
    <div class="tab-pane is-active" id="All">
        @component('components.post_with_delete_option')
            @slot('title') Online Marketing @endslot
            @slot('description') Based on electronic technologies @endslot
        @endcomponent

        <div class="border-t pt-5">
            @component('components.post_with_delete_option')
                @slot('title') Internet Banking @endslot
                @slot('description') One of the types of remote banking. @endslot
            @endcomponent
        </div>

        <div class="border-t pt-5">
            @component('components.post_with_delete_option')
                @slot('title') Information Sites @endslot
                @slot('description') Internet resource on which informational. @endslot
            @endcomponent
        </div>

        <div class="border-t pt-5">
            @component('components.post_with_delete_option')
                @slot('title') Money Transfers @endslot
                @slot('description') Instant transfer of funds using payment. @endslot
            @endcomponent
        </div>

    </div>

    <div class="tab-pane" id="Assets">
        @component('components.post_with_delete_option')
            @slot('title') Online Marketing @endslot
            @slot('description') Based on electronic technologies @endslot
        @endcomponent
    </div>

    <div class="tab-pane" id="Posts">
        @component('components.post_with_delete_option')
            @slot('title') Internet Banking @endslot
            @slot('description') One of the types of remote banking. @endslot
        @endcomponent
    </div>

</div>


<div id="btm-modal" class="btm-modal modal is-justify-content-flex-end">
    <div class="modal-background"></div>
    <div class="modal-content">
        <section class="modal-card-body">
            <div class="is-flex is-justify-content-space-between is-align-self-center">
                <h2 class="is-size-4 has-text-weight-semibold has-text-black mb-4">Sort</h2>
                <button class="delete btm-modal-close is-block is-pulled-right" aria-label="close"></button>
            </div>

            <div>
                <label class="radio_button">
                    <input type="radio" name="radio2" checked/>
                    <span class="is-size-6 has-text-weight-semibold has-text-black pl-0">By A to Z</span>
                </label>
            </div>

            <div>
                <label class="radio_button">
                    <input type="radio" name="radio2"/>
                    <span class="is-size-6 has-text-weight-semibold has-text-black pl-0">By Publish Date</span>
                </label>
            </div>

            <div>
                <label class="radio_button">
                    <input type="radio" name="radio2"/>
                    <span class="is-size-6 has-text-weight-semibold has-text-black pl-0">By Title</span>
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
