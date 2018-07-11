<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a list of the searches.
     */
    public function index(Request $request)
    {

        $keyword = $request->q;
        $searchResults = $this->service->searchBy($keyword, 'idx_post');

        $perPage = 15;
        $options = ['path'=>url('s')];
        $paginatedSearchResults = my_paginate($searchResults, $perPage, '', $options);

        return view('front.search', 
                    [
                        'results' => $paginatedSearchResults, 
                        'keyword' => $keyword
                    ]
        );
    }

}
