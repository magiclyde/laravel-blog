<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a list of the posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [];
        return view('front.post_sample', ['posts' => $posts]);
    }
}
