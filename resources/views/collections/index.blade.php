@extends('layouts.app')

@section('content')

{{-- @component('components.notification')
    @slot('title') Collection was successfully added! @endslot
@endcomponent --}}
<div class="container nav-screen mb-xlarge">
    <div class="is-flex is-justify-content-space-between is-align-items-center">
        <h2 class="is-size-3 has-text-weight-semibold">Collections</h2>
        <a href="{{ url('/collections/create') }}" class="is-hidden-tablet">
            <label class="is-size-6">New <span class="pl-2">+</span></label>
        </a>
        <div class="is-hidden-touch">
            <button class="button-black new-collection is-size-6 is-fullwidth inverted">New Collection</button>
        </div>
    </div>

    <div class="is-flex-desktop is-flex-wrap-wrap mt-4">
        @for ($i = 0; $i < 6; $i++)
            <div class="column is-one-third border-t box-container @if($i % 3) border-l-desktop @endif @if($i > 2) border-t-desktop @endif">
                <a href="#">
                    <div class="is-flex-mobile is-justify-content-space-between is-align-items-center mt-2">
                        <div>
                            <h2 class="is-size-1-desktop has-text-weight-medium is-size-4 px-0">Last 30 Days</h2>
                            <label class="is-hidden-tablet">23 Media, 16 Posts</label>
                        </div>
                        <div class="is-flex-desktop justify-content is-align-items-center">
                            <label class="is-hidden-touch is-size-4-desktop num-posts pr-5">23 Media, 16 Posts</label>
                            <img src="/images/Shape.png" height="8px">
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
</div>

<div id="new-collection" class="new-collection modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <section class="modal-card-body">
            <div class="p-5">
                <button class="btn-close new-collection-close is-block is-pulled-right mb-5" aria-label="close"><img src="/images/x_icon.png"></button>
                <h1 class="mt-5">New Collection</h1>
            </div>


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

                <div class="mt-2 mb-5">
                    @component('components.button_type_1')
                        @slot('title') Create Collection @endslot
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
            var newCollection = document.querySelector('#new-collection');

            document.querySelector('.new-collection').addEventListener('click', function() {
                newCollection.classList.toggle('is-active');
            });
            document.querySelector('.new-collection-close').addEventListener('click', function() {
                newCollection.classList.toggle('is-active');
            });
        })();
    </script>
@endpush
