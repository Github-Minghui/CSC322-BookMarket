<div class="panel panel-warning"> 
  <div class="panel-heading">
	<span>Purchased History</span>
  </div>
  <li class="list-group-item">
	<div class="row">
		<p> Wrong content, but need to list purchase history</p>
		<?php
			$query = "select * from csc322.books where owner = ".$_SESSION['user_id'];

			$result = mysql_query($query) or die(mysql_error());
			
			// keeps getting the next row until there are no more to get
			while($row = mysql_fetch_array( $result )) {
			// Print out the contents of each row into a table
			echo '<div class="col-md-3"> <!--this is the size of the box of the image--> 
			<a href="bookpage.php/?bid='.$row['book_id'].'" class="thumbnail">
				<img src="';
			echo $row['book_cover'];
			echo '"  height = "150px" width = "150px"> <!--get image and size-->
					<span>';
			echo $row['title'];
			echo '</span><br><!--this is meant to type the title\'s name--> 
				<span class="text-muted">$';
			echo $row['price'];				
			echo'</span> <!-- this is for price etc.--> 
			</a>
				</div>';
			} 

		?>
	</div>                       
  </li>
</div> 