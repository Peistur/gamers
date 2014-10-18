@extends('layout')

@section('content')

<h1>{{ $video->title }}</h1>

<div>
    <iframe width="980" height="550" src="//www.youtube.com/embed/{{ $video->youtubeId }}" frameborder="0" allowfullscreen></iframe>
</div>

<div id="wrapper" class="wrapper bgrow4">
    <div id="container">{{ $video->description }}<br class="clear" /></div>
</div>

@stop