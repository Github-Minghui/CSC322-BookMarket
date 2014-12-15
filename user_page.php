<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-9 col-sm-9" >
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3><?php echo $user_data['first_name'];?>'s page </h3>
      </div>
    </div>
	  <?php include 'includes/widgets/boughtBook.php';?>	
	  <?php include 'includes/widgets/bookInventory.php';?>
  </div> 
  <div class="col-md-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 

<?php include 'includes/overall/footer.php';?>
