<form class="navbar-form  navbar-right" role="navigation">
	
	<?php 
		if (logged_in() === true){
			include 'includes/widgets/backup/loggedin.php';	
		}else{		}
	?>
</form> <!-- /.navbar-right-->
