@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
@endsection

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('warning'))
        <div class="alert alert-warning">
            <ul>
                <li>{!! \Session::get('warning') !!}</li>
            </ul>
        </div>
    @endif

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
	                        <a data-href="{{ url('/dashboard/article/remove/'.$item->id) }}" class="btn btn-white btn-sm remove-post"><i class="fa fa-trash-o"></i> Remove </a>
                            <a href="{{ url('post/'.$item->slug) }}?preview=true" class="btn btn-white btn-sm"><i class="fa fa-eye"></i> View </a>
	                        <a href="{{ url('/dashboard/article/edit') }}/{{ $item->id }}" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
	                    </td>
	                </tr>
                @endforeach

                </tbody>
            </table>
        </div>

        {{ $posts->links('vendor.pagination.custom') }}

    </div>
</div>

<!-- modals -->
<div id="confirm" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">Are you sure?</div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-sm btn-primary" id="delete">Delete</button>
                <button type="button" data-dismiss="modal" class="btn btn-sm">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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

        $('.remove-post').click(function (e) {
            e.preventDefault();
            var href = $(this).attr("data-href");
            $('#confirm').modal({
                backdrop: 'static',
                keyboard: false
            }).one('click', '#delete', function(e) {
                //console.log('delete');
                window.location.href = href;
            });
        });

        $(".alert-success").fadeTo(2000, 500).slideUp(200, function(){
            $(".alert-success").alert('close');
        });

        /*$(".alert-warning").fadeTo(2000, 500).slideUp(200, function(){
            $(".alert-warning").alert('close');
        });*/

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
