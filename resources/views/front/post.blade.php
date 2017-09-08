@extends('layouts.front')

@section('content')

	@if($post->marked_html)
		<link href="{{ asset('css/markdown.css') }}" rel="stylesheet">

		<p class="meta">{{ $post->created_at->format("M d, Y") }}<a href="/"><i class="home fa fa-home"></i></a></p>
		<div id="post">
			<article class="markdown-body">{!! $post->marked_html !!}</article>
		</div>

		<!-- <div id="related">
		    <h3>Related Posts</h3>
		    <ul class="posts">
		        <li>
		            <span>12 Aug 2013 &raquo;</span> <a href="#">Another sample</a>
		        </li>
		    </ul>
		</div> -->
	@else
		<div id="home">
		    <h2><i class="fa fa-frown-o"></i> Ah, that's nothing left...</h2>
		    <ul id="blog-posts" class="posts">
		        <p>Try <a href="/">going back to the homepage.</a></p>
		    </ul>
		</div>
	@endif

@endsection