@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
    <link href="{{ asset('inspiration/css/plugins/bootstrap-markdown/bootstrap-markdown.min.css') }}" rel="stylesheet">

@endsection

@section('content')
<!-- article meta -->
<div class="row">
	
</div>

<!-- text editor -->
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Edit article-name</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
            <form class="form-horizontal" method="POST" action="{{ url('dashboard/article/update') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $article->id }}">
                    
                    
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <input class="form-control" type="text" name="title" placeholder="title..." value="{{ $article->title }}">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <textarea name="content" data-provide="markdown" rows="18">{{ $article->content }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group pull-right">
                                <button class="btn btn-sm btn-white" onclick="window.history.go(-1); return false;" type="button" value="Back">Cancel</button>
                                <button class="btn btn-sm btn-success" >Publish</button>
                                <button class="btn btn-sm btn-primary" type="submit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- tags -->
<div class="row"></div>



<!-- Custom and plugin javascript -->
<script src="{{ asset('inspiration/js/inspinia.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/pace/pace.min.js') }}"></script>

<!-- Bootstrap markdown -->
<script src="{{ asset('inspiration/js/plugins/bootstrap-markdown/bootstrap-markdown.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/bootstrap-markdown/markdown.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#articles").addClass("active");
        $("#articles .nav-second-level").addClass("in");

        
    });
</script>
@endsection
