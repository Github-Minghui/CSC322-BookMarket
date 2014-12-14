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
  	  <div class="list-group-item">
	    <div class="row">
			<?php
				$username = "csc322";
				$password = "123";
				$hostname = "localhost";
				$db = mysql_connect($hostname,$username,$password) or die("There was an error.");

				$query = "select * from csc322.books where owner != ".$_SESSION['user_id'];

				$result = mysql_query($query) or die(mysql_error());
				
				while($row = mysql_fetch_array( $result )) {
				echo '<div class="col-md-3"> <!--this is the size of the box of the image--> 
				<a href="bookpage.php/?bid='.$row['book_id'].'" class="thumbnail">
					<img src="';
				echo $row['book_cover'];
				echo '"  height = "150px" width = "150px"> <!--get image and size-->
						<span>';
				echo $row['author'];
				echo '</span><br><!--this is meant to type the author\'s name--> 
					<span class="text-muted">';
				echo $row['genre'];				
				echo'</span> <!-- this is for genre etc.--> 
				</a>
					</div>';
				} 

			?>

        </div>   
	  </div>

      <br>
    </div>
	  <?php include 'includes/widgets/topRating.php';?>
  </div> 
  <div class="col-md-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 

<?php include 'includes/overall/footer.php';?>
