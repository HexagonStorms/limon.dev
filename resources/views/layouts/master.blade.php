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
    <script type="text/javascript" src="/js/skrollr.min.js"></script>
    <script type="text/javascript">
        var s = skrollr.init({
            edgeStrategy: 'set',
            easing: {
                WTF: Math.random,
                inverted: function(p) {
                    return 1-p;
                }
            }
        });
    </script>
</body>
