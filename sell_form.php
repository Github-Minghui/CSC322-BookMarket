<?php 
include 'core/init.php';
include 'includes/overall/header.php';
protect_page();

if (empty($_POST) === false){
	$required_fields = array('title', 'author','price','condition');
	foreach($_POST as $key => $value){
		if (empty($value) && in_array($key, $required_fields) === true){
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}

	$booktitle = $_POST['title'];
	$bookauthor = $_POST['author'];
	$bookgenre = $_POST['genre'];
	$bookprice = $_POST['price'];
	$bookcondition = $_POST['condition'];
	$book_cover = $_POST['book_cover'];
	
	$username = "csc322";
	$password = "123";
	$hostname = "localhost";
	$db = mysql_connect($hostname,$username,$password) or die("There was an error.");

	$query = "INSERT INTO csc322.books (`book_id`, `title`, `author`, `genre`, `price`, `book_condition`, `book_cover`, `rating`, `owner`) VALUES (NULL,'".$booktitle."' ,'".$bookauthor."', '".$bookgenre."', '".$bookprice."', '".$bookcondition."', NULL, NULL, '2')";

	//mysql_query("use csc322");
	$result = mysql_query($query);
	
	if($result){echo "everything Went Well";}
	else{echo mysql_error();};

	//if (empty($errors) === true){
	//	if (book_exists($_POST['title'])===true){
	//		$errors[]='Sorry, the title \'' . $_POST['title'] . '\' is already exist.';
	//	}
	//}
}
?>
  <!-- Content of page -->
  <div class="col-md-9 col-sm-9 ">
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3>Have an extra copy of book? Sell it today! (<-TODO)</h3>
      </div>
	  <form class="form-horizontal" action="" method="post" action="Book_Reg.php">
		  <li class="list-group-item">
			<label>Book Title:</label>
			<input type="text" name="title" class="form-control"  placeholder="BookTitle">
		  </li>
		  <li class="list-group-item">
			<label>Author name:</label>
			<input type="text" name="author" class="form-control"  placeholder="Author name">
		  </li>  
		  <li class="list-group-item">
			<label>Genre:</label>
			<input type="text" name="genre" class="form-control"  placeholder="Genre">
		  </li>  
		  <li class="list-group-item">
			<label>Price:</label>
			<input type="text" name="price" class="form-control"  placeholder="Price (unit: $)">
		  </li>
		  <li class="list-group-item">
			<label>Condition:</label>
			<input type="text" name="condition" class="form-control"  placeholder="Condition">
		  </li>
		  <li class="list-group-item">
			<label>Book Cover</label>
			<input type="file" name="book_cover" >
		  </li>
		  <li class="list-group-item">
			<button type="submit" value="Log in" class="btn btn-default" > List for sell</button>
		  </li>
	  </form>
    </div>
	<?php include 'includes/widgets/recommendation.php';?>                       
  </div>
  <div class="col-md-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 
<?php include 'includes/overall/footer.php';?>
