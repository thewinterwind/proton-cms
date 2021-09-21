<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    public function index()
    {
        return view('collections.index');
    }

    public function collection()
    {
        return view('collections.collection');
    }

    public function create()
    {
        return view('collections.create');
    }

    public function edit()
    {
        return view('collections.edit');
    }

    public function delete()
    {
        return view('collections.delete');
    }
}
