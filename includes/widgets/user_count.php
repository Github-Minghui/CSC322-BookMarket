
<div class="panel-heading">
	<h7>Users</h7>
</div>
<div class="panel-body">
	<?php
	$user_count = user_count();
	$suffix =($user_count != 1) ? 's' : '';
	?>
	We current have <?php echo user_count();?> registered user<?php echo $suffix;?>.
</div>