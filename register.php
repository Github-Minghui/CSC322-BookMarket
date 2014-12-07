<?php 
include 'core/init.php';
include 'includes/overall/header.php';

if (empty($_POST) ===false){
	$required_fields = array('username', 'password','password_again','first_name','email');
	foreach($_POST as $key => $value){
		if (empty($value) && in_array($value, $_required_fields) === true){
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}
	
	if (empty($errors) === true){
		if (user_exists($_POST['username'])===true){
			$errors[]='Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
		}
		if (preg_match("/\\s/", $_POST['username']) == true){
			$errors[] = "username must not conatin any space.";
		}
		if (strlen($_POST['password'])<6){
			$errors[]='password must at least 6 characters';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] ='Your passwords do not match';
		}
	}
}
print_r($errors);
?>
<div class="row">
	<div class= "panel panel-info col-md-12">
	  <div class="panel-heading">
	   <h3>Register</h3>
	  </div>
	</div>
  <br>	
	<form action="" method="post">
	  <div class="col-md-5 col-xs-5">   
		<input type="text" name="username" id="inputfName" class="form-control" placeholder="*username" required>	
		<input type="password" name ="password" id="inputPassword" class="form-control" placeholder="*password" required>	
		<input type="password" name ="password_again" id="inputPassword" class="form-control" placeholder="*password again" required>	
		<input type="text" name ="first_name" id="inputfName" class="form-control" placeholder="*First Name" required>
		<input type="text" name ="last_name" id="inputlName" class="form-control" placeholder="*Last Name" required>
		<input type="email" name ="email" id="inputEmail" class="form-control" placeholder="*Email address" required autofocus>
		<br>	
		<!--Button for Register a new account -->
		<button type="submit" value="register" class="btn btn-lg btn-info"  >
			Register as a New Member
		</button>
	  </div>
	  <div class="col-md-7 col-xs-7">   
		<?php #include 'includes/widgets/securityQ.php';?>
	  </div>
	</form>
 </div>
<?php include 'includes/overall/footer.php';?>