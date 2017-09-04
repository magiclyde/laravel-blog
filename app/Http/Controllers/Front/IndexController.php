<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core\Domain\Services\MyService;


class IndexController extends Controller
{
    protected $service;

    public function __construct(MyService $service)
    {
        $this->service = $service;
    }

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
