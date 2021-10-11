@extends('layouts.app')

@section('content')

<div class="has-background-white p-6">

    <div>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item active has-text-weight-semibold {{ Request::path() == 'dashboard' ? 'active' : '' }}">
                        <span>Dashboard</span>
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        <span>Collections</span>
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        <span>Assets</span>
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        <span>Posts</span>
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        <span>Templates</span>
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        <span>Settings</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="border-dashed mt-6">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a href="#" class="mt-3">
                  <img src="/images/PROTON.png">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start mx-auto">
                    <a class="navbar-item active has-text-weight-semibold {{ Request::path() == 'dashboard' ? 'active' : '' }}">
                        Dashboard
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        Collections
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        Assets
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        Posts
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        Templates
                    </a>
                    <a class="navbar-item has-text-weight-semibold">
                        Settings
                    </a>
            </div>
            <div class="navbar-end">
                <a class="navbar-item has-text-weight-semibold pr-3">
                    Sign Out
                </a>
            </div>
        </nav>

        <nav class="navbar mt-5" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a href="#" class="mt-3">
                  <img src="/images/PROTON.png">
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                  <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-end">
                <a class="navbar-item active has-text-weight-semibold pr-3">
                    Home
                </a>
                <a class="navbar-item has-text-weight-semibold pr-3">
                    Categories
                </a>
            </div>
        </nav>
    </div>

    <div class="p-5 mt-6" style="border: 1px dashed black;">
        <footer class="has-background-black" style="padding: 32px 120px;">
            <img src="/images/PROTON-white.png">
            <p class="text-gray mt-3">Dream big. Stay Curious. Be great. Do you</p>

            <div class="is-flex mt-5">
                <a href="#">Dashboard</a>
                <a href="#">Collections</a>
                <a href="#">Assets</a>
                <a href="#">Posts</a>
                <a href="#">Templates</a>
                <a href="#">Settings</a>
                <a href="#" class="text-gray">Sign Out</a>
            </div>
        </footer>

        <div class="mt-5">
            <footer class="has-background-black" style="padding: 32px 120px;">
                <img src="/images/PROTON-white.png">
                <p class="text-gray mt-3">Dream big. Stay Curious. Be great. Do you</p>

                <div class="is-flex mt-5">
                    <a href="#">Linked In</a>
                    <a href="#">Twitter</a>
                    <a href="#">You tube</a>
                    <a href="#">Tik Tok</a>
                    <a href="#" class="text-gray">206 - 745 - 011</a>
                </div>
            </footer>
        </div>
    </div>

    <div class="is-flex mt-6">
        <div class="custom-radio mr-6 pr-6">
            <div class="p-4" style="border: 1px dashed black; width: 125px;">
                <div class="control mb-3">
                    <label class="radio is-inline-flex has-text-black">
                        <input type="radio" name="foobar" checked>
                        Option 1
                    </label>
                </div>
                <div class="control">
                    <label class="radio is-inline-flex">
                        <input type="radio" name="foobar">
                        Option 2
                    </label>
                </div>
            </div>
            <div class="control mt-6">
                <label class="radio is-inline-flex has-text-black">
                    <input type="radio" name="foobar" checked>
                    Option 1
                </label>
                <label class="radio is-inline-flex">
                    <input type="radio" name="foobar">
                    Option 2
                </label>
            </div>
        </div>

        <div class="pl-6 ml-6 pr-6 mr-5 py-5" style="border: 1px dashed #485fc7; width: 35%;">
            <div>
                <label class="help mt-0 pl-3">Name</label>
                <div class="control b-btm">
                    <input class="input" type="text">
                </div>
            </div>
            <div class="mt-5">
                <label class="help mt-0 pl-3">Name</label>
                <div class="control b-btm">
                    <input class="input" type="text">
                </div>
                <p class="help is-black has-text-weight-semibold mt-3 pl-3">Additional Text</p>
            </div>
            <div class="field mt-5">
                <label class="help ml-2">Name</label>
                <div class="ci-box control b-btm has-icons-left">
                        <input class="input is-fullwidth"" type="text" name="" value="78CB7C" oninput="changeColor()">
                    <div class="icon is-left ml-3 has-text-black">
                        <i class="c-color"></i> #
                    </div>
                </div>
            </div>
            <div class="field mt-5">
                <label class="help pb-2 pl-2">Name (Optional)</label>
                <textarea class="textarea" rows="6"></textarea>
            </div>
            <div class="mt-5">
                <label class="help mt-0 pl-3">Name</label>
                <div class="control b-btm has-icons-right">
                    <input class="input" type="tags" placeholder="Add Tag" value="Tag1,Tag2" style="width: 108px;">
                    <span class="icon is-small is-right">
                        <img src="/images/ok_icon_success.png">
                    </span>
                </div>
            </div>
        </div>

        <div class="ml-6" style="width: 25%;">
            <div class="field search">
                <p class="control b-btm has-icons-left">
                    <input class="input" type="text" placeholder="Search">
                    <span class="icon is-small is-left">
                        <img src="/images/Union.png">
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="mt-6 pt-6 mx-auto" style="width: 40%;">
        <div>
            <div class="is-flex is-justify-content-space-between">
                <label>Fragment</label>
                <label>12 posts</label>
            </div>
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-1">Sample for Posts</h2>
                    </div>
                    <div class="is-align-self-center pl-5">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
        <div class="mt-6">
            <div class="is-flex is-justify-content-space-between">
                <label>Fragment</label>
                <label>8 min read</label>
            </div>
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-1">Sample for Posts</h2>
                    </div>
                    <div class="is-align-self-center pl-5">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
        <div class="mt-6">
            <a href="#">
                <div class="is-flex is-align-items-center mt-2">
                    <div>
                        <h2 class="is-size-1 px-0">Last 30 Days</h2>
                        <label>23 Media, 16 Posts</label>
                    </div>
                    <div class="pl-4">
                        <img src="/images/Shape.png" height="8px">
                    </div>
                </div>
            </a>
        </div>
        <div class="mt-6">
            <a href="#">
                <h2 class="text-gray px-0" style="font-size: 80px;">7</h2>
                <div>
                    <label class="is-size-4 sub-tag has-text-weight-normal mr-6">Collections</label>
                    <img src="/images/Shape.png" height="8px" class="pl-5">
                </div>
            </a>
        </div>
        <div class="mt-6">
            <a href="#">
                <div class="is-flex">
                    <div class="mr-5">
                        <img src="/images/category-img-dekstop.png" class="category-img">
                    </div>
                    <div class="mt-1">
                        <div class="is-flex is-justify-content-space-between">
                            <label>Entertainment</label>
                            <label>5 min read</label>
                        </div>
                        <div class="is-flex">
                            <h2 class="is-size-1 category-title px-0 mr-5">Some useful tips</h2>
                            <div class="is-align-self-center">
                                <img src="/images/Shape.png" class="arrow">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="mt-6">
            <div class="is-flex">
                <img src="/images/file_icon.png">
                <div class="is-align-self-center ml-4">
                    <h5 class="has-text-weight-semibold">Estimate in social</h5>
                    <div class="tag mr-2">Tag 01</div>
                    <div class="tag">Tag 02</div>
                </div>
                <div class="is-align-self-center ml-6">
                    <img src="/images/Shape.png" height="8px">
                </div>
            </div>
        </div>
        <div class="mt-6">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="mr-6 pr-5">
                        <h2 class="is-size-4">Online Marketing</h2>
                        <label>Based on electronic technologies</label>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/delete_icon.png" class="trash-icon">
                    </div>
                </div>
            </a>
        </div>
    </div>

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