<span>
	@foreach ($tags as $key => $item)
		<a href="/tag/{{ $item->slug }}"><i class="fa fa-tag"></i>{{ $item->title }}</a>&nbsp;
	@endforeach
</span>