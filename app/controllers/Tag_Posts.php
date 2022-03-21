<?php
	namespace Controllers;

	use Models\Tag_Post;
	
	// CRUD (CREATE, READ, UPDATE, DELETE)
	class Tag_Posts{
		// CREATE
	    public static function create($tag_id, $post_id){
	    	$created = Tag_Post::create(['tag_id' => $tag_id, 'post_id' => $post_id]);

	    	return $created;
	    }

	    // READ
		public static function index(){
	        $get = Tag_Post::all();

	        return $get;
	    }

	    // UPDATE
	    public static function update($id, $tag_id, $post_id){
	        $_update = Tag_Post::find($id);

	        $_update->tag_id = $tag_id;
	        $_update->post_id = $post_id;

	        return $_update->save();
	    }

	    // DELETE
	    public static function destroy($id)
	    {
	        $_destroy = Tag_Post::find($id);

	        return $_destroy->delete();
	    }
	}
?>