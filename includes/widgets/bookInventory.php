    <div class="panel panel-warning">    <!-- Start of Recommandations -->
      <div class="panel-heading">
        <span>Your Books</span>
      </div>
	  <li class="list-group-item">
        <div class="row">
			<?php
				#connect to database is included in header file, so do not write redundant code here.
				$query = mysql_query("select * from books") or die(mysql_error());
				
				while($row = mysql_fetch_array( $query )) {

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
				//echo "</td><td>"; 
				//echo $row['author'];
				//echo "</td></tr>"; 
				} 

				//echo "</table>";

			/*<div class="col-md-3"> <!--this is the size of the box of the image--> 
				<a href="bookpage.php" class="thumbnail">
					<img src="image/rec_book1.png"  height = "150px" width = "150px"> <!--get image and size-->
						<span>J.K. Rowling</span><br><!--this is meant to type the author's name--> 
					<span class="text-muted">Fantasy Fiction</span> <!-- this is for genre etc.--> 
				</a>
			</div>
			<div class="col-md-3"> <!--this is the size of the box of the image--> 
				<a href="bookpage.php" class="thumbnail">
					<img src="image/rec_book2.png"  height = "150px" width = "150px"> <!--get image and size-->
						<span>J.K. Rowling</span><br><!--this is meant to type the author's name--> 
					<span class="text-muted">Fantasy Fiction</span> <!-- this is for genre etc.--> 
				</a>
			</div>
			<div class="col-md-3"> <!--this is the size of the box of the image--> 
				<a href="bookpage.php" class="thumbnail">
					<img src="image/rec_book3.png"  height = "150px" width = "150px"> <!--get image and size-->
						<span>J.K. Rowling</span><br><!--this is meant to type the author's name--> 
					<span class="text-muted">Fantasy Fiction</span> <!-- this is for genre etc.--> 
				</a>
			</div>
			<div class="col-md-3"> <!--this is the size of the box of the image--> 
				<a href="bookpage.php" class="thumbnail">
					<img src="image/rec_book4.png"  height = "150px" width = "150px"> <!--get image and size-->
						<span>J.K. Rowling</span><br><!--this is meant to type the author's name--> 
					<span class="text-muted">Fantasy Fiction</span> <!-- this is for genre etc.--> 
				</a>
			</div>*/
			?>
        </div>                       
      </li>
    </div>    <!-- End of Recommandations -->
