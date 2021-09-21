@extends('layouts.app')

@section('content')
<div class="categories">
    <div class="is-flex is-justify-content-space-between px-5">
        <h1>E-commerce</h1>
        <label class="is-align-self-center fs-18">12 posts</label>
    </div>

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
                <div class="is-align-self-center">
                    <img src="/images/Shape.png" class="arrow">
                </div>
            </div>
        </a>
    </div>

    <div class="border-t">
        <div class="box-container">
            <div class="is-flex is-justify-content-space-between">
                <label>Entertainment</label>
                <label>5 min read</label>
            </div>
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">How to organize an event?</h2>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
        <div class="box-container">
            <div class="is-flex is-justify-content-space-between">
                <label>E-commerce</label>
                <label>6 min read</label>
            </div>
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">What are the benefit of e-commerce?</h2>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
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
    </div>

    <div>
        <div class="border-t">
            <div class="box-container">
                <div class="is-flex is-justify-content-space-between">
                    <label>Entertainment</label>
                    <label>5 min read</label>
                </div>
            </div>
        </div>

        <img src="/images/category-img2.png" class="category-img-full">

        <div class="box-container">
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">How to organize an event?</h2>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
        <div class="box-container">
            <div class="is-flex is-justify-content-space-between">
                <label>E-commerce</label>
                <label>6 min read</label>
            </div>
            <a href="#">
                <div class="is-flex is-align-self-center">
                    <div class="is-flex-grow-2">
                        <h2 class="is-size-4">What are the benefit of e-commerce?</h2>
                    </div>
                    <div class="is-align-self-center">
                        <img src="/images/Shape.png" class="arrow">
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="border-t">
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
    </div>
</div>
@endsection
