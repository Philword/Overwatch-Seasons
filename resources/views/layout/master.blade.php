<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" type="text/css" href="/css/flag-icon.css">
        <link rel="stylesheet" type="text/css" href="/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="/css/roles-icon.css">
        <script src="/js/app.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112771073-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-112771073-1');
        </script>
        {{-- Shink testing --}}
        @yield('seo')
        <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    </head>
    <body class="body-inner">
        <div class="uk-container">
                @include('layout.nav')
        </div>
        <div class="content-margin">
                @yield('content')
        </div>
    </body>
    <footer>
        @include('layout.footer')
    </footer>
</html>
