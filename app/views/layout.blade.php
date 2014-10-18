<html>
    <head>
        {{ HTML::style( asset('css/blkgallery_layout.css') ) }}
        {{ HTML::style( asset('css/blkgallery_navigation.css') ) }}
        {{ HTML::style( asset('css/slidorion.css') ) }}
        {{ HTML::style( asset('css/box.css') ) }}
        {{ HTML::style( asset('css/main.css') ) }}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        {{ HTML::script('js/jquery.easing.js') }}
        {{ HTML::script('js/jquery.slidorion.min.js') }}
        {{ HTML::script('js/main.js') }}

    </head>
    <body>
        <!--<div class=" wrapper bgrow1">
            <div id="topbar">
                <div id="search">
                    <form action="#" method="post">
                        <fieldset>
                            <legend>Site Search</legend>
                            <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
                            <input type="submit" name="go" id="go" value="GO" />
                        </fieldset>
                    </form>
                </div>
            </div>
            <br class="clear" />
        </div>-->

        <div class="wrapper bgrow2">
            <div id="header">
                <div id="logo">

                </div>
                <div id="topnav">
                    <ul>
                        <li class="{{ Request::is( '/') ? 'active' : '' }}">
                            <a href="{{ URL::action( 'HomeController@index' ) }}">Inicio</a>
                        </li>

                        <li class="{{ Request::is( 'gallery/*' ) ? 'active' : '' }}">
                            <a href="#">Juegos</a>
                            <ul>
                            @foreach ( $allGames as $game )
                                <li>
                                    <a href="{{ URL::action( 'GalleryController@index', $game->name ) }}">{{ $game->name }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </li>

                        <li class="{{ Request::is( 'list/*' ) ? 'active' : '' }}">
                            <a href="#">Listas</a>
                            <ul>
                                @foreach ( $allGames as $game )
                                <li>
                                    <a href="{{ URL::action( 'ListController@index', $game->name ) }}">{{ $game->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <!--<li class="active"><a href="index.html">Home</a></li>
                        <li><a href="2-col.html">2 Column</a></li>
                        <li><a href="full-col.html">Full Column</a></li>
                        <li ><a href="contact.html">Contact</a></li>
                        <li><a href="#">DropDown</a>
                            <ul>
                                <li><a href="#">sub menu 1</a></li>
                                <li><a href="#">sub menu 2</a></li>
                                <li><a href="#">sub menu 3</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
                <br class="clear" />
            </div>
        </div>
        <div class="wrapper bgrow4">
            <div id="container">

            @yield('content')

            </div>
        </div>
        <div id="wrapper" class="wrapper bgrow4">
            <div id="container"><br class="clear" />
            </div>
        </div>
        <div class="wrapper bgrow5">
            <div id="footer">
                <div class="footbox newsletter">
                    <h2>Subscribe Newsletter </h2>
                    <p>Please enter your email to subscribe. </p>
                    <form action="#" method="post">
                        <fieldset>
                            <legend>News Letter</legend>
                            <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
                            <input type="submit" name="news_go" id="news_go" value="GO" />
                        </fieldset>
                    </form>
                </div>
                <div class="midbox">
                    <h2 >Archive</h2>
                    <ul>
                        <li><a href="#">Phasellus nec nunc vel libero.</a></li>
                        <li><a href="#">Phasellus nec nunc vel libero.</a></li>
                        <li><a href="#">Phasellus nec nunc vel libero.</a></li>
                        <li><a href="#">Phasellus nec nunc vel libero.</a></li>
                    </ul>
                </div>
                <div class="footbox">
                    <h2>Contact</h2>
                    <p>Phasellus nec nunc vel libero gravida pellentesque   vitae et sem. Nam bibendum.</p>
                    <p>Hotline: xx-xxxxxxxx<br />
                        Fax: xx-xxxxxxxx<br />
                        Email: <a href="mailto:support@domainname.com">Contact@domainname.com </a></p>
                </div>
            </div>
            <br class="clear" />
        </div>
        <div class="wrapper bgrow6">
            <div id="copyright">
                <p class="fl_left">Copyright &copy; 2010. Domain Name All Rights Reserved.</p>
                <p class="fl_right">Template by <a href="http://www.themasterwebs.com" target="_blank">The Master Webs </a></p>
                <br class="clear" />
            </div>
        </div>

    </body>
</html>