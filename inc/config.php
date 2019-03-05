<?php 

	// vis der ikke den er tilladbt på andre sider kan den ikke loade
	if (!defined('__CONFIG__')) {
		exit('fuck you self');
	}

	

	include_once "classes/DB.php";
	include_once "classes/Filter.php";



	$con = DB::getConnection();

?>