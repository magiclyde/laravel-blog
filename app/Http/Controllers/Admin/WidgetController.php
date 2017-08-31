<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WidgetController extends Controller
{
    public function index()
    {
    	$data = [];
        return view('admin.widgets', ['data' => $data]);
    }
}
