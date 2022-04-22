<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>{{ config('app.name') }}</title>
        @if (App::environment('production'))
            {{-- @TODO: Clarity & GA --}}
        @endif
    </head>
    <body class="min-h-screen">
        <div id="app" class="bg-black min-h-screen flex flex-col justify-center"></div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>