<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
    	$data = [];
        return view('admin.gallery', ['data' => $data]);
    }
}
