@extends('layout')

@section('content')

{{ $video->game->name }}

{{ Form::model( $video, array('route' => array('video.update', $video->id))) }}

<p>
    {{ Form::label('title', 'Título'); }}
    {{ Form::text('title'); }}

    {{ Form::label('description', 'Descripción'); }}
    {{ Form::textarea('description'); }}

    {{ Form::label('youtubeId', 'Id de youtube'); }}
    {{ Form::text('youtubeId'); }}

    {{ Form::label('game.name', 'Game'); }}
    {{ Form::text('game[name]'); }}
</p>

{{ Form::close() }}

@stop