<?php
	namespace Controllers;

	use Models\Categroy;
	
	// CRUD (CREATE, READ, UPDATE, DELETE)
	class Categories{
		// CREATE
	    public static function create($category){
	    	$created = Categroy::firstOrCreate(['category' => $category]);

	    	return $created;
	    }

	    // READ
		public static function index(){
	        $get = Categroy::all();

	        return $get;
	    }

	    // UPDATE
	    public static function update($id, $category){
	        $_update = Categroy::find($id);

	        $_update->category = $category;

	        return $_update->save();
	    }

	    // DELETE
	    public static function destroy($id)
	    {
	        $_destroy = Categroy::find($id);

	        return $_destroy->delete();
	    }
	}
?>