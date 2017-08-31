<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Magiclyde') }} | Dashboard</title>

    @yield('css_content')

    <link rel="shortcut icon" href="/m.ico">

</head>

<body>
    <div id="wrapper">

        <!-- logout handle -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        <script type="text/javascript">
            function logout(e) {
                e.preventDefault();
                document.getElementById('logout-form').submit();
            }                                               
        </script>

        @include('admin.partials.left_sidebar')

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                @include('admin.partials.header')
            </div>

            <!-- Mainly scripts , placed before content-->
            <script src="{{ asset('inspiration/js/jquery-3.1.1.min.js') }}"></script>
            <script src="{{ asset('inspiration/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('inspiration/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
            <script src="{{ asset('inspiration/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>

            <div class="footer">
                @include('admin.partials.footer')
            </div>
        </div>
        <div id="right-sidebar">
            @include('admin.partials.right_sidebar')
        </div>
    </div>
    
</body>
</html>
