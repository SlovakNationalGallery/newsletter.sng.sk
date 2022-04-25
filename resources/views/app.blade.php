<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        {{-- favicon --}}
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="theme-color" content="#000000">
        {{-- /favicon --}}
        <title>{{ config('app.name') }}</title>
        @if (App::environment('production'))
            {{-- @TODO: Clarity & GA --}}
        @endif
    </head>
    <body class="min-h-screen">
        <div id="app" class="bg-black min-h-screen flex flex-col justify-center p-20"></div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>