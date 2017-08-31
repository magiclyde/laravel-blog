@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.mailbox')
@endsection

@section('content')
<div class="row">
    @include('admin.partials.mailbox_sidebar')

    <div class="col-lg-9 animated fadeInRight">
        <div class="mail-box-header">

            <form method="get" action="{{ url('/dashboard/mailbox/search') }}" class="pull-right mail-search">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" name="email" placeholder="Search email">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Search
                        </button>
                    </div>
                </div>
            </form>
            <h2>
                Inbox (16)
            </h2>
            <div class="mail-tools tooltip-demo m-t-md">
                <div class="btn-group pull-right">
                    <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                    <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>

                </div>
                <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> Refresh</button>
                <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>

            </div>
        </div>
        <div class="mail-box">

            <table class="table table-hover table-mail">
                <tbody>
                    <tr class="unread">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Anna Smith</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Lorem ipsum dolor noretek imit set.</a></td>
                        <td class=""><i class="fa fa-paperclip"></i></td>
                        <td class="text-right mail-date">6.10 AM</td>
                    </tr>
                    <tr class="unread">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks" checked>
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Jack Nowak</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">8.22 PM</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Facebook</a> <span class="label label-warning pull-right">Clients</span> </td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Many desktop publishing packages and web page editors.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Jan 16</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Mailchip</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">There are many variations of passages of Lorem Ipsum.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Mar 22</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Alex T.</a> <span class="label label-danger pull-right">Documents</span></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Lorem ipsum dolor noretek imit set.</a></td>
                        <td class=""><i class="fa fa-paperclip"></i></td>
                        <td class="text-right mail-date">December 22</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Monica Ryther</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">The standard chunk of Lorem Ipsum used.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Jun 12</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Sandra Derick</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Contrary to popular belief.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">May 28</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Patrick Pertners</a> <span class="label label-info pull-right">Adv</span></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">If you are going to use a passage of Lorem </a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">May 28</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Michael Fox</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Humour, or non-characteristic words etc.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Dec 9</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Damien Ritz</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Jun 11</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Anna Smith</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Lorem ipsum dolor noretek imit set.</a></td>
                        <td class=""><i class="fa fa-paperclip"></i></td>
                        <td class="text-right mail-date">6.10 AM</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Jack Nowak</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Aldus PageMaker including versions of Lorem Ipsum.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">8.22 PM</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Mailchip</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">There are many variations of passages of Lorem Ipsum.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Mar 22</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Alex T.</a> <span class="label label-warning pull-right">Clients</span></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Lorem ipsum dolor noretek imit set.</a></td>
                        <td class=""><i class="fa fa-paperclip"></i></td>
                        <td class="text-right mail-date">December 22</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Monica Ryther</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">The standard chunk of Lorem Ipsum used.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Jun 12</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Sandra Derick</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Contrary to popular belief.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">May 28</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Patrick Pertners</a> </td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">If you are going to use a passage of Lorem </a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">May 28</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Michael Fox</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Humour, or non-characteristic words etc.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Dec 9</td>
                    </tr>
                    <tr class="read">
                        <td class="check-mail">
                            <input type="checkbox" class="i-checks">
                        </td>
                        <td class="mail-ontact"><a href="{{ url('/dashboard/mailbox/view') }}/123">Damien Ritz</a></td>
                        <td class="mail-subject"><a href="{{ url('/dashboard/mailbox/view') }}/123">Oor Lorem Ipsum is that it has a more-or-less normal.</a></td>
                        <td class=""></td>
                        <td class="text-right mail-date">Jun 11</td>
                    </tr>
                </tbody>
            </table>

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