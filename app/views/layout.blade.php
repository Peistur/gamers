<html>
    <head>
        {{ HTML::style( asset('css/blkgallery_layout.css') ) }}

        {{ HTML::style( asset('css/blkgallery_navigation.css') ) }}
    </head>
    <body>
        <h1>Laravel Quickstart</h1>

        @yield('content')
    </body>
</html>