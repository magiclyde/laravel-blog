@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
    <link href="{{ asset('inspiration/css/plugins/bootstrap-markdown/bootstrap-markdown.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspiration/css/plugins/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

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
                                <input required class="form-control" type="text" name="title" placeholder="title..." value="{{ $article->title }}">
                                <br>
                                <label for="basic-url">Permalink:</label>
                                <div id="edit-slug-box" class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">{{ url('/post') }}/</span>
                                    <input required name="slug" value="{{ $article->slug }}" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <label for="basic-url">Published at:</label>

                                <div class="input-group date form_datetime col-md-5" data-date="2017-09-11 08:46:48" data-date-format="Y-m-d H:i:s" data-link-field="dtp_input1">
                                    <input class="form-control" size="16" type="text" name="published_at" value="{{ $article->published_at }}" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <textarea required name="content" data-provide="markdown" rows="25">{{ $article->content }}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group pull-right">
                                <button class="btn btn-sm btn-white" onclick="window.history.go(-1); return false;" type="button" value="Back">Cancel</button>
                                <button class="btn btn-sm btn-success publish-post" data-href="{{ url('/dashboard/article/pubilsh/').'/' .$article->id }}">Publish</button>
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

<!-- modals -->
<div id="confirm" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">Are you sure?</div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-sm btn-primary" id="pubilsh_post">Confirm</button>
                <button type="button" data-dismiss="modal" class="btn btn-sm">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


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

        $('.publish-post').click(function (e) {
            e.preventDefault();
            var href = $(this).attr("data-href");
            $('#confirm').modal({
                backdrop: 'static',
                keyboard: false
            }).one('click', '#pubilsh_post', function(e) {
                //console.log('delete');
                window.location.href = href;
            });
        });
    });
</script>

<script src="{{ asset('inspiration/js/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js') }}"></script>
<script type="text/javascript">
    
$('.form_datetime').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        format: 'yyyy-mm-dd hh:ii:ss'
    });
</script>

@endsection
