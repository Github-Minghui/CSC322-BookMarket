<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-9 col-sm-9" >
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3> Ready for a new book? Buy it today!</h3>
      </div>
  	  <div class="list-group-item">
	    <div class="row">			
			<?php
			$query = "select * from csc322.books where owner != ".$_SESSION['user_id'];

			$result = mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_array( $result )) {
			?>
			
			<div class="col-md-3"> 
				<a href="bookpage.php/?bid=<?php echo $row['book_id']?>" class="thumbnail">	
					<img src="<?php echo $row['book_cover']?>" height = "150px" width = "150px"> <!--get image and size-->
					<span><?php echo $row['title']?></span> <!--this is meant to type the author\'s name--> 
					<br>
					<span class="text-muted">$<?php echo $row['price']?></span> <!-- this is for genre etc.--> 
					</a>
			</div>
			<?php	
				} 
			?>
        </div>   
	  </div>
    </div>
	  <?php include 'includes/widgets/topRating.php';?>
  </div> 
  <div class="col-md-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 

<?php include 'includes/overall/footer.php';?>
