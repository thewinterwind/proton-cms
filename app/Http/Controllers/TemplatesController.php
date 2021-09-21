<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    public function index()
    {
        return view('templates.index');
    }

    public function edit()
    {
        return view('templates.edit');
    }

    public function delete()
    {
        return view('templates.delete');
    }
}
