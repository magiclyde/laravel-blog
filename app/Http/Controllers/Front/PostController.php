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
    public function index(Request $request, $slug)
    {
        $post = $this->service->getPostBySlug($slug);

        return view('front.post', ['post' => $post]);
    }
}
