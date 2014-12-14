<?php 
include 'core/init.php';
include 'includes/overall/header.php';
$bookid =  $_GET['bid'];
$query = "select * from csc322.books where book_id =".$_GET['bid'];
$result = mysql_query($query) or die(mysql_error());
$book = mysql_fetch_array($result);

if( isset($_POST['inlineRadioOptions']) )
{
	echo $_POST['inlineRadioOptions'];
}
?>
  
  <!-- Content of page -->
  <div class="col-md-12 col-xs-12 ">
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
		<img src="<?php echo $book['book_cover']; ?>"  height = "150px" width = "150px">
		<br>
		Description: <?php echo $book['description']; ?>
	  </li>
	  <li class="list-group-item">
		Price: <?php echo $book['price']; ?>
		<p class="text-right">
		<button action="" method="" class="btn btn-sm btn-danger" type="submit">Add <span class="glyphicon glyphicon-shopping-cart"> </		span></button>
		<button action="" method="" class="btn btn-sm btn-primary" type="submit">Buy it</button>	  
		</p>		
	  </li>
	  <li class="list-group-item">
		Condition: <?php echo $book['book_condition']; ?>
	  </li>
	  <li class="list-group-item">
		Comments for $book_data['title'] from user:<br>
		// Loop through database, output $book_data['comment'].
		</li>
	  <li class="list-group-item">
		Comment:
		<textarea class="form-control" rows="3" placeholder="Free feel to leave your thought about this book."></textarea>
		<button class="btn btn-sm btn-default" type="submit">Submit </button>
	  </li>
    </div>
  </div>
  
<?php include 'includes/overall/footer.php';?>

