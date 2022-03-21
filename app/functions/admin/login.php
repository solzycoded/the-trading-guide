<?php 
	// start up eloquent
	// require $_SERVER['DOCUMENT_ROOT'] . '/project blog/start.php';
	require '_Admin.php';

	use Controllers\Users; 
	use Controllers\Userroles;
	use Controllers\Admins;

	class Login extends _Admin {
		public $email;
		public $pass;

		function __construct($email, $pass) {
			$this->email = $email;
			$this->set_email();

			$this->pass = $pass;
			$this->set_password();

			// start sesssion, if it's not already started
			$this->start_session();

			// reset SESSION(BLOG/STATUS), to be shown to the user after page failure
			$this->setresponse('');
		}

		// SET & GET FUNCTIONS
		function set_email(){
			// validate userinput
			$this->validate('email', $this->email);
		}

		function set_password(){
			// validate userinput
			$this->validate('string', $this->pass);
		}

		function get_email(){
			return $this->email;
		}

		function get_pass(){
			return $this->pass;
		}

		// OTHER FUNCTIONS
		function validateuser(){
			$email = $this->get_email(); // get & store email (user input)
			$pass = $this->get_pass(); // get & store password (user input)

			// check if user input (email & password are valid entries)
			if($email & $pass){
				// find user, by email
				$user = Users::find_byemail($email);

				// check if user is empty and if user input for email fits an admin
				if(!empty($user) && $email==$user->email){
					$admin = Users::findadmin($user->id); // retrieve the admin password for that users

					// check if the user input for password, matches the admin password for that user
					if($pass==$admin->password){
						$userrole = Userroles::find($user->userrole_id);

						// assign session values
						$_SESSION['projectblog']['role'] = $userrole->name;
						$_SESSION['projectblog']['email'] = $email;
						$_SESSION['projectblog']['password'] = $pass;

						$this->gotopage('/project blog/posts');
					}
					else{
						$this->reportfailure('Wrong Email or Password. Please try again.');
					}
				}
				else{
					$this->reportfailure('Wrong Email or Password. Please try again.');
				}
			}
			else{
				$this->reportfailure('Wrong Email or Password. Please try again.');
			}
		}
	}
?>