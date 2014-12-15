 <?php
if (isset($_SESSION['user_id'])){
		$query = "select * from ratings where user_id != ".$_SESSION['user_id']." ORDER BY rating DESC LIMIT 4;";
}else{
		$query = "select * from ratings ORDER BY rating DESC LIMIT 4;";
}
$result = mysql_query($query) or die(mysql_error());
echo $result;
?>

<div class="panel panel-warning">    <!-- Start of Recommandations -->
  <div class="panel-heading">
	<span>Recommandations</span>
  </div>
  <li class="list-group-item">
	<div class="row">			
		<?php
			while($row = mysql_fetch_array($result)) {
			// Getting book ascocited with rating
			$query = "select * from books where book_id =".$row['book_id'];
			$r = mysql_query($query) or die(mysql_error());
			$book = mysql_fetch_array($r);
		?>
		
		<div class="col-md-3"> 
			<a href="bookpage.php/?bid='<?php echo $row['book_id']?>'" class="thumbnail">	
				<img src="<?php echo $book['book_cover']?>" height = "150px" width = "150px"> <!--get image and size-->
				<span><?php echo $book['title']?></span> <!--this is meant to type the author\'s name--> 
				<br>
				<span class="text-muted">$<?php echo $book['price']?></span> <!-- this is for genre etc.--> 
				</a>
		</div>
		<?php	
			} 
		?>
	</div>               
  </li>
</div>    <!-- End of Recommandations -->
