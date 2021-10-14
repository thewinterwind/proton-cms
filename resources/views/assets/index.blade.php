@extends('layouts.app')

@section('content')

{{-- @component('components.notification')
    @slot('title') Asset Uploaded Successfully @endslot
@endcomponent --}}

<div class="container nav-screen px-mobile">
    <div class="is-flex is-justify-content-space-between py-5">
        <h1>Assets</h1>
        <button class="button-black small-btn w-small">Upload</button>
    </div>

    <div class="is-flex-desktop is-justify-content-space-between is-align-items-center">
        <div class="field search">
            <p class="control b-btm has-icons-left has-icons-right">
                <input class="input inpt-search" type="text" placeholder="Search">
                <span class="icon is-small is-left">
                    <img src="/images/Union.png">
                </span>
            </p>
        </div>
        <div class="custom-radio control is-hidden-touch">
            <label class="radio is-inline-flex has-text-black">
                <input type="radio" name="foobar" checked>
                By Title
            </label>
            <label class="radio is-inline-flex">
                <input type="radio" name="foobar">
                By Publish Date
            </label>
        </div>
    </div>

    <div class="tabs mb-5">
        <ul>
            <li class="is-active"><a id="All"><span>All</span></a></li>
            <li><a id="Photos"><span>Photos</span></a></li>
            <li><a id="Videos"><span>Videos</span></a></li>
            <li><a id="Others"><span>Others</span></a></li>
        </ul>
    </div>
</div>

<div class="is-hidden-desktop">
    @component('components.sort')
        @slot('title') Title @endslot
    @endcomponent
</div>

<div class="tab-content container nav-screen mb-xlarge">
    <div class="tab-pane is-active" id="All">
        <div class="is-flex-desktop is-flex-wrap-wrap mt-4">
            @for ($i = 0; $i < 6; $i++)
                <div class="column is-one-third border-t @if($i % 3) border-l-desktop @endif @if($i > 2) border-t-desktop @endif">
                    <a href="#">
                        <div class="mt-5">
                            @component('components.asset')
                                @slot('title') Estimate in social @endslot
                                @slot('tagOne') Tag 01 @endslot
                                @slot('tagTwo') Tag 02 @endslot
                            @endcomponent
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

    {{-- <div class="tab-pane" id="Photos">
        @component('components.asset')
            @slot('title') Estimate in social @endslot
            @slot('tagOne') Tag 01 @endslot
            @slot('tagTwo') Tag 02 @endslot
        @endcomponent
    </div>

    <div class="tab-pane" id="Videos">
        @component('components.asset')
            @slot('title') Transfer Report @endslot
            @slot('tagOne') Tag 01 @endslot
            @slot('tagTwo') Tag 02 @endslot
        @endcomponent
    </div>

    <div class="tab-pane" id="Others">
        @component('components.asset')
            @slot('title') Plan for the Weekend @endslot
            @slot('tagOne') Tag 01 @endslot
            @slot('tagTwo') Tag 02 @endslot
        @endcomponent
    </div> --}}
</div>

@endsection

{{-- @push('js')
    <script>
        window.onload = () => {
            // Tabs Start
            document.querySelectorAll('.tabs').forEach((tab)=>{
                tab.querySelectorAll('li').forEach((li)=>{
                  li.onclick = () => {
                      tab.querySelector('li.is-active').classList.remove('is-active')
                      li.classList.add('is-active')
                      tab.nextElementSibling.querySelector('.tab-pane.is-active').classList.remove('is-active')
                      tab.nextElementSibling.querySelector('.tab-pane#'+li.firstElementChild.getAttribute('id'))
                        .classList.add("is-active")
                  }
                })
            })
        }
    </script>
@endpush --}}
