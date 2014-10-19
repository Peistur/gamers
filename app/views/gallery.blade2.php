@extends('layout')

@section('content')


        <h1>Lista de videos</h1>
        <div id="gallery">
            <ul>
                @if ( $videos )
                @foreach ( $videos as $video )

                <li>
                    <a href="{{ URL::action( 'VideoController@index', $video->id ) }}"><img src="http://img.youtube.com/vi/{{ $video->youtubeId }}/0.jpg" alt="" width="300" height="220" /></a>
                    <div class="box1">
                        <div class="title">{{ $video->title }}</div>
                        <div class="viewvideo">
                            @if ( !is_null( $video->collection ) )
                                <a class="viewproject" href="{{ URL::action( 'VideoController@index', $video->collection->name ) }}">
                                    {{ $video->collection->name }} &raquo;
                                </a>
                            @endif
                        </div>
                        <div class="logo">
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


        <div class="clear"></div>
        <?php echo $videos->links(); ?>
        <!--<div class="pagination">
            <ul>
                <li><a href="#">&laquo; Previous</a></li>
                <li><a href="#">1</a></li>
                <li class="current">2</li>
                <li><a href="#">3</a></li>
                <li class="divider">&hellip;</li>
                <li><a href="#">18</a></li>
                <li><a href="#">19</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#">Next &raquo;</a></li>
            </ul>
        </div>-->


@stop