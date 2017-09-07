<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{{ app()->getLocale() }}"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderder" content="webkit">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Magiclyde') }}</title>
    <meta name="author" content="magiclyde" />
    <meta name="description" content="The blog of magiclyde" />
    <link rel="canonical" href="https://magiclyde.me/" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:600,800" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/svg+xml" href="/logo.svg">
    <link rel="alternate" type="application/atom+xml" title="magiclyde" href="https://magiclyde.me/atom.xml" />
    <link rel="stylesheet" href="{{ asset('lagom/css/all.css') }}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="four columns sidebar">
            @include('front.partials.sidebar')
        </div>

        <div class="eleven columns content">
            
            @yield('content')
            
            <div class="footer">
                @include('front.partials.footer')
            </div>
        </div>
    </div>

    @include('front.partials.analytics')

</body>
</html>
