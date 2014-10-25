@extends('layout')

@section('content')

<!-- Left column -->
<div class="content-left">

    @if ( $subcollections )
    @foreach ( $subcollections as $subcollection )
    <div class="panel">
        <div class="title">
            <h2>{{ $subcollection->name }}</h2>
        </div>
        <div class="box">
            <div class="gallery">

                <ul>
                    @if ( $subcollection->videos )

                    @foreach ( $subcollection->videos as $video )

                    <li>
                        <div class="video-img">
                            <a href="{{ URL::action( 'VideoController@index', $video->id ) }}">
                                <img src="http://img.youtube.com/vi/{{ $video->youtubeId }}/0.jpg" alt="" width="330" height="242" />
                            </a>
                        </div>
                        <div class="name">{{ $video->title }}</div>

                        <div class="info">

                            <div class="description">{{ $video->description }}</div>
                            <div class="foot">
                                <div class="collection-link">
                                    @if ( !is_null( $video->collection ) )
                                    <a class="viewproject" href="{{ URL::action( 'CollectionController@index', $video->collection->name ) }}">
                                        {{ $video->subcollection->name }} &raquo;
                                    </a>
                                    @endif
                                </div>
                                <div class="game-logo">
                                    <a href="{{ URL::action( 'GalleryController@index', $video->game->name ) }}">
                                        {{ HTML::image("img/".$video->game->image, "Logo") }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    @endforeach
                    @endif
                </ul>

            </div>
        </div>
    </div>
    @endforeach
    @endif

</div>

<!-- Right column -->
<div class="content-right">

    @if ( $subcollections )
    <div class="panel">
        <div class="title">
            <h2>Subcollections</h2>
        </div>
        <div class="box">

            @foreach ( $subcollections as $subcollection )
            <ul>
                <li>
                    <a class="viewproject" href="{{ URL::action( 'CollectionController@subcollection', array( $subcollection->collection->name, $subcollection->name ) ) }}">
                        {{ $subcollection->name }}
                    </a>
                </li>
            </ul>
            @endforeach

        </div>
    </div>
    @endif
</div>

@stop