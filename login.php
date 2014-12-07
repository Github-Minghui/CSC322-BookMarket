<?php 
include 'core/init.php';

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
		if (strlen($password) > 32){
			$errors[]= 'Password is too long';
		}
		$login = login($username, $password);
		if ($login ===false){
			$errors[]='That username and password does not match!!';
		}else {
			$_SESSION['user_id'] = $login;
			header('location: index.php');
			exit();
		}
	}
} else{
	$errors[]='no errors received.'; 
}
include 'includes/overall/header.php';
if (empty($errors)===false){
?>
	<p>Redirect home page to <a href="index.php"> log in?</a> | <a href="register.php">Join Libro today?</a></p>
	<h2> We tried to log you in, but...</h2>
<?php
	echo output_errors($errors);
}
	include 'includes/overall/footer.php';
?>

