<nav>
    <h1>Hi,</h1>
    <a href="/"><img src="/logo.svg" id="logo" alt="Blog logo"/></a>
    <h2>I'm <a href="{{ url('/') }}">{{ config('app.author') }}</a>.</h2>
    <div id="search">
        <form class="search-form" method="get" action="/s">
            <input type="text" name="q" placeholder='Search ...'>
        </form>
    </div>
    <div id="bio">
        <p>A back-end web developer from Guangzhou, China and I specialize in LNMP .</p>
        <p>Btw, friends call me <a href="javascipt:;">magiclyde</a>.</p>
        <p>If you have a project or creative need that i can help with, please <a href="#">get in touch</a>.</p>
    </div>
    <div id="social">Follow me:
        @include('front.partials.social')
    </div>
    <div id="tags">
        @if(isset($tags))
            @include('front.partials.tags')
        @endif
    </div>
    <!-- <div id="dashboard">
        <a href="{{ url('/dashboard') }}"><i class="fa fa-long-arrow-right"></i>&nbsp;Dashboard</a>
    </div> -->
</nav>