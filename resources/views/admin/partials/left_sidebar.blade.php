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
                <a href="{{ url('/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li id="articles">
                <a href="#"><i class="fa fa-text-width"></i> <span class="nav-label">Articles</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li id="article_lists"><a href="{{ url('/dashboard/article/index') }}">Lists</a></li>
                    <li id="article_add"><a href="{{ url('/dashboard/article/add') }}">New</a></li>
                </ul>
            </li>
            <li id="profile">
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">User</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li id="profile_edit"><a href="{{ url('/dashboard/user/profile') }}">Profile</a></li>
                    <li id="profile_settings"><a href="{{ url('/dashboard/settings') }}">Settings</a></li>
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
            <li>
                <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#toastr_notifications.html">Notification</a></li>
                    <li><a href="#nestable_list.html">Nestable list</a></li>
                    <li><a href="#agile_board.html">Agile board</a></li>
                    <li><a href="#timeline_2.html">Timeline v.2</a></li>
                    <li><a href="#diff.html">Diff</a></li>
                    <li><a href="#pdf_viewer.html">PDF viewer</a></li>
                    <li><a href="#i18support.html">i18 support</a></li>
                    <li><a href="#sweetalert.html">Sweet alert</a></li>
                    <li><a href="#idle_timer.html">Idle timer</a></li>
                    <li><a href="#truncate.html">Truncate</a></li>
                    <li><a href="#password_meter.html">Password meter</a></li>
                    <li><a href="#spinners.html">Spinners</a></li>
                    <li><a href="#spinners_usage.html">Spinners usage</a></li>
                    <li><a href="#tinycon.html">Live favicon</a></li>
                    <li><a href="#google_maps.html">Google maps</a></li>
                    <li><a href="#datamaps.html">Datamaps</a></li>
                    <li><a href="#social_buttons.html">Social buttons</a></li>
                    <li><a href="#code_editor.html">Code editor</a></li>
                    <li><a href="#modal_window.html">Modal window</a></li>
                    <li><a href="#clipboard.html">Clipboard</a></li>
                    <li><a href="#text_spinners.html">Text spinners</a></li>
                    <li><a href="#forum_main.html">Forum view</a></li>
                    <li><a href="#validation.html">Validation</a></li>
                    <li><a href="#tree_view.html">Tree view</a></li>
                    <li><a href="#loading_buttons.html">Loading buttons</a></li>
                    <li><a href="#chat_view.html">Chat view</a></li>
                    <li><a href="#masonry.html">Masonry</a></li>
                    <li><a href="#tour.html">Tour</a></li>
                </ul>
            </li>
            <li id="gallery">
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#basic_gallery.html">Lightbox Gallery</a></li>
                    <li><a href="#slick_carousel.html">Slick Carousel</a></li>
                    <li><a href="#carousel.html">Bootstrap Carousel</a></li>
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