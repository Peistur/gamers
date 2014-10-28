@extends('layout')

@section('content')

<!-- Left column -->
<div class="content-left">

    @if ( $collections )
    @foreach ( $collections as $collection )
    <div class="panel">
        <div class="title">
            <h2>{{ $collection->name }}</h2>
        </div>
        <div class="right-logo-{{ $game->alias }}">
            <a href="{{ URL::action( 'GameController@index', $game->name ) }}">
                {{ HTML::image("img/".$game->image, "Logo") }}
            </a>
        </div>
        <div class="box">
            <div class="gallery">

                <ul>
                    @if ( $collection->videos )

                    @foreach ( $collection->videos as $video )

                    <li>
                        <div class="video-img">
                            <a class="image-video" href="{{ URL::action( 'video.show', $video->id ) }}">
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

    @if ( $collections )
    <div class="panel">
        <div class="title">
            <h2>Collections</h2>
        </div>
        <div class="box">

            @foreach ( $collections as $collection )
                <ul>
                    <li>
                        <a class="viewproject" href="{{ URL::action( 'CollectionController@index', $collection->name ) }}">
                            {{ $collection->name }}
                        </a>
                    </li>
                    @if ( $collection->subcollections )
                        <ul>
                        @foreach ( $collection->subcollections as $subcollection )
                            <li>
                                <a class="viewproject" href="{{ URL::action( 'CollectionController@subcollection', array( $collection->name, $subcollection->name ) ) }}">
                                    {{ $subcollection->name }}
                                </a>
                            </li>


                        @endforeach
                        </ul>
                    @endif
                </ul>
            @endforeach

        </div>
    </div>
    @endif
</div>

@stop