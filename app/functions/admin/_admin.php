<?php
	// start up eloquent
	require $_SERVER['DOCUMENT_ROOT'] . '/project blog/start.php';
	
	// include the validation file that holds the class Validation
	include($_SERVER['DOCUMENT_ROOT'].'/project blog/app/functions/validation.php');

	Class _Admin {

		function __construct() {
			$this->start_session();
		}

		function start_session(){
			if (session_status() == PHP_SESSION_NONE) {
		    	session_start();
		    }
		}

		function gotopage($url){
			header("Location: ".$url);
		}

		function validate($inputtype, $value){
			// validate userinput
			$validation = new Validation($inputtype, $value);
			$value = $validation->validateinput();
		}

		function reportfailure($statusmessage){
			// set response, to be shown to the user after page failure
			$this->setresponse($statusmessage);

			$this->gotopage('/project blog/user/admin');
		}

		function setresponse($response){
			$_SESSION['projectblog']['status'] = $response;
		}

		function getresponse(){
			return isset($_SESSION['projectblog']['status']) ? $_SESSION['projectblog']['status'] : '';
		}
	}
?>