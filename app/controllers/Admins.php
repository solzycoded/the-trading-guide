<?php
	namespace Controllers;

	use Models\Admin;
	
	// CRUD (CREATE, READ, UPDATE, DELETE)
	class Admins{
		// CREATE
	    public static function create($password, $user_id){
	    	$created = Admin::firstOrCreate(['password' => $password, 'user_id' => $user_id]);

	    	return $created;
	    }

	    // READ
		public static function index(){
	        $get = Admin::all();

	        return $get;
	    }

	    // UPDATE
	    public static function update($id, $password, $user_id){
	        $_update = Admin::find($id);

	        $_update->password = $password;
	        $_update->user_id = $user_id;

	        return $_update->save();
	    }

	    // DELETE
	    public static function destroy($id)
	    {
	        $_destroy = Admin::find($id);

	        return $_destroy->delete();
	    }
	}
?>