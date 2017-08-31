<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a dashboard entry page.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $data = [];
        return view('admin.dashboard', ['data' => $data]);
    }

    public function search()
    {
        $data = [];
        return view('admin.search', ['data' => $data]);
    }
}
