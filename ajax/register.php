 <?php 
// Allow the config
define('__CONFIG__', true);

require_once "../inc/config.php";



	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//always return json format
		header('Content-Type: application/json');

			$return = [];

			$return['redirect'] = '/dashboard.php';
			$return['name'] = "jonas svendsen";


		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	}else{
		exit('test');
	}





 ?>