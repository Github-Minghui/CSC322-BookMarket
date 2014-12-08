<?php 
include 'core/init.php';
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-9 col-xs-9 ">
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3>Welcome to Libro!</h3>
      </div>
    </div>
	<?php include 'includes/widgets/recommendation.php';?>
    <?php include 'includes/widgets/topRating.php';?> 
  </div>
  
  <div class="col-md-3 col-xs-3 ">
	<?php include 'includes/aside.php';?>
  </div><!-- .col-sm-4 -->

<?php include 'includes/overall/footer.php';?>