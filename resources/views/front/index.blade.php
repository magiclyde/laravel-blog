@extends('layouts.front')

@section('content')
<div id="home">
    <h2><i class="fa fa-bookmark"></i> Blog Posts</h2>
    <ul id="blog-posts" class="posts">
    	@foreach ($articles as $key => $item)
    	    <li><span>{{ $item->created_at->format("d M Y") }}&raquo;</span><a href="{{ url('post/'.$item->slug) }}.html">{{ $item->title }}</a></li>
    	@endforeach
    </ul>
    @include('vendor.pagination.simple-default', ['paginator' => $articles])
</div>
@endsection