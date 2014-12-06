<?php 
include 'core/init.php';
include 'includes/overall/header.php';

if(empty($_POST) === false){
	$username =$_POST['username'];
	$password =$_POST['password'];		
	
	if (empty($username) === true || empty($password)===true){
		$errors[] = 'You need to enter a username and password';
	}else if (user_exists($username) === false) {
		$errors[] ='We can\'t find the username. Have you register?';
	} else if (user_active($username) === false) {
		$errors[] ='Have you active your account?';	
	}else{
		$login = login($username, $password);
		if ($login ===false){
			$errors[]='That username and password does not match!!';
		}else {
			$_SESSION['user_id'] = $login;
			header('location: index.php');
			exit();
		}
	}
	
	print_r($errors);

}

include 'includes/overall/footer.php';

?>