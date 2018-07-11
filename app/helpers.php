<?php

if (! function_exists('markdown_parse')) {
    /**
     * convert an arbitrary Markdown document to the html code.
     *
     * @param  string  $text
     * @return string
     */
    function markdown_parse($text)
    {
    	$render_url = 'https://api.github.com/markdown';

		$request_array['text'] = $text;
		$request_array['mode'] = 'markdown';

        return curl_raw($render_url, json_encode($request_array));
    }
}

if (! function_exists('curl_raw')) {
    /**
     * make a curl post
     *
     * @param  string  $url
     * @param  string  $content
     * @return string
     */
    function curl_raw($url, $content) 
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, 
            array("Content-type: application/json",
                  "User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Safari/537.36" )
            );
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        return $json_response;
    }
}

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
if (! function_exists('my_paginate')) {

    /**
      * Generate pagination of items in an array or collection.
      *
      * @param array|Collection      $items
      * @param int  $perPage
      * @param int  $page
      * @param array $options
      *
      * @return LengthAwarePaginator
      */
    function my_paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : collect($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}