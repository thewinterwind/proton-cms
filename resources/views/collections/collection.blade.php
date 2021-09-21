@extends('layouts.app')

@section('content')
<div>
    <div class="px-5 pt-4">
        <div class="is-flex is-justify-content-space-between">
            <h1>E-commerce</h1>
            <a href="#" class="is-align-self-center">
                <label class="is-size-6">Edit <span class="pl-2"><img src="/images/edit.png"></span></label>
            </a>
        </div>

        <div class="tabs mt-3">
            <ul>
                <li class="is-active"><a>All</a></li>
                <li><a>Assets</a></li>
                <li><a>Posts</a></li>
            </ul>
        </div>

        <div class="is-flex">
            <label class="is-align-self-center is-size-6 mr-1">Sort by</label>
            <button class="btn-sort btm-modal is-flex is-align-self-center is-size-6">A to Z <img src="/images/arrow_down_icon.png" class="is-align-self-center ml-2"></button>
        </div>
    </div>

    <div class="box-container">
        <a href="#">
            <div class="is-flex is-align-self-center">
                <div class="is-flex-grow-2">
                    <h2 class="is-size-4">Online Marketing</h2>
                    <label>Based on electronic technologies</label>
                </div>
                <div class="is-align-self-center">
                    <img src="/images/delete_icon.png" class="trash-icon">
                </div>
            </div>
        </a>
    </div>

    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">Internet Banking</h2>
                        <label>One of the types of remote banking.</label>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/delete_icon.png" class="trash-icon">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">Information Sites</h2>
                        <label>Internet resource on which informational.</label>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/delete_icon.png" class="trash-icon">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">Money Transfers</h2>
                        <label>Instant transfer of funds using payment.</label>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/delete_icon.png" class="trash-icon">
                    </div>
                </div>
            </a>
        </div>
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
