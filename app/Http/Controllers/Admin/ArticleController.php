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
        $id = $request->input('id');
        $updateArr['title'] = $request->input('title');
        $updateArr['slug'] = !empty($request->input('slug'))? $request->input('slug'): str_slug($request->input('title'));
        $updateArr['content'] = $request->input('content');
        $updateArr['marked_html'] = markdown_parse($request->input('content'));
        $updateArr['published_at'] = $request->input('published_at');
        $this->service->updatePost($id, $updateArr);

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
    public function pubilsh(Request $request, $id)
    {
        $updateArr['is_publish'] = 1;
        $isUp = $this->service->updatePost($id, $updateArr);
        if ($isUp) {
            $alertType = 'success';
            $msg = 'success to pubilsh.';
        } else {
            $alertType = 'warning';
            $msg = 'fail to pubilsh.';
        }

    	return redirect('/dashboard/article/list')->with($alertType, $msg);
    }

    /**
     * @return Bool
     */
    public function remove(Request $request, $id)
    {
        $isRem = $this->service->removePost($id);
        if ($isRem) {
            $alertType = 'success';
            $msg = 'success to remove.';
        } else {
            $alertType = 'warning';
            $msg = 'fail to remove.';
        }

        return redirect('/dashboard/article/list')->with($alertType, $msg);
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
