<?php 
include 'core/init.php';
include 'includes/overall/header.php';
$bookid =  $_GET['bid'];
$query = "select * from csc322.books where book_id =".$_GET['bid'];
$result = mysql_query($query) or die(mysql_error());
$book = mysql_fetch_array($result);

if( isset($_POST['inlineRadioOptions']) )
{
	$query = "insert into csc322.ratings(book_id,rating,user_id) values(".$bookid.",".$_POST['inlineRadioOptions'].",".$book['owner'].");";
	$result = mysql_query($query);	
	echo $result;
	if($result===true){}
	else{echo mysql_error();};
}

$name = $user_data['first_name'];
$comment = $_POST['comment'];

if( isset($_POST['comment']) )
{
	$query = "insert into comments(book_id,comment,user_name) values(".$bookid.",'$comment','$name');";
	$result = mysql_query($query);	
	if($result===true){
		echo $result;
	}else{
	echo mysql_error();};
}
?>

<?php
if( isset($_POST['buy']) )
{
	$query = "update csc322.books set sold = 1 where book_id = ".$bookid;
	mysql_query($query);
?>
  <div class="col-md-9 col-sm-9 col-xs-12 ">
    <div class= "panel panel-default">
      <div class="panel-heading">
		<h1> Thank you for your purchase </h1>	
	  </div>
	  <li class="list-group-item">
		Order Transcation:
		<br>
		Book name: <?php echo $book['title']; ?>; 
		<br>
		Author: <?php echo $book['author']; ?>
		<br>
		Price: <?php echo $book['price']; ?> 
		<br>

	  </li>
	</div>
  </div>
<?php
}else{
?>
	
	<!--UPDATE books-->
	<!--Set sold = 1-->
	<!--WHERE--> 

  <!-- Content of page -->
  <div class="col-md-9 col-sm-9 col-xs-12 ">
    <div class= "panel panel-default">
      <div class="panel-heading">
       <h2><strong><em><?php echo $book['title']; ?></em></strong></h2>
		 <small>by <?php echo $book['author']; ?></small>
      </div>
	  <li class="list-group-item">
	  Rating: 
			<form action="" method="post"> 
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value=1> 1
				</label>
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value=2> 2
				</label>
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value=3> 3
				</label> 
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value=4> 4
				</label> 
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value=5> 5
				</label> 
				
				<button class="btn btn-sm btn-default pull-right" type="submit">Submit </button>
			</form>
	  </li>

	  <li class="list-group-item">
		<img src=" <?php echo '/CSC322-BookMarket/'.$book['book_cover']; ?>" height = "150px" width = "150px">
		<br>
		Description: <?php echo $book['description']; ?>
	  </li>
	  <li class="list-group-item">
		Price: <?php echo $book['price']; ?>
		
		<form action="" method ="post">
			<p class="text-right">
			<input type="hidden" name= "buy">
			<button class="btn btn-sm btn-primary" type="submit">Buy it</button>
			</p>
		</form>	  
		
	  </li>
	  <li class="list-group-item">
		Condition: <?php echo $book['book_condition']; ?>
	  </li>
    </div>
	<div class= "panel panel-default">
	  <div class="panel-heading">
	   <h5> User feedback for <strong><?php echo $book['title']; ?></strong></h5>
	  </div>
	  <li class="list-group-item">
		<form action="" method="post">
				Username:<strong><?php echo $user_data['first_name']?></strong>
				<input type="text" name="comment" class="form-control"  placeholder="Please leave some comments to this book.">
				<button type="submit" value="Log in" class="btn btn-default" > Submit Comment</button>
		</form>
	  </li>
	  
	  <li class="list-group-item">  
			<div class="comments-list">
				<ul class="comments-holder-ul">
					<?php 
						$getquery=mysql_query("SELECT * FROM comments ORDER BY comment_id DESC");
						while($rows=mysql_fetch_assoc($getquery)){
							$comment_id = $rows['comment_id'];
							$comment = $rows['comment'];
							//$delete = "<a href=\"delete_comment.php?id=" . $comment_id ."\">Delete</a>";
							echo '<table>'.'<tr>'.'<td>'.'<li class=\"comment-holder\" id=\"_'.$comment_id.'\"\>'.
									'<div class=\"comment-body\">'.
										'<h3 class=\"username-field">'.$name.'</h3>'.'<br/>'.
										'<div class=\"comment-text">'.$comment.'</div>'.'<br/>'.
									'</div>'.
								'</li>'.'</td>'.'</tr>'.'</table>';
						}
					?>
				</ul>
			</div>
		</li>
	</div>
  </div>
  <?php }?>
  <div class="col-md-3 col-sm-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 
<?php 
include 'includes/overall/footer.php';?>

