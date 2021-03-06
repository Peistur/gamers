<?php

class CollectionController extends SharedController {

    public function index( $collectionName = null )
    {
        $collection = Collection::where( 'name', '=', $collectionName )->first();

        $this->data['game'] = Game::find( $collection->game_id );

        if( $collection )
        {
            $this->data['subcollections'] = $this->_getSubcollections( $collection->id );
        }
        else
        {
            Redirect::to('home');
        }

        return View::make( 'collection', $this->data );
    }

    public function subcollection( $collectionName = null, $subcollectionName = null )
    {
        $collection = Collection::whereName( $collectionName )->first();

        $this->data['game'] = Game::find( $collection->game_id );

        $subcollection = Subcollection::with(
            [
                'collection'
            ]
        )->whereName( $subcollectionName )->whereCollectionId( $collection->id )->first();

        if ( $subcollection->collection->name == $collectionName )
        {
            $this->data['videos'] = Video::whereSubcollection_id( $subcollection->id )->get();

            $this->data['subcollection'] = $subcollection;

            $this->data['subcollections'] = $this->_getSubcollections( $subcollection->collection->id );
        }

        return View::make( 'subcollection', $this->data );
    }

    private function _getSubcollections( $collectionId )
    {
        return Subcollection::with(
            [
                'videos' => function( $video )
                    {
                        $video->orderBy('created_at', 'desc');
                    },
                'collection'
            ]
        )->where( 'collection_id', '=', $collectionId )->get();
    }

}
