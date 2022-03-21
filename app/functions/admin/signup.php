<?php 
	// start up eloquent
	require $_SERVER['DOCUMENT_ROOT'] . '/project blog/start.php';

	use Controllers\Users;
	use Controllers\Userroles;
	use Controllers\Admins;

	class Signup extends _Admin {
		public $email;
		public $pass;

		function __construct($email, $pass) {
			$this->email = $email;
			$this->pass = $pass;
		}

		function createuser(){
			$user = Users::create($this->email, 'admin', 'website.com', Userroles::find_byrole('admin')->id);

			$user_id = $user->id;

			// check if user was successfully created
			if(!empty($user_id)){
				// create admin
				$admin = Admins::create($this->pass, $user_id);
			
				echo !empty($admin->id) ? 'admin created!':'unsuccessful';
			}
			else
				echo 'unsuccessful';
		}
	}

	// $signup = new Signup('solzyfrenzy1@gmail.com', 'passworded');

	// $signup->createuser();
?>