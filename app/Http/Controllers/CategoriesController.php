<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function category()
    {
        return view('categories.category');
    }

    public function page()
    {
        return view('categories.category_page');
    }
}
