@extends('layouts.app')

@section('content')

<div id="row_level_components" class="my-6">

    {{-- Input Type 1 --}}
    <div class="input_type">
        <label class="help mt-0 pl-3">Title</label>
        <div class="control b-btm">
            <input class="input" type="text">
        </div>
    </div>

    {{-- Input Type 2 --}}
    <div class="input_type">
        <label class="help mt-0 pl-3">URL Slug</label>
        <div class="control b-btm">
            <div class="select is-fullwidth">
                <select>
                    <option>Text</option>
                    <option>With options</option>
                </select>
            </div>
        </div>
        <p class="help is-black has-text-weight-semibold mt-3 pl-3">Additional Text</p>
    </div>

    {{-- Input Type 3 --}}
    <div class="input_type">
        <label class="help mt-0 pl-3">Title</label>
        <div class="control b-btm has-icons-right">
            <input class="input" type="tags" placeholder="Add Tag" value="Tag1,Tag2" style="width: 108px;">
            <span class="icon is-small is-right">
                <img src="/images/ok_icon_success.png">
            </span>
        </div>
    </div>

    {{-- Input Type 4 --}}
    <div class="input_type">
        <div class="field">
            <label class="help pb-2">Title (Optional)</label>
            <textarea class="textarea" rows="6"></textarea>
        </div>
    </div>

    {{-- Input Type 5 --}}
    <div class="input_type">
        <div class="field">
            <label class="help">Title</label>
            <div class="control b-btm has-icons-left">
                <div class="select is-fullwidth">
                    <select>
                        <option selected>#78CB7C</option>
                        <option>Select dropdown</option>
                        <option>With options</option>
                    </select>
                </div>
                <div class="icon is-small is-left">
                    <i class="c-color"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- Input Type 6 --}}
    <div class="input_type">
        <div class="field search">
            <p class="control b-btm has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Search">
                <span class="icon is-small is-left">
                    <img src="/images/Union.png">
                </span>
            </p>
        </div>
    </div>

    {{-- Button Type 1 --}}
    <div class="button_type">
        <button class="button button-black is-fullwidth">Button</button>
    </div>

    {{-- Button Type 3 --}}
    <div class="button_type">
        <button class="button button-black small-btn">Add New</button>
    </div>

    {{-- Notification --}}
    <div class="mt-5">
        <div class="notification mb-0 is-size-6 is-flex">
            <img src="/images/ok_icon.png" class="mr-4">
            Collection was successfully added!
        </div>
    </div>

    {{-- Dashboard --}}
    <div class="dashboard">
        <a href="#">
            <div class="is-flex is-align-self-center mt-2">
                <div class="is-flex-grow-2">
                    <h2 class="is-size-4 px-0">Total Posts</h2>
                </div>
                <div class="is-flex is-align-self-center">
                    <h2 class="num-posts">35</h2>
                    <div class="pl-2 is-align-self-center">
                        <img src="/images/Shape.png" height="8px">
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- Collections --}}
    <div class="collections">
        <a href="#">
            <div class="is-flex is-align-self-center mt-2">
                <div class="is-flex-grow-2">
                    <h2 class="is-size-4 px-0">Last 30 Days</h2>
                    <label>23 Media, 16 Posts</label>
                </div>
                <div class="is-flex is-align-self-center">
                    <div class="pl-2 is-align-self-center">
                        <img src="/images/Shape.png" height="8px">
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- Post type 2 --}}
    <div class="box-container">
        <div class="is-flex is-justify-content-space-between">
            <label>Finance</label>
            <label>8 min read</label>
        </div>
        <a href="#">
            <div class="is-flex is-align-self-center">
                <div class="is-flex-grow-2">
                    <h2 class="is-size-4">How to make money online?</h2>
                </div>
                <div class="is-align-self-center pl-5">
                    <img src="/images/Shape.png" class="arrow">
                </div>
            </div>
        </a>
    </div>

    {{-- Post template --}}
    <div class="box-container">
        <div class="is-flex is-justify-content-space-between">
            <label>Fragment</label>
            <label>12 posts</label>
        </div>
        <a href="#">
            <div class="is-flex is-align-self-center">
                <div class="is-flex-grow-2">
                    <h2 class="is-size-4">Sample for Posts</h2>
                </div>
                <div class="is-align-self-center pl-5">
                    <img src="/images/Shape.png" class="arrow">
                </div>
            </div>
        </a>
    </div>

    {{-- List row type 1 --}}
    <div class="box-container">
        <label class="help">Title</label>
        <h3 class="is-size-6 has-text-weight-semibold">Text</h3>
    </div>

    {{-- List row type 2 --}}
    <div class="box-container">
        <label class="help">Title</label>
        <div class="is-flex is-flex-wrap-wrap">
            <span class="list_row_type">Tag 01</span>
            <span class="list_row_type">Tag 01</span>
        </div>
    </div>

    {{-- Title type 1 --}}
    <div class="box-container">
        <div class="is-flex is-justify-content-space-between">
            <h2 class="is-size-3 has-text-weight-semibold">E-Commerce</h2>
            <label class="is-align-self-center">25 posts</label>
        </div>
    </div>

    {{-- Title type 2 --}}
    <div class="box-container">
        <div class="is-flex is-justify-content-space-between">
            <h2 class="is-size-3 has-text-weight-semibold">E-Commerce</h2>
            <a href="#">
                <label class="is-align-self-center is-size-6">New <span class="pl-2">+</span></label>
            </a>
        </div>
    </div>

    {{-- Title type 3 --}}
    <div class="box-container">
        <h1>E-Commerce</h1>
    </div>

    {{-- Google analytics --}}
    <div class="box-container">
        <div class="is-flex">
            <div class="is-align-self-center"><img src="/images/Group.png"></div>
            <h5 class="is-size-4 has-text-weight-semibold mx-3">Google Analytics</h5>
            <div class="is-align-self-center"><img src="/images/external_link_icon.png" class="pt-2"></div>
        </div>
    </div>

    {{-- Subtitle --}}
    <div class="box-container">
        <div class="is-flex is-align-self-center">
            <h2 class="is-size-4">More Posts</h2>
            <div class="is-align-self-center ml-3">
                <img src="/images/Shape.png" height="8px">
            </div>
        </div>
    </div>

    {{-- Subtitle toggle --}}
    <div class="box-container">
        <div class="is-flex is-justify-content-space-between is-align-self-center">
            <h2 class="is-size-4">Option</h2>
            <div class="field is-align-self-center">
                <input id="switchRoundedDefault" type="checkbox" name="switchRoundedDefault" class="switch is-rounded" checked="checked">
                <label for="switchRoundedDefault"></label>
            </div>
        </div>
    </div>

    {{-- Post type 3 --}}
    <div class="box-container">
        <a href="#">
            <div class="is-flex is-justify-content-space-between mt-2">
                <div class="is-flex">
                    <div class="mr-3">
                        <img src="/images/category-img.png" class="category-img">
                    </div>
                    <div>
                        <label>Entertainment</label>
                        <h2 class="is-size-4 px-0">Dropshipping</h2>
                        <label>5 min read</label>
                    </div>
                </div>
                <div class="is-align-self-center">
                    <img src="/images/Shape.png" class="arrow">
                </div>
            </div>
        </a>
    </div>

    {{-- Pagination --}}
    <nav class="pagination" role="navigation" aria-label="pagination">
        <a class="pagination-previous pl-0 ml-0">
            <img src="/images/page-left.png" class="arrow-page">
        </a>
        <ul class="pagination-list">
            <li>
                <a class="pagination-link is-current" aria-label="Goto page 1" aria-current="page">1</a>
            </li>
            <li>
                <a class="pagination-link" aria-label="Goto page 2">2</a>
            </li>
            <li>
                <a class="pagination-link" aria-label="Goto page 3">3</a>
            </li>
            <li>
                <a class="pagination-link" aria-label="Goto page 4">4</a>
            </li>
            <li>
                <span class="pagination-ellipsis">&hellip;</span>
            </li>
            <li>
                <a class="pagination-link" aria-label="Page 16">16</a>
            </li>
        </ul>
        <a class="pagination-next pr-0 mr-0">
            <img src="/images/page-right.png" class="arrow-page">
        </a>
    </nav>

    {{-- Sort --}}
    <div class="box-container">
        <div class="is-flex">
            <label class="is-align-self-center is-size-6 mr-1">Sort by</label>
            <a class="btn-sort has-text-black is-flex is-align-self-center is-size-6">A to Z <img src="/images/arrow_down_icon.png" class="is-align-self-center ml-2"></a>
        </div>
    </div>

    {{-- File --}}
    <div class="box-container">
        <div class="is-flex">
            <img src="/images/zip_file.png">
            <div class="is-align-self-center ml-4">
                <label class="help">Asset ID</label>
                <div class="is-flex is-align-self-center">
                    <h2 class="is-size-4 has-text-weight-semibold">086547</h2>
                    <img src="/images/copy_icon.png" class="is-align-self-center pl-4">
                </div>
                <label class="help">File Size</label>
                <h2 class="is-size-4">3.4 MB</h2>
            </div>
        </div>
    </div>

    {{-- Header --}}
    <div class="box-container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="/images/PROTON.png" class="pl-4">
                </a>

                <span class="navbar-burger" data-target="navMenu">
                    <span ></span>
                    <span ></span>
                </span>
            </div>
        </nav>
    </div>

    {{-- Post with delete option --}}
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

    {{-- Asset --}}
    <div class="box-container">
        <div class="is-flex is-justify-content-space-between">
            <div class="is-flex">
                <img src="/images/file_icon.png">
                <div class="is-align-self-center ml-4">
                    <h5 class="has-text-weight-semibold">Estimate in social</h5>
                    <div class="tag mr-2">Tag 01</div>
                    <div class="tag">Tag 02</div>
                </div>
            </div>
            <div class="is-align-self-center">
                <img src="/images/Shape.png" height="8px">
            </div>
        </div>
    </div>

    {{-- Tabs group --}}
    <div class="box-container">
        <div class="tabs">
            <ul>
                <li class="is-active"><a>Tab 1</a></li>
                <li><a>Tab 2</a></li>
                <li><a>Tab 3</a></li>
                <li><a>Tab 4</a></li>
            </ul>
        </div>
    </div>

    {{-- Active Tab --}}
    <div class="px-5 mt-5">
        <div class="tabs">
            <ul>
                <li class="is-active"><a>Tab 1</a></li>
            </ul>
        </div>
    </div>

    {{-- Inactive Tab --}}
    <div class="px-5 mt-5">
        <div class="tabs">
            <ul>
                <li><a>Tab 1</a></li>
            </ul>
        </div>
    </div>

    {{-- Tag --}}
    <div class="px-5 mt-4">
        <div class="tag">Tag 01</div>
    </div>

    {{-- Tag with delete option --}}
    <div class="px-5 mt-4">
        <div class="tag">
            Tag 01
            <a href="#"><img src="/images/x_icon.png" class="pl-2 pt-1"></a>
        </div>
    </div>

    {{-- Tags group --}}
    <div class="px-5 mt-4">
        <div class="is-flex">
            <div class="tag mr-2">Tag 01</div>
            <div class="tag">Tag 02</div>
        </div>
    </div>

    {{-- Radiobutton active --}}
    <div class="px-5 mt-4">
        <label class="radio_button">
            <input type="radio" name="radio" checked/>
            <span class="is-size-6"></span>
        </label>
    </div>

    {{-- Radiobutton inactive --}}
    <div class="px-5 mt-4">
        <label class="radio_button">
            <input type="radio" name="radio"/>
            <span></span>
        </label>
    </div>

    {{-- Multiple selection active --}}
    <div class="px-5 mt-4">
        <label class="radio_button">
            <input type="radio" name="radio2" checked/>
            <span class="is-size-6 has-text-black">Text</span>
        </label>
    </div>

    {{-- Multiple selection inactive --}}
    <div class="px-5 mt-4">
        <label class="radio_button">
            <input type="radio" name="radio2"/>
            <span class="is-size-6 text-gray">Text</span>
        </label>
    </div>

    {{-- Toggle active --}}
    <div class="box-container">
        <div class="field is-align-self-center">
            <input id="switchRoundedDefault2" type="checkbox" name="switchRoundedDefault2" class="switch is-rounded" checked="checked">
            <label for="switchRoundedDefault2"></label>
        </div>
    </div>

    {{-- Toggle Inactive --}}
    <div class="box-container">
        <div class="field is-align-self-center">
            <input id="switchRoundedDefault3" type="checkbox" name="switchRoundedDefault3" class="switch is-rounded">
            <label for="switchRoundedDefault3"></label>
        </div>
    </div>
</div>
@endsection
