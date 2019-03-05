 <?php 
// Allow the config
define('__CONFIG__', true);

require_once "../inc/config.php";



	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//always return json format
		header('Content-Type: application/json');

			$return = [];

			$email = Filter::String($_POST['email']);
			$password = $_POST['password'];


			$findUser = $con->prepare("SELECT user_id,password FROM users WHERE email = LOWER(:email) LIMIT 1");
			$findUser->bindParam(':email',$email,PDO::PARAM_STR);
			$findUser->execute();


			if ($findUser->rowCount() == 1) {
				//user exist
				$User = $findUser->fetch(PDO::FETCH_ASSOC);

				$user_id = (int)$User['user_id'];
				$hash = $User['password'];

				if(password_verify($password, $hash)) {
					// User is signed in
					$return['redirect'] = 'php_login_course/dashboard.php';

					$_SESSION['user_id'] = $user_id;
				} else {
					// Invalid user email/password combo
					$return['error'] = "Invalid user email/password combo";
				}


			}else{
				//create a new account
				$return['error'] = "You do not have an account. <a href='register.php'> create one now</a>";

			}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	}else{
		exit('Invalid url');
	}





 ?>