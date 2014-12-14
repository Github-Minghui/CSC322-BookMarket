<?php

	$username = "csc322";
	$password = "123";
	$hostname = "localhost";
	$db = mysql_connect($hostname,$username,$password) or die("There was an error.");
	if (isset($_SESSION['user_id'])){
			$query = "select * from csc322.ratings where user_id != ".$_SESSION['user_id']." ORDER BY rating DESC LIMIT 6;";
	}else{
			$query = "select * from csc322.ratings ORDER BY rating DESC LIMIT 6;";
	}
	$result = mysql_query($query) or die(mysql_error());

?>

	  <div class="panel panel-danger">    <!-- Star of Top 6 -->    
      <div class="panel-heading">
        <span> Top 6 Rating</span>
      </div>
	  <li class="list-group-item">
		<div class="table-responsive row">
            <table class="table">
              <thead>  
                <tr>
                    <th class="col-md-1">Rating</th>
                    <th class="col-md-2">Title</th>
                    <th class="col-md-1">Author</th>
                    <th class="col-md-1">Price($)</th>
                    <th class="col-md-7">Condition</th>
                </tr>
              </thead>
              <tbody>
				<?php 
					while($row = mysql_fetch_array($result)) {
					// Getting book ascocited with rating
					$query = "select * from csc322.books where book_id =".$row['book_id'];
					$r = mysql_query($query) or die(mysql_error());
					$book = mysql_fetch_array($r);
					echo '<tr>';
					echo '<td>';
					echo $row['rating'];
					echo '</td>';
					echo '<td width="100px"><span> <a href="/CSC322-BookMarket/bookpage.php/?bid=';
					echo $row['book_id'];
					echo '">';
					echo $book['title'];
					echo '</a></span></td>';
					echo '<td>';
					echo $book['author'];
					echo '</td>';
					echo '<td>';
					echo $book['price'];
					echo '</td>';
					echo '<td>';
					echo $book['book_condition'];
					echo '</td>';
					}
				?>
              </tbody>
            </table>	   
		</div>
      </li>
    </div>    <!-- End of top 6 -->
