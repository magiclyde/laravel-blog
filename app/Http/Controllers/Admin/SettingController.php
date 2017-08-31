<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
    	$data = [];
        return view('admin.user.settings', ['data' => $data]);
    }
}
