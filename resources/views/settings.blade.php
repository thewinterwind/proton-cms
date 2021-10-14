@extends('layouts.app')

@section('content')

{{-- @component('components.notification')
    @slot('title') Settings Updated @endslot
@endcomponent --}}

<div class="container nav-screen mb-5">
    <div class="columns m-0">
        <div class="column is-4-desktop p-0">
            <div class="box-container pt-0 pl-none">
                @component('components.title_type_3')
                    @slot('title') Settings @endslot
                @endcomponent

                <div class="mt-6">
                    @component('components.input_type_1')
                        @slot('title') Site Name @endslot
                    @endcomponent
                </div>

                <div class="mt-6">
                    @component('components.input_type_1')
                        @slot('title') Site Domain @endslot
                    @endcomponent
                </div>

                <div class="mt-6">
                    @component('components.input_type_1')
                        @slot('title') Asset Public URL @endslot
                    @endcomponent
                </div>

                <div class="mt-6">
                    @component('components.input_type_4')
                        @slot('title') Site Description @endslot
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="column is-4-desktop p-0 margin-settings">
            <div class="box-container pt-0 pl-none">
                @component('components.input_type_1')
                    @slot('title') Site Author Name @endslot
                @endcomponent

                <div class="is-flex mt-6">
                    <div class="mr-5">
                        <label class="help pb-2 pl-2">Site Logo</label>
                        <div class="site-logo"></div>
                    </div>
                    <div class="w-full">
                        <label class="help mt-0 pl-3">Asset ID</label>
                        <div class="control b-btm">
                            <input class="input" type="text" width="100%">
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    @component('components.subtitle_toggle')
                        @slot('title') Enable Google Analytics @endslot
                    @endcomponent
                </div>

                <div class="mt-6">
                    @component('components.input_type_1')
                        @slot('title') Google Analytics ID @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

<div class="border-t-desktop">
    <div class="container nav-screen mb-large my-6">
        <div class="columns m-0">
            <div class="column is-4-desktop p-0">
                <div class="box-container pt-0 pl-none">
                    @component('components.input_type_5')
                        @slot('title') Background Color Hex @endslot
                    @endcomponent

                    @component('components.input_type_5')
                        @slot('title') Primary Foreground Color Hex @endslot
                    @endcomponent
                </div>
            </div>
            <div class="column is-4-desktop p-0 margin-left-column">
                <div class="box-container pt-0 pl-none">
                    @component('components.input_type_5')
                        @slot('title') Secondary Foreground Color Hex @endslot
                    @endcomponent

                    @component('components.input_type_2')
                        @slot('title') Template @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

<div class="border-t-desktop">
    <div class="container nav-screen my-6">
        <div class="columns m-0">
            <div class="column is-4-desktop p-0">
                <div class="box-container pt-0 pl-none">
                    <label class="help mt-0 pl-3">Asset Access Key ID</label>
                    <div class="control has-icons-right b-btm">
                        <input class="input" type="text">
                        <div class="icon is-small is-right">
                            <img src="images/hide_icon.png">
                        </div>
                    </div>

                    <label class="help mt-6 pl-3">Asset Secret Access Key</label>
                    <div class="control has-icons-right b-btm">
                        <input class="input" type="text">
                        <div class="icon is-small is-right">
                            <img src="images/hide_icon.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4-desktop p-0 margin-left-column">
                <div class="box-container pt-0 pl-none">
                    @component('components.input_type_1')
                        @slot('title') Asset Bucket Name @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

<div class="border-t-desktop">
    <div class="container nav-screen mb-large mt-6">
        <div class="columns m-0">
            <div class="column is-4-desktop p-0">
                <div class="box-container pt-0 pl-none">
                    <h3 class="fs-18 has-text-weight-semibold has-text-black pb-3">Image Optimization</h3>
                    @component('components.multiple_selection_active')
                        @slot('title') Yes @endslot
                    @endcomponent
                    @component('components.multiple_selection_inactive')
                        @slot('title') No @endslot
                    @endcomponent

                    <h3 class="fs-18 has-text-weight-semibold has-text-black pb-3 mt-6">Feed</h3>
                    @component('components.multiple_selection_active')
                        @slot('title') Infinite Scroll @endslot
                    @endcomponent
                    @component('components.multiple_selection_inactive')
                        @slot('title') Paginate @endslot
                    @endcomponent

                    <div class="mt-6">
                        @component('components.input_type_1')
                            @slot('title') Pagination Count @endslot
                        @endcomponent
                    </div>

                    <h3 class="fs-18 has-text-weight-semibold has-text-black pb-3 mt-6">Caching</h3>
                    @component('components.multiple_selection_active')
                        @slot('title') On @endslot
                    @endcomponent
                    @component('components.multiple_selection_inactive')
                        @slot('title') Off @endslot
                    @endcomponent

                    <div class="mt-6 is-hidden-touch">
                        @component('components.button_type_1')
                            @slot('title') Update Settings @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
            <div class="column is-4-desktop p-0">
                <div class="box-container pt-0 pl-none margin-left-column">
                    <h3 class="fs-18 has-text-weight-semibold has-text-black pb-3">Daily Backup</h3>
                    @component('components.multiple_selection_active')
                        @slot('title') On @endslot
                    @endcomponent
                    @component('components.multiple_selection_inactive')
                        @slot('title') Off @endslot
                    @endcomponent

                    <h3 class="fs-18 has-text-weight-semibold has-text-black pb-3 mt-6">Admin Mode</h3>
                    @component('components.multiple_selection_active')
                        @slot('title') Auto @endslot
                    @endcomponent
                    @component('components.multiple_selection_inactive')
                        @slot('title') Dark @endslot
                    @endcomponent
                    @component('components.multiple_selection_inactive')
                        @slot('title') Light @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-6 is-hidden-desktop box-container">
    @component('components.button_type_1')
        @slot('title') Update Settings @endslot
    @endcomponent
</div>

{{-- For color input fields --}}
<script>
    function changeColor() {
        var colors = []
        var i = 0

        document.querySelectorAll('.ci-box').forEach((box, bIndex)=>{
            box.querySelectorAll('input').forEach((input)=>{
                colors.push(input.value)
            })

            box.querySelectorAll('.c-color').forEach((circle)=>{
                circle.style.backgroundColor = '#' + colors[bIndex];
            })
        })
    }

    window.onload = function() {
        this.changeColor();

        document.querySelectorAll('.ci-box').forEach((box, bIndex)=>{
            box.querySelectorAll('input').forEach((input)=>{
                input.setAttribute("id", "input-" + (bIndex+1))
            })
        })
    };
</script>

@endsection
