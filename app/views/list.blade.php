@extends('layout')

@section('content')

@if ( isset( $collections ) )
<div class="buble_container">
    @foreach ( $collections as $collection )
    <div class="bubble" style="position: relative; float:left">
        <div class="rectangle">
            <h2><a href="{{ URL::action( 'ListController@index', $collection->id ) }}">{{ $collection->name }}</a></h2>
        </div>
        <div class="triangle-l"></div>
        <div class="triangle-r"></div>
        <div class="info">
            @if ( isset( $collection->subcollections ) )
                @foreach ( $collection->subcollections as $subcollecion )
                <li>
                    <a href="{{ URL::action( 'ListController@index', $subcollecion->id ) }}">{{ $subcollecion->name }}</a>
                </li>
                @endforeach
            @endif

           <!-- <h2>I Have Used Only CSS, friends!</h2>
            <p>
                For this tutorial I have used some new properties of the CSS3. You can realize a nice 3D effect using only CSS, it's really fantastic.<br />It doesn't work with IE!
            </p>
            <p>
                <a href="http://www.pvmgarage.com/en/2010/01/10/">Go to the tutorial!</a>
            </p>-->
        </div>
    </div>
    @endforeach
</div>
@endif




@if ( isset( $collections ) )
<ul>
    @foreach ( $collections as $collection )
    <li>
        <a href="{{ URL::action( 'ListController@index', $collection->id ) }}">{{ $collection->name }}</a>
        @if ( isset( $collection->subcollections ) )
        <ul>
            @foreach ( $collection->subcollections as $subcollecion )
                <li>
                    <a href="{{ URL::action( 'ListController@index', $subcollecion->id ) }}">{{ $subcollecion->name }}</a>
                </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
</ul>
@endif






<table cellspacing='0'>
    <thead>
    <tr>
        <th></th>
        <th>test1</th>
        <th>test2</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <td><a style="text-transform: capitalize"
                   href="#">Modificar
                </a></td>

                <td>caca</td>
                <td>caca2</td>

        </tr>

    </tbody>
</table>

@stop