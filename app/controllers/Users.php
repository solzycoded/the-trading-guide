<?php
	namespace Controllers;

	use Models\User;
	
	// CRUD (CREATE, READ, UPDATE, DELETE)
	class Users{
		// CREATE
	    public static function create($email, $name, $website, $userrole_id){
	    	$created = User::firstOrCreate(['email' => $email, 'name' => $name, 'website' => $website, 'userrole_id' => $userrole_id]);

	    	return $created;
	    }

	    // READ
		public static function index(){
	        $get = User::all();

	        return $get;
	    }

	    public static function find_byemail($email){
	    	$found = User::where('email', 'like', $email)->first();

	        return $found;
	    }

	    public static function findadmin($user_id){
	        $admin = User::find($user_id)->admin;

	        return $admin;
	    }

	    // UPDATE
	    public static function update($id, $email, $name, $website, $userrole_id){
	        $_update = User::find($id);

	        $_update->email = $email;
	        $_update->name = $name;
	        $_update->website = $website;
	        $_update->userrole_id = $userrole_id;
	        
	        return $_update->save();
	    }

	    // DELETE
	    public static function destroy($id)
	    {
	        $_destroy = User::find($id);

	        return $_destroy->delete();
	    }
	}
?>