<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>
        @yield('title')
    </title>

    @yield('topscript')
</head>
<body>
    @yield('content')

    @yield('bottomscript')
    <script src="/js/app.js"></script>
</body>
