@extends('layouts.app')

@section('content')

<div class="is-flex is-justify-content-space-between">
    @component('components.title_type_3')
        @slot('title') Templates @endslot
    @endcomponent

    @component('components.button_type_3')
        @slot('title') Add New @endslot
    @endcomponent
</div>

<div class="box-container pt-0 mb-0 tabs">
    <ul>
        <li class="is-active"><a id="All"><span>All</span></a></li>
        <li><a id="Fragment"><span>Fragment</span></a></li>
        <li><a id="Page"><span>Page</span></a></li>
        <li><a id="Script"><span>Script</span></a></li>
        <li><a id="Style">Style</a></li>
    </ul>
</div>
<div class="tab-content">
  <div class="tab-pane is-active" id="All">
        @component('components.post_template')
            @slot('category') Fragment @endslot
            @slot('posts') 12 posts @endslot
            @slot('title') Sample for Posts @endslot
        @endcomponent

        <div class="border-t pt-5">
            @component('components.post_template')
                @slot('category') Page @endslot
                @slot('posts') 8 posts @endslot
                @slot('title') Example Text @endslot
            @endcomponent
        </div>

        <div class="border-t pt-5">
            @component('components.post_template')
                @slot('category') Fragment @endslot
                @slot('posts') 5 posts @endslot
                @slot('title') Enjoy @endslot
            @endcomponent
        </div>

        <div class="border-t pt-5">
            @component('components.post_template')
                @slot('category') Fragment @endslot
                @slot('posts') 12 posts @endslot
                @slot('title') Lifestyle Post @endslot
            @endcomponent
        </div>
  </div>
  <div class="tab-pane" id="Fragment">
        @component('components.post_template')
            @slot('category') Fragment @endslot
            @slot('posts') 12 posts @endslot
            @slot('title') Sample for Posts @endslot
        @endcomponent
  </div>
  <div class="tab-pane" id="Page">
        @component('components.post_template')
            @slot('category') Page @endslot
            @slot('posts') 8 posts @endslot
            @slot('title') Example Text @endslot
        @endcomponent
  </div>
  <div class="tab-pane" id="Script">
        @component('components.post_template')
            @slot('category') Fragment @endslot
            @slot('posts') 12 posts @endslot
            @slot('title') Sample for Posts @endslot
        @endcomponent
  </div>
  <div class="tab-pane" id="Style">
        @component('components.post_template')
            @slot('category') Page @endslot
            @slot('posts') 8 posts @endslot
            @slot('title') Example Text @endslot
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
