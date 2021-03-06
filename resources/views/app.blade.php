<!doctype html>
<html lang="hu" xmlns:og="http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if (!empty($seoTitle)){{ $seoTitle }} -@endif Fertőrákosi Lövészklub</title>

    <meta name="description" content="{{ $seoDescription or $seoDescription = "Fertőrákosi Lövészklub: légfegyveres lövészet, sportlövészet, íjászat kezdőknek és haladóknak egyaránt." }}">

    <meta property="og:title" content="@if (!empty($seoTitle)){{ $seoTitle }} -@endif Fertőrákosi Lövészklub" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:image" content="{{ $seoImage or url("/img/fb_share.jpg") }}" />
    <meta property="og:description" content="{{ $seoDescription }}" />
    @if (!empty($seoType))
        <meta property="og:type" content="{{ $seoType }}" />
    @endif
    <meta property="fb:pages" content="1513962075484348" />

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700|Noto+Serif:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="icon" type="image/png" href="/img/icon.png" />
    @yield('headers')
</head>
<body class="home">
<div id="fb-root"></div>

@include('partials.header')

@yield('slider')

<main>
    @yield('content')
</main>

@include('partials.footer')

<script src="{{ elixir('js/app.js') }}"></script>
@yield('scripts')

@if (app()->environment() == 'production')
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-85546283-1', 'auto');
        ga('send', 'pageview');
    </script>
@endif
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.8&appId=228336310678604";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
