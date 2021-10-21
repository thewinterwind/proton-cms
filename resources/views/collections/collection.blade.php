@extends('layouts.app')

@section('content')

<div class="container nav-screen box-container py-0 px-0-desktop">
    <div class="is-flex is-align-items-center">
        <h1>E-commerce</h1>
        <a href="#" class="edit-link edit-collection">
            <label class="is-size-6">Edit <span class="pl-2"><img src="/images/edit.png"></span></label>
        </a>
    </div>
    <label class="help fs-14 is-hidden-touch">Created on 08 Aug, 2021</label>

    <div class="is-flex is-justify-content-space-between is-align-items-center mt-4">
        <div class="tabs mt-0-mobile">
            <ul>
                <li class="is-active"><a id="All"><span>All</span></a></li>
                <li><a id="Assets"><span>Assets</span></a></li>
                <li><a id="Posts"><span>Posts</span></a></li>
            </ul>
        </div>

        <div class="custom-radio control is-hidden-touch">
            <label class="radio is-inline-flex has-text-black">
                <input type="radio" name="foobar" checked>
                By A to Z
            </label>
            <label class="radio is-inline-flex">
                <input type="radio" name="foobar">
                Option 2
            </label>
            <label class="radio is-inline-flex">
                <input type="radio" name="foobar">
                By Publish Date
            </label>
        </div>
    </div>
    <div class="mb-5 is-hidden-desktop">
        @component('components.sort')
            @slot('title') A to Z @endslot
        @endcomponent
    </div>
</div>

<div class="container is-max-widescreen mb-large pb-3">
    <div class="tab-content">
        <div class="tab-pane is-active" id="All">
            <div class="is-flex-desktop is-flex-wrap-wrap">
                @for ($i = 0; $i < 4; $i++)
                    <div class="column is-half border-t padding-lrb box-container pt-5 @if($i % 2) border-l-desktop @endif @if($i > 1) border-t-desktop @endif">
                        <a href="#">
                            <div class="is-flex is-align-self-center">
                                <div class="is-flex-grow-2">
                                    <h2 class="is-size-1-desktop is-size-4">Online Marketing</h2>
                                    <label class="is-size-4-desktop">Based on electronic technologies</label>
                                </div>
                                <div class="is-align-self-center">
                                    <img src="/images/delete_icon.png" class="trash-icon">
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>

       {{--  <div class="tab-pane" id="Assets">
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
        </div> --}}

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


<div id="edit-collection" class="edit-collection modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <section class="modal-card-body">
            <div class="p-5">
                <button class="btn-close edit-collection-close is-block is-pulled-right mb-5" aria-label="close"><img src="/images/x_icon.png"></button>
                <h1 class="mt-5">Edit Collection</h1>
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

                <div class="box-container pt-0 has-text-centered mt-2">
                    @component('components.button_type_1')
                        @slot('title') Update Collection @endslot
                    @endcomponent
                    <button href="#" class="button delete-collection button-delete mt-3">Delete Collection</button>
                </div>
            </form>
        </section>
    </div>
</div>

<div id="delete-collection" class="delete-collection modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <section class="modal-card-body">
            <div class="p-5">
                <button class="btn-close delete-collection-close is-block is-pulled-right mb-5" aria-label="close"><img src="/images/x_icon.png"></button>
            </div>

            <div class="px-5">
                <h1 class="mb-4">Delete Collection?</h1>
                <p class="p-sen text-gray">Deleting this collection will not delete any associated media or posts. However, this will delete the association of this collection with any content. Are you sure you want to delete this collection? If so, type the name of the tag below and press the delete button.</p>
            </div>

            <form class="box-container pt-0 mb-4 pb-5">
                <div class="mt-5">
                    @component('components.input_type_1')
                        @slot('title') URL Slug @endslot
                    @endcomponent
                </div>

                <div class="mt-4">
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
            var editCollection = document.querySelector('#edit-collection');
            var deleteCollection = document.querySelector('#delete-collection');
            var modal = document.querySelector('#btm-modal');

            document.querySelector('.btm-modal').addEventListener('click', function() {
                btmModal.classList.toggle('is-active');
            });
            document.querySelector('.btm-modal-close').addEventListener('click', function() {
                btmModal.classList.toggle('is-active');
            });

            document.querySelector('.edit-collection').addEventListener('click', function() {
                editCollection.classList.toggle('is-active');
            });
            document.querySelector('.edit-collection-close').addEventListener('click', function() {
                editCollection.classList.toggle('is-active');
            });
            document.querySelector('.delete-collection').addEventListener('click', function() {
                deleteCollection.classList.toggle('is-active');
            });
            document.querySelector('.delete-collection-close').addEventListener('click', function() {
                deleteCollection.classList.toggle('is-active');
            });
        })();
    </script>
@endpush
