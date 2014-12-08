<form class="navbar-form  navbar-right" role="navigation">	
	<?php 
		if (logged_in() === true){
			include 'includes/widgets/nav_loggedin.php';	
		}else{
			include 'includes/widgets/nav_log.php';
		}
	?>
</form> <!-- /.navbar-right-->
