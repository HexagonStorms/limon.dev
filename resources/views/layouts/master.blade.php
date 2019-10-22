<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Coustard|Miriam+Libre:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome-all.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>

    @yield('topscript')
</head>
<body>
    @yield('content')

    @yield('bottomscript')

    <script type="text/javascript" src="/js/skrollr.min.js"></script>
    <script type="text/javascript" src="/js/TweenMax.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="/js/plugins/debug.addIndicators.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript">

        // Landscape Parallax Scroll
        var s = skrollr.init({
            edgeStrategy: 'set',
            easing: {
                WTF: Math.random,
                inverted: function(p) {
                    return 1-p;
                }
            }
        });

        $( document ).ready(function() {
            var scrollMagicController = new ScrollMagic.Controller();
            var blurbTween = TweenMax.staggerFromTo('#blurb .item', 0.5,
                {
                    y: 50,
                    x: -50,
                    opacity: 0
                },
                {
                    y: 0,
                    x: 0,
                    opacity: 1
                },
                0.2
            )
            var blurbScene = new ScrollMagic.Scene({
                triggerElement: '#blurb .item',
                duration: 300,
                offset: 0
            })
            .setTween(blurbTween)
            .addTo(scrollMagicController);
        });

    </script>
</body>
