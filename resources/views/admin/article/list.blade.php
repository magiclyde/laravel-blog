@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
@endsection

@section('content')

<div class="ibox">
    <div class="ibox-title">
        <h5>Article list</h5>
        <div class="ibox-tools">
            <a href="{{ url('/dashboard/article/add') }}" class="btn btn-primary btn-xs">Create new article</a>
        </div>
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

        <div class="article-list">
            <table class="table table-hover">
                <tbody>
	                <tr>
	                    <td class="article-status">
	                        <span class="label label-primary">Active</span>
	                    </td>
	                    <td class="project-title">
	                        <a href="{{ url('/dashboard/article/edit') }}/1">Contract with Zender Company</a>
	                        <br/>
	                        <small>Created 14.08.2014</small>
	                    </td>
	                    <td class="project-people">
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a3.jpg') }}"></a>
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a1.jpg') }}"></a>
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a2.jpg') }}"></a>
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a4.jpg') }}"></a>
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a5.jpg') }}"></a>
	                    </td>
	                    <td class="project-actions">
	                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
	                        <a href="{{ url('/dashboard/article/edit') }}/2" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
	                    </td>
	                </tr>
	                <tr>
	                    <td class="article-status">
	                        <span class="label label-default">Unactive</span>
	                    </td>
	                    <td class="project-title">
	                        <a href="{{ url('/dashboard/article/edit') }}/2">There are many variations of passages</a>
	                        <br/>
	                        <small>Created 11.08.2014</small>
	                    </td>

	                    <td class="project-people">
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a7.jpg') }}"></a>
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a6.jpg') }}"></a>
	                        <a href=""><img alt="image" class="img-circle" src="{{ asset('inspiration/img/a3.jpg') }}"></a>
	                    </td>
	                    <td class="project-actions">
	                        <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
	                        <a href="{{ url('/dashboard/article/edit') }}/2" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
	                    </td>
	                </tr>
                
                </tbody>
            </table>
        </div>
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
