<?php
	namespace Controllers;

	use Models\Post;
	
	// CRUD (CREATE, READ, UPDATE, DELETE)
	class Posts{
		// CREATE
	    public static function create($title, $pic, $content, $category_id){
	    	$created = Post::firstOrCreate(['title' => $title, 'pic' => $pic, 'content' => $content, 'category_id' => $category_id]);

	    	return $created;
	    }

	    // READ
		public static function index(){
	        $get = Post::all();

	        return $get;
	    }

	    // UPDATE
	    public static function update($id, $title, $pic, $content, $category_id){
	        $_update = Post::find($id);

	        $_update->title = $title;
	        $_update->pic = $pic;
	        $_update->content = $content;
	        $_update->category_id = $category_id;

	        return $_update->save();
	    }

	    // DELETE
	    public static function destroy($id)
	    {
	        $_destroy = Post::find($id);

	        return $_destroy->delete();
	    }
	}
?>