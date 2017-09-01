@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
@endsection

@section('content')

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspiration/js/inspinia.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/pace/pace.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#articles").addClass("active");
        $("#articles .nav-second-level").addClass("in");
        $("#article_add").addClass("active");

        
    });
</script>
@endsection
