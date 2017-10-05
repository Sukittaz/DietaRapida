<?php
class langController extends controller {

    public function index() {}

    public function set($lang) {
    	parent::__construct();
    	
    	$_SESSION['lang'] = $lang;
    	header("Location: ".BASE);
    }
}