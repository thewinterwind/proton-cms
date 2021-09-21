<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index()
    {
        return view('assets.index');
    }

    public function uploadIndex()
    {
        return view('assets.upload_index');
    }

    public function upload()
    {
        return view('assets.upload');
    }

    public function details()
    {
        return view('assets.details');
    }
}
