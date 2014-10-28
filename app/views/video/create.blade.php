

{{ Form::open( array('route' => 'video.insert', 'method' => 'post') ) }}

<p>
    {{ Form::label('title', 'Título'); }}
    {{ Form::text('title'); }}
</p>
<p>
    {{ Form::label('description', 'Descripción'); }}
    {{ Form::textarea('description'); }}
</p>
<p>
    {{ Form::label('youtubeId', 'Id de youtube'); }}
    {{ Form::text('youtubeId'); }}
</p>
<p>
    {{ Form::label('game', 'Game'); }}
    {{ Form::select( 'game_id', $games ) }}
</p>
<p>
    {{ Form::label('collection', 'Collection'); }}
    {{ Form::select( 'collection_id', $collections ) }}
</p>
<p>
    {{ Form::label('subcollection', 'Subcollection'); }}
    {{ Form::select( 'subcollection_id', $subcollections ) }}
</p>
<p>
    {{ Form::label('language', 'Language'); }}
    {{ Form::select( 'language_id', $languages ) }}
</p>
<p>
    {{ Form::submit('Create!'); }}
</p>


{{ Form::close() }}
