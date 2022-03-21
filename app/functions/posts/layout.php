<?php
	// start up eloquent
    include('pages.php');

	Class Layout {
		public $pages;

		function __construct() {
			$this->pages = new Pages();
		}

		function displaypage($page, $content){
			$this->pages->displaypage($page, $content);
		}
	}
?>