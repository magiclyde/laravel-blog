@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Gallery carousel</h5>
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
                <div class="carousel slide" id="carousel3">
                    <div class="carousel-inner">
                        <div class="item gallery active left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img alt="image" class="img-responsive" src="{{ asset('inspiration/img/p_big1.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image" class="img-responsive" src="{{ asset('inspiration/img/p_big2.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive"  src="{{ asset('inspiration/img/p_big3.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive" src="{{ asset('inspiration/img/p_big1.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="item gallery next left">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive" src="{{ asset('inspiration/img/p_big3.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive" src="{{ asset('inspiration/img/p_big1.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive"  src="{{ asset('inspiration/img/p_big2.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive" src="{{ asset('inspiration/img/p_big1.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <div class="item gallery">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive" src="{{ asset('inspiration/img/p_big2.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive" src="{{ asset('inspiration/img/p_big3.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image"  class="img-responsive"  src="{{ asset('inspiration/img/p_big1.jpg') }}">
                                </div>
                                <div class="col-sm-6">
                                    <img alt="image" class="img-responsive" src="{{ asset('inspiration/img/p_big2.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a data-slide="prev" href="#carousel3" class="left carousel-control">
                        <span class="icon-prev"></span>
                    </a>
                    <a data-slide="next" href="#carousel3" class="right carousel-control">
                        <span class="icon-next"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspiration/js/inspinia.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/pace/pace.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('inspiration/js/plugins/iCheck/icheck.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#gallery").addClass("active");

        
    });
</script>
@endsection
