<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        {{-- favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="theme-color" content="#242424">
        {{-- /favicon --}}
        <title>{{ config('app.name') }}</title>
        @if (App::environment('production'))
            {{-- GA4 --}}
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-WKNTKCP9B5"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-WKNTKCP9B5');
            </script>

            {{-- Clarity --}}
            <script type="text/javascript"> (function(c,l,a,r,i,t,y){ c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)}; t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i; y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y); })(window, document, "clarity", "script", "bs31c6aqvu"); </script>
        @endif
    </head>
    <body class="min-h-screen overscroll-none">
        <div id="app" class="bg-gray-600 min-h-screen flex flex-col justify-center px-14"></div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>