@extends('layout')

@section('content')

{{ Form::model( $user, array('route' => array('user.update', $user->id))) }}

{{ Form::close }}

@stop