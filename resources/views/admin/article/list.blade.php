@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
@endsection

@section('content')

<div class="ibox">
    <div class="create-artcle">
        <a href="{{ url('/dashboard/article/add') }}" class="btn btn-primary btn-block">Create new article</a>
    </div>

    <div class="ibox-content">
        <div class="row m-b-sm m-t-sm">
            <div class="col-md-1">
                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm" ><i class="fa fa-refresh"></i> Refresh</button>
            </div>
            <div class="col-md-11">
            	<form id='search-form' action="{{ url('/dashboard/article/search') }}" method="get">
                	<div class="input-group">
		            	<input type="text" name="article" placeholder="Search" class="input-sm form-control"> 
		            	<span class="input-group-btn">
		            		<button type="button" class="btn btn-sm btn-primary" onclick="search(event)"> Go!</button> 
		            	</span>
                	</div>
                </form>
            </div>
        </div>

        <div class="post-list">
            <table class="table table-hover">
                <tbody>

                @foreach ($posts as $key => $item)
	                <tr>
	                    <td class="post-status">
                            @if($item->is_publish)
                                <span class="label label-primary">Released</span>
                            @else
                                <span class="label label-default">Draft</span>
                            @endif
                        </td>
	                    <td class="post-title">
	                        <a href="{{ url('/dashboard/article/edit') }}/{{ $item->id }}">{{ $item->title }}</a>
	                        <br/>
	                        <small>Created {{ $item->created_at->format("d.M.Y") }}</small>
	                    </td>
	                    
	                    <td class="post-actions">
	                        <a href="{{ url('post/'.$item->slug) }}.html?preview=true" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
	                        <a href="{{ url('/dashboard/article/edit') }}/{{ $item->id }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
	                    </td>
	                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        @include('vendor.pagination.simple-default', ['paginator' => $posts])
    </div>
</div>


<!-- Custom and plugin javascript -->
<script src="{{ asset('inspiration/js/inspinia.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/pace/pace.min.js') }}"></script>


<script>
    $(document).ready(function(){
        $("#articles").addClass("active");
        $("#articles .nav-second-level").addClass("in");
        $("#article_list").addClass("active");

        $('#loading-example-btn').click(function () {
            btn = $(this);
            simpleLoad(btn, true)

            // Ajax example
			//$.ajax().always(function () {
			//simpleLoad($(this), false)
			//});

            //simpleLoad(btn, false)
        });
    });

    function simpleLoad(btn, state) {
        if (state) {
            btn.children().addClass('fa-spin');
            btn.contents().last().replaceWith(" Loading");
        } else {
            setTimeout(function () {
                btn.children().removeClass('fa-spin');
                btn.contents().last().replaceWith(" Refresh");
            }, 2000);
        }
    }

    function search(e) {
        e.preventDefault();
        document.getElementById('search-form').submit();
    } 
</script>
@endsection
