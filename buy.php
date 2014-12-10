<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-9 col-sm-9" >
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3> Ready for a new book? Buy it today! (<-TODO)</h3>
      </div>
  	  <li class="list-group-item">
        <p>
          |<a href="">Science-Fiction</a>
          |<a href="">Non-Fiction</a>
          |<a href="">Romantic</a>
          |<a href="">Adventure</a> 
        </p>
  	  </li>
      <br>
    </div>
	  <?php include 'includes/widgets/topRating.php';?>
  </div> 
  <div class="col-md-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 

<?php include 'includes/overall/footer.php';?>