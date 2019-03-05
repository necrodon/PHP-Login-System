<?php 

	// vis der ikke den er tilladbt på andre sider kan den ikke loade
	if (!defined('__CONFIG__')) {
		exit('fuck you self');
	}

	//Sessions are always turned on
	if (!isset($_SESSION)) {
			session_start();
	}


	//allow errors
	error_reporting(-1);
	ini_set('display_errors','on');

	include_once "classes/DB.php";
	include_once "classes/Filter.php";
	include_once "functions.php";



	$con = DB::getConnection();

?>