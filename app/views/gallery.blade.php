@extends('layout')

@section('content')

<!-- Left column -->
<div class="content-left">

    <div class="panel">
        <div class="title">
            <h2>Lorem Ipsum</h2>
        </div>
        <div class="box">
            <div class="gallery">

                <ul>
                    @if ( $videos )
                    @foreach ( $videos as $video )

                    <li>
                        <div class="name">{{ $video->title }}</div>
                        <div class="video-img">
                            <a href="{{ URL::action( 'VideoController@index', $video->id ) }}">
                                <img src="http://img.youtube.com/vi/{{ $video->youtubeId }}/0.jpg" alt="" width="330" height="242" />
                            </a>
                        </div>

                        <div class="info">

                            <div class="description">{{ $video->description }}</div>
                            <div class="collection-link">
                                @if ( !is_null( $video->collection ) )
                                <a class="viewproject" href="{{ URL::action( 'VideoController@index', $video->collection->name ) }}">
                                    {{ $video->collection->name }} &raquo;
                                </a>
                                @endif
                            </div>
                            <div class="game-logo">
                                <a href="{{ URL::action( 'GalleryController@index', $video->game->name ) }}">
                                    {{ HTML::image("img/".$video->game->image, "Logo") }}
                                </a>
                            </div>
                        </div>
                    </li>

                    @endforeach
                    @endif
                </ul>

            </div>
        </div>
    </div>

    <div class="panel">
        <div class="title">
            <h2>Lorem Ipsum</h2>
        </div>
        <div class="box">
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
        </div>
    </div>

</div>

<!-- Right column -->
<div class="content-right">

    <div class="panel">
        <div class="title">
            <h2>Lorem Ipsum</h2>
        </div>
        <div class="box">
            <p>qewqeasdasd</p>
            <p>qewqeasdasd</p>
        </div>
    </div>
</div>

@stop