<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class ArticleController extends Controller
{

    /**
     * display a list of articles
     * 
     * @return 
     */
	public function index(Request $request)
    {
        $posts = $this->service->getAllPost();
        return view('admin.article.list', compact('posts'));
    }

    /**
     * render article create page
     */
    public function add(Request $request)
    {
        $data = [];
        return view('admin.article.add', ['data' => $data]);
    }

    /**
     * Store a new post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->service->createPost($request);

        return redirect('/dashboard/article/list');
    }

    /**
     * render article edit page
     */
    public function edit($id)
    {
        $article = $this->service->getPostById($id);
        //dd($article);
        return view('admin.article.edit', ['article' => $article]);
    }

    public function update(Request $request)
    {
        $this->service->updatePost($request);
        return redirect('/dashboard/article/list');
    }

    public function preview($id)
    {
    	$data = [];
        return view('admin.article.preview', ['data' => $data]);
    }

    /**
     * @return Bool
     */
    public function pubilsh($id)
    {
    	
    }

    /**
     * @return Bool
     */
    public function remove($id)
    {

    }

    /**
     * display a list of searches
     * 
     * @return 
     */
    public function search()
    {
        $data = [];
        return view('admin.article.search', ['data' => $data]);
    }
}
