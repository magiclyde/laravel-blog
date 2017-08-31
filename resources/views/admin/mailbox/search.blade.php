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
	            Inbox (2)
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
@endsection
