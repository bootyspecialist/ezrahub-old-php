<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ezra hub - @yield('title')</title>
        <meta name="description" content="Ezra Hub is a popular, student-run forum for Cornell University students. Anonymous posting and user accounts are allowed and everything from frats, sororities, classes, drugs, housing and more is discussed. Ezra Hub is not endorsed by Cornell University.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="header-inner">
                <h1>ezra hub</h1>
                <div id="search-bar">
                    <input type="text" name="search-input" placeholder="search threads and posts..." value="">
                </div>
                <div id="other-header-options">
                    <ul>
                        <li class="new-thread-button">
                            <i class="fa fa-pencil-square-o"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <main>{{ $content }}</main>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
        <script>var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-37389599-1']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://':'http://')+'stats.g.doubleclick.net/dc.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script>
    </body>
</html>