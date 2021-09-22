@extends('layouts.app')

@section('content')

@component('components.notification')
    @slot('title') Asset Uploaded Successfully @endslot
@endcomponent

<div class="is-flex is-justify-content-space-between pt-5">
    @component('components.title_type_3')
        @slot('title') Assets @endslot
    @endcomponent
    @component('components.button_type_3')
        @slot('title') Upload @endslot
    @endcomponent
</div>

@component('components.input_type_6')

@endcomponent

<div class="box-container pt-0 mb-0 tabs">
    <ul>
        <li class="is-active"><a id="All"><span>All</span></a></li>
        <li><a id="Photos"><span>Photos</span></a></li>
        <li><a id="Videos"><span>Videos</span></a></li>
        <li><a id="Others"><span>Others</span></a></li>
    </ul>
</div>

@component('components.sort')
    @slot('title') Title @endslot
@endcomponent

<div class="tab-content">
    <div class="tab-pane is-active" id="All">
        @component('components.asset')
            @slot('title') Estimate in social @endslot
            @slot('tagOne') Tag 01 @endslot
            @slot('tagTwo') Tag 02 @endslot
        @endcomponent

        @component('components.asset')
            @slot('title') Transfer Report @endslot
            @slot('tagOne') Tag 01 @endslot
            @slot('tagTwo') Tag 02 @endslot
        @endcomponent

        @component('components.asset')
            @slot('title') Plan for the Weekend @endslot
            @slot('tagOne') Tag 01 @endslot
            @slot('tagTwo') Tag 02 @endslot
        @endcomponent

    </div>

    <div class="tab-pane" id="Photos">
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
    </div>
</div>

@endsection

@push('js')
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
@endpush
