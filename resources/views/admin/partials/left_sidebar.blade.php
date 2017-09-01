<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="{{ asset('inspiration/img/profile_small.jpg') }}" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                         </span> <span class="text-muted text-xs block">Web Developer <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{ url('/dashboard/user/profile') }}">Profile</a></li>
                        <li><a href="{{ url('/dashboard/mailbox/inbox') }}">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="logout(event)">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    M+
                </div>
            </li>
            <li id="dashboard">
                <a href="{{ url('/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li id="articles">
                <a href="#"><i class="fa fa-text-width"></i> <span class="nav-label">Articles</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li id="article_list"><a href="{{ url('/dashboard/article/list') }}">List</a></li>
                    <li id="article_add"><a href="{{ url('/dashboard/article/add') }}">New</a></li>
                </ul>
            </li>
            <li id="mailbox">
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                <ul class="nav nav-second-level collapse">
                    <li id="mail_inbox"><a href="{{ url('/dashboard/mailbox/inbox') }}">Inbox</a></li>
                    <li id="mailbox_compose"><a href="{{ url('/dashboard/mailbox/compose') }}">Compose email</a></li>
                </ul>
            </li>
            <li id="widgets">
                <a href="{{ url('/dashboard/widgets') }}"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
            </li>
            <li id="gallery">
                <a href="{{ url('/dashboard/gallery') }}"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span></a>
            </li>
            <li id="profile">
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">User</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li id="profile_edit"><a href="{{ url('/dashboard/user/profile') }}">Profile</a></li>
                    <li id="profile_settings"><a href="{{ url('/dashboard/settings') }}">Settings</a></li>
                </ul>
            </li>
            <li class="landing_link">
                <a  href="{{ url('/') }}"><i class="fa fa-star"></i> <span class="nav-label">Home Page</span> </a>
            </li>
            <li class="special_link">
                <a target="_blank" href="https://github.com/magiclyde/laravel-blog"><i class="fa fa-database"></i> <span class="nav-label">Project Page</span> </a>
            </li>

        </ul>

    </div>
</nav>