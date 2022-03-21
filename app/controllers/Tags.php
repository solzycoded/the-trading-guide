<?php
	namespace Controllers;

	use Models\Tag;
	
	// CRUD (CREATE, READ, UPDATE, DELETE)
	class Tags{
		// CREATE
	    public static function create($tag){
	    	$created = Tag::firstOrCreate(['tag' => $tag]);

	    	return $created;
	    }

	    // READ
		public static function index(){
	        $get = Tag::all();

	        return $get;
	    }

	    // UPDATE
	    public static function update($id, $tag){
	        $_update = Tag::find($id);

	        $_update->tag = $tag;

	        return $_update->save();
	    }

	    // DELETE
	    public static function destroy($id)
	    {
	        $_destroy = Tag::find($id);

	        return $_destroy->delete();
	    }
	}
?>