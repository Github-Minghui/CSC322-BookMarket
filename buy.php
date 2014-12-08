<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-9 col-xs-9">
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3> Ready for a new book? Buy it today!</h3>
      </div>
	  <li class="list-group-item">
		Book1
	  </li>
	  <li class="list-group-item">
		Book2
	  </li>
	  <li class="list-group-item">
		Book3
	  </li>
    </div>
	<?php include 'includes/widgets/topRating.php';?>
	<?php include 'includes/widgets/recommendation.php';?>

  </div>  
  <div class="col-md-3 col-xs-3 ">
	<?php include 'includes/aside.php';?>
  </div><!-- .col-sm-4 -->

<?php include 'includes/overall/footer.php';?>