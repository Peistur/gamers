<html>
<head>
    <!--{{ HTML::style( asset('css/blkgallery_layout.css') ) }}
    {{ HTML::style( asset('css/blkgallery_navigation.css') ) }}-->
    {{ HTML::style( asset('css/slidorion.css') ) }}
    {{ HTML::style( asset('css/box.css') ) }}
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
                <a href="">4gamers
                    <img src="">
                </a>
            </div>
            <div class="clear"></div>
            <ul id="menu">
                <li><a href="#">Home</a></li>
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

        <div class="wrapper">
            <div class="main-content left">
                <div class="panel-block">
                    <div class="panel-title">
                        <h2>Últimos videos</h2>
                    </div>
                    <div class="article-box">

                        @if ( $videos )
                        @foreach ( $videos as $video )
                        <a href="{{ URL::action( 'VideoController@index', $video->id ) }}">
                            <img src="http://img.youtube.com/vi/{{ $video->youtubeId }}/0.jpg" alt="" width="300" height="220" />
                        </a>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>