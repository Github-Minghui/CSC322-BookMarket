<?php 
include 'core/init.php';
include 'includes/overall/header.php';
?>
<<<<<<< HEAD
  <div class="col-md-12 col-sm-12">
=======
  <div class="col-md-6 col-xs-12">
>>>>>>> 8fad85e3205d92408f2d76969fdd13f31e95dd5a
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3> Log in Libro</h3>
      </div>
	  <form class="form-signin" action="login.php" method="post"> <!-- form-->
	  <li class="list-group-item">
		Username(or Email):
		<input type="text" name ="username" class="form-control"  placeholder="username/email">
	  </li>
	  <li class="list-group-item">
		Password:<input type="password" name="password" class="form-control"  placeholder="Password">
	  </li>  
	  <li class="list-group-item">
		<button type="submit" value="Log in" class="btn btn-default" > Login</button>
		<!-- <button type="submit" class="btn btn-default"> Join Libro!</button> -->
	  </li>
	  <li class="list-group-item">
		|<a href="register.php"> Join Library today!</a><br>
<<<<<<< HEAD
		| <a href= "changepassword.php"> Change Password</a><br>
=======
		|<a href= "changepassword.php"> Change Password</a><br>
>>>>>>> 8fad85e3205d92408f2d76969fdd13f31e95dd5a
	  </li>
	</div>
  </div>	  
<?php include 'includes/overall/footer.php';?>