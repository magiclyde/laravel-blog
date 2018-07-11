@extends('layouts.front')

@section('content')
<div id="home">
    <h2><i class="fa fa-search"></i> Searches</h2>
    <ul id="blog-searches" class="posts">
        @foreach ($results as $key => $item)
            <li><span> &raquo;</span><a href="{{ url('post/'.$item->slug) }}">{{ $item->title }}</a></li>
        @endforeach
    </ul>
    {{ $results->appends(['q' => $keyword ])->links('vendor.pagination.simple-default') }}
</div>
@endsection