<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Core\Domain\Repository\PostRepository;


class IndexController extends Controller
{
    protected $repos;

    public function __construct(PostRepository $repos)
    {
        $this->repos = $repos;
    }

    /**
     * Display a entry page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->repos->getList(20);
        return view('front.index', ['articles' => $articles]);
    }


}
