<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Coustard|Miriam+Libre:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
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
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    {{--<script type="text/javascript" src="/js/ScrollMagic.min.js"></script>--}}
    <script type="text/javascript" src="/js/app.js"></script>
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

        let lastScrollNumber = 0;
        let scrollDirection = '';

        const animateLine = (lineId, left = false) => {
            var aboutMeLine = document.querySelector(`#${lineId}`);
            if (aboutMeLine === null) {
                return;
            }
            var aboutMeLineLength = aboutMeLine.getTotalLength();

            // Offsetting Dash apparently...
            aboutMeLine.style.strokeDasharray = 1000;
            aboutMeLine.style.strokeDashoffset = 1000;

            window.addEventListener("scroll", (e) => {
                let calculatedPath = 0;
                calculatedPath = (left) ? document.documentElement.scrollTop : document.documentElement.scrollTop * -1;
                let drawLength = calculatedPath;

                    // detect scroll direction b/c js is fucking retarded
                    if (lastScrollNumber > document.documentElement.scrollTop) {
                        scrollDirection = 'down';
                    } else if (lastScrollNumber < document.documentElement.scrollTop) {
                        scrollDirection = 'up';
                    }
                    lastScrollNumber = document.documentElement.scrollTop;

                if (document.documentElement.scrollTop > 195 && document.documentElement.scrollTop < 700) {
                    if (left) {
                        if (scrollDirection == 'down') {
                            aboutMeLine.style.strokeDashoffset = parseInt(aboutMeLine.style.strokeDashoffset) - 10;
                        } else {
                            aboutMeLine.style.strokeDashoffset = parseInt(aboutMeLine.style.strokeDashoffset) + 10;
                        }
                    } else {
                        if (scrollDirection == 'down') {
                            aboutMeLine.style.strokeDashoffset = parseInt(aboutMeLine.style.strokeDashoffset) + 10;
                        } else {
                            aboutMeLine.style.strokeDashoffset = parseInt(aboutMeLine.style.strokeDashoffset) - 10;
                        }
                    }
                }
            });
        };

        animateLine('about-line-left', true);
        animateLine('about-line-right');

        $('.carousel').carousel({
            interval: 2500
        });

        var scrollMagicController = new ScrollMagic();
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
        );
        var blurbScene = new ScrollMagic.Scene({
            triggerElement: '#blurb .item',
            duration: 500,
            offset: -200
        })
        .setTween(blurbTween)
        .addTo(scrollMagicController);

    </script>
</body>
