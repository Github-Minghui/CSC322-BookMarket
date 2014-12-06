<?php 
include 'core/init.php';
include 'includes/overall/header.php';
?>
    <!-- Content of page -->
<div class= "row">
  <div class="col-md-12">
    <div class= "panel panel-default">
      <div class="panel-heading">
       <h3>Welcome to Libro!</h3>
      </div>
    </div>
  </div>
  <div class="col-md-8 col-xs-8">   
    <?php include 'includes/widgets/recommendation.php';?>
  </div>  <!-- ./.col-md-8 -->


  <div class="col-md-4 col-xs-4 ">
    <?php include 'includes/aside.php';?>
  </div><!-- .col-sm-4 -->

  <div class="col-md-8 col-xs-8">   
    <?php include 'includes/widgets/topRating.php';?>    
  </div>
</div>
<?php include 'includes/overall/footer.php';?>