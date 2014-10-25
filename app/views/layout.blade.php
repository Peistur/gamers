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

</head>
<body>

<div class="layout">

    <div class="header">

        <div class="wrapper">
            <div class="logo">
                <a href="#">
                    {{ HTML::image("img/logo.png", "Logo") }}
                </a>
            </div>
            <div class="clear"></div>
            <ul id="menu">
                <li><a href="{{ URL::action( 'HomeController@index' ) }}">Home</a></li>
                <li>
                    <a href="#">Games</a>
                    <ul>
                        @foreach ( $allGames as $game )
                        <li>
                            <a href="{{ URL::action( 'GalleryController@index', $game->name ) }}">{{ $game->name }}</a>
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