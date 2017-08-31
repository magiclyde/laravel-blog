@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
@endsection

@section('content')


<script>
    $(document).ready(function(){
        $("#profile").addClass("active");
        $("#profile .nav-second-level").addClass("in");
        $("#profile_settings").addClass("active");

    });
</script>
@endsection