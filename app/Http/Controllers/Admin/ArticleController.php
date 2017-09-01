<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    /**
     * display a list of articles
     * 
     * @return 
     */
	public function index()
    {
        $data = [];
        return view('admin.article.list', ['data' => $data]);
    }

    public function add()
    {
        $data = [];
        return view('admin.article.add', ['data' => $data]);
    }

    public function edit($id, $editorType='')
    {
        $data = [];
        return view('admin.article.edit', ['data' => $data]);
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
