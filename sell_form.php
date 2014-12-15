<?php 
include 'core/init.php';
include 'includes/overall/header.php';
protect_page();


if (empty($_POST) === false){
	$required_fields = array('title', 'author','price','condition','description','book_cover');
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
	$description = $_POST['description'];
	 
	$target = "image/"; 
	$target = $target . basename( $_FILES['book_cover']['tmp_name']) ; 
	$ok=1; 
	if(move_uploaded_file($_FILES['book_cover']['tmp_name'], $target)) 
	{
		echo "The file ". basename( $_FILES['book_cover']['name']). " has been uploaded";
	} 
	else {
		echo "Sorry, there was a problem uploading your file.";
	}
	 
	$book_cover = $target;
	echo($target);

	$query = "INSERT INTO csc322.books ( `title`, `author`, `genre`, `price`, `book_condition`, `book_cover`,`description`, `owner`) VALUES ('".$booktitle."' ,'".$bookauthor."', '".$bookgenre."', '".$bookprice."', '".$bookcondition."','".$book_cover."','".$description."', ".$_SESSION['user_id'].");";

	$result = mysql_query($query);
	
	if($result===true){echo "everything Went Well";}
	else{echo mysql_error();};


}
?>
  <!-- Content of page -->
  <div class="col-md-9 col-sm-9 col-xs-12">
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3>Have an extra copy of book? Sell it today!</h3>
      </div>
	  <form enctype="multipart/form-data" class="form-horizontal" action="" method="post" action="Book_Reg.php">
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
			<label>Description</label>
			<textarea type="text" name="description" class="form-control"  placeholder="Short Description"></textarea>
		  </li>
		  <li class="list-group-item">
			<button type="submit" value="Log in" class="btn btn-default" > List for sell</button>
		  </li>
	  </form>
    </div>
	<?php include 'includes/widgets/bookInventory.php';?>                       
  </div>
  <div class="col-md-3 col-sm-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 
<?php include 'includes/overall/footer.php';?>
