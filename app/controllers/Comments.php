<?php
	namespace Controllers;

	use Models\Comment;
	
	// CRUD (CREATE, READ, UPDATE, DELETE)
	class Comments{
		// CREATE
	    public static function create($user_id, $post_id, $comment){
	    	$created = Comment::create(['user_id' => $user_id, 'post_id' => $post_id, 'comment' => $comment]);

	    	return $created;
	    }

	    // READ
		public static function index(){
	        $get = Comment::all();

	        return $get;
	    }

	    // UPDATE
	    public static function update($id, $user_id, $post_id, $comment){
	        $_update = Comment::find($id);

	        $_update->user_id = $user_id;
	        $_update->post_id = $post_id;
	        $_update->comment = $comment;
	        
	        return $_update->save();
	    }

	    // DELETE
	    public static function destroy($id)
	    {
	        $_destroy = Comment::find($id);

	        return $_destroy->delete();
	    }
	}
?>