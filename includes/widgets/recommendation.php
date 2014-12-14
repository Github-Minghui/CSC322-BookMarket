    <div class="panel panel-warning">    <!-- Start of Recommandations -->
      <div class="panel-heading">
        <span>Your Books</span>
      </div>
	  <li class="list-group-item">
        <div class="row">
			<?php

			/*// Make a MySQL Connection
			mysql_connect("localhost", "admin", "1admin") or die(mysql_error());
			mysql_select_db("test") or die(mysql_error());

			// Get all the data from the "example" table
			$result = mysql_query("SELECT * FROM example") 
			or die(mysql_error());  

			echo "<table border='1'>";
			echo "<tr> <th>Name</th> <th>Age</th> </tr>";
			// keeps getting the next row until there are no more to get
			while($row = mysql_fetch_array( $result )) {
			// Print out the contents of each row into a table
				echo "<tr><td>"; 
				echo $row['name'];
				echo "</td><td>"; 
				echo $row['age'];
				echo "</td></tr>"; 
			} 

			echo "</table>";
			*/

				$username = "csc322";
				$password = "123";
				$hostname = "localhost";
				$db = mysql_connect($hostname,$username,$password) or die("There was an error.");

				$query = "select * from csc322.books";

				$result = mysql_query($query) or die(mysql_error());
				
				//echo "<table border='1'>";
				//echo "<tr> <th>title</th> <th>author</th> </tr>";
				// keeps getting the next row until there are no more to get
				while($row = mysql_fetch_array( $result )) {
				// Print out the contents of each row into a table
				//echo "<tr><td>"; 
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
