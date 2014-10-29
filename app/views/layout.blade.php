<html>
<head>
    <!--{{ HTML::style( asset('css/blkgallery_layout.css') ) }}
    {{ HTML::style( asset('css/blkgallery_navigation.css') ) }}
    {{ HTML::style( asset('css/slidorion.css') ) }}
    {{ HTML::style( asset('css/box.css') ) }}-->
    {{ HTML::style( asset('css/main.css') ) }}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    {{ HTML::script('js/jquery.easing.js') }}
    {{ HTML::script('js/jquery.slidorion.min.js') }}
    {{ HTML::script('js/main.js') }}

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-56249826-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>

<div class="layout">

    <div class="header">

        <div class="wrapper">
            <div class="rectangle">
                <div class="logo">
                    <a href="{{ URL::action( 'HomeController@index' ) }}">
                        {{ HTML::image("img/logo4.png", "Logo") }}
                    </a>
                </div>
            </div>
            <div class="triangle-l"></div>
            <div class="triangle-r"></div>
            <div class="info">
            </div>
        </div>

        <div class="wrapper">
            <!--<div class="logo">
                <a href="#">
                    {{ HTML::image("img/logo.png", "Logo") }}
                </a>
            </div>-->
            <div class="clear"></div>
            <ul id="menu">
                <li><a href="{{ URL::action( 'HomeController@index' ) }}">Home</a></li>
                <li>
                    <a href="#">Games</a>
                    <ul>
                        @foreach ( $allGames as $game )
                        <li>
                            <a href="{{ URL::action( 'GameController@index', $game->name ) }}">{{ $game->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

    </div>

    <div class="content">

        @yield('content')

    </div>

</div>

</body>
</html>