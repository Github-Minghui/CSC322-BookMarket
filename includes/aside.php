<div class="panel panel-primary">    <!-- Start of Recommandations -->
	<?php 
		if (logged_in() === true){
			echo 'Logged in';
		}else{
			include 'includes/widgets/login.php';	
		}
	?>
</div>
