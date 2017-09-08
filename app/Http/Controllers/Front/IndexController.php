<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    
    /**
     * Display a entry page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->service->getPostList(20);
        $tags = $this->service->getAllTag();

        return view('front.index', 
            [
                'articles' => $articles, 
                'tags'=> $tags
            ]
        );
    }


}
