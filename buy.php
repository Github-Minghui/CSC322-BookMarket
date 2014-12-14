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
	    <div class="row">
<?php
		$query = mysql_query("select * from books");
		while ($row = mysql_fetch_array($query) )
		{
?>
			<div class="col-md-3 col-sm-3"> <!--this is the size of the box of the image--> 
				<a href="bookpage.php" class="thumbnail">
					<img src="<?php echo $row['book_cover'];?>"  height = "150px" width = "150px"> <!--get image and size-->
						<span><?php echo $row['author'];?></span><br><!--this is meant to type the author's name--> 
					<span class="text-muted"><?php echo $row['genre'];?></span> <!-- this is for genre etc.--> 
				</a>
			</div>
<?php
		}
?>
        </div>   
	</li>

      <br>
    </div>
	  <?php include 'includes/widgets/topRating.php';?>
  </div> 
  <div class="col-md-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 

<?php include 'includes/overall/footer.php';?>