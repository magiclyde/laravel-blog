<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function profile()
    {
        $data = [];
        return view('admin.user.profile', ['data' => $data]);
    }

    public function add()
    {

    }

    public function edit($id)
    {
        $data = [];
        return view('admin.user.profile', ['data' => $data]);
    }

    public function remove($id)
    {

    }
}
