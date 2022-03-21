<?php
	// start up eloquent
	require $_SERVER['DOCUMENT_ROOT'] . '/project blog/start.php';
	// include the validation file that holds the class Validation
    include($_SERVER['DOCUMENT_ROOT'] . '/project blog/parts/header.php');
    // include($_SERVER['DOCUMENT_ROOT'] . '/project blog/parts/page_left.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/project blog/parts/page_right.php');
    include($_SERVER['DOCUMENT_ROOT'] . '/project blog/parts/footer.php');

	Class _Posts {

		function __construct() {
			
		}
	}
?>