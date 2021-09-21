<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function details()
    {
        return view('posts.details');
    }

    public function create()
    {
        return view('posts.create');
    }
}
