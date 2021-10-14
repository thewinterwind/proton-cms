@extends('layouts.app')

@section('content')

<div class="container nav-screen px-mobile">
    <div class="is-flex is-justify-content-space-between mt-5">
        @component('components.title_type_3')
            @slot('title') Templates @endslot
        @endcomponent

        <button class="button-black small-btn w-small">Add New</button>
    </div>
    <div class="tabs mt-4 mb-5">
        <ul>
            <li class="is-active"><a id="All"><span>All</span></a></li>
            <li><a id="Fragment"><span>Fragment</span></a></li>
            <li><a id="Page"><span>Page</span></a></li>
            <li><a id="Script"><span>Script</span></a></li>
            <li><a id="Style">Style</a></li>
        </ul>
    </div>
</div>

<div class="container nav-screen mb-large">
    <div class="tab-content">
        <div class="tab-pane is-active" id="All">
            <div class="is-flex-desktop is-flex-wrap-wrap my-6">
                @for ($i = 0; $i < 4; $i++)
                    <div class="column is-half border-t padding-lrb box-container pt-5 @if($i % 2) border-l-desktop @endif @if($i > 1) border-t-desktop @endif">
                        <div class="is-flex is-justify-content-space-between">
                            <label class="fs-18-desktop">Fragment</label>
                            <label class="fs-18-desktop">12 posts</label>
                        </div>
                        <a href="#">
                            <div class="is-flex is-align-self-center">
                                <div class="is-flex-grow-2">
                                    <h2 class="is-size-1-desktop is-size-4">Sample for Posts</h2>
                                </div>
                                <div class="is-align-self-center pl-5">
                                    <img src="/images/Shape.png" class="arrow">
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
  {{-- <div class="tab-pane" id="Fragment">
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
  </div> --}}
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
