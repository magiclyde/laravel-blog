@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.mailbox')
@endsection

@section('content')
<div class="row">
    @include('admin.partials.mailbox_sidebar')
    
    <div class="col-lg-9 animated fadeInRight">
    <div class="mail-box-header">
        <div class="pull-right tooltip-demo">
            <a href="mail_compose.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Reply"><i class="fa fa-reply"></i> Reply</a>
            <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
            <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </a>
        </div>
        <h2>
            View Message
        </h2>
        <div class="mail-tools tooltip-demo m-t-md">


            <h3>
                <span class="font-normal">Subject: </span>Aldus PageMaker including versions of Lorem Ipsum.
            </h3>
            <h5>
                <span class="pull-right font-normal">10:15AM 02 FEB 2014</span>
                <span class="font-normal">From: </span>alex.smith@corporation.com
            </h5>
        </div>
    </div>
        <div class="mail-box">


        <div class="mail-body">
            <p>
                Hello Jonathan!
                <br/>
                <br/>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type <strong>specimen book.</strong>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged.
                </p>
            <p>
                It was popularised in the 1960s with the release <a href="#" class="text-navy">Letraset sheets</a>  containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
                There are many variations of passages of <strong>Lorem Ipsum</strong>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of.
            </p>
        </div>
            <div class="mail-attachment">
                <p>
                    <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                    <a href="#">Download all</a>
                    |
                    <a href="#">View all images</a>
                </p>

                <div class="attachment">
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="icon">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="file-name">
                                    Document_2014.doc
                                    <br/>
                                    <small>Added: Jan 11, 2014</small>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-responsive" src="img/p1.jpg">
                                </div>
                                <div class="file-name">
                                    Italy street.jpg
                                    <br/>
                                    <small>Added: Jan 6, 2014</small>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="file-box">
                        <div class="file">
                            <a href="#">
                                <span class="corner"></span>

                                <div class="image">
                                    <img alt="image" class="img-responsive" src="img/p2.jpg">
                                </div>
                                <div class="file-name">
                                    My feel.png
                                    <br/>
                                    <small>Added: Jan 7, 2014</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                </div>
                <div class="mail-body text-right tooltip-demo">
                        <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-reply"></i> Reply</a>
                        <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-arrow-right"></i> Forward</a>
                        <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-print"></i> Print</button>
                        <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white"><i class="fa fa-trash-o"></i> Remove</button>
                </div>
                <div class="clearfix"></div>


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
        $("#mailbox").addClass("active");
        $("#mailbox .nav-second-level").addClass("in");
        $("#mail_inbox").addClass("active");

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

    });
</script>
@endsection