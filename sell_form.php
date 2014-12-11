<?php 
include 'core/init.php';
include 'includes/overall/header.php';
protect_page();

if (empty($_POST) ===false){
	$required_fields = array('title', 'author','price','condition');
	foreach($_POST as $key => $value){
		if (empty($value) && in_array($key, $required_fields) === true){
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}

	if (empty($errors) === true){
<<<<<<< HEAD
		if (user_exists($_POST['username'])===true){
			$errors[]='Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
		}
		if (preg_match("/\\s/", $_POST['username']) == true){
			$errors[] = "username must not conatin any space.";
		}
		if (strlen($_POST['password'])<6){
			$errors[]='password must at least 6 characters';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] ='Your passwords do not match';
		}
		if (email_exists($_POST['email'])===true){
			$errors[]='Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}

=======
		if (book_exists($_POST['title'])===true){
			$errors[]='Sorry, the title \'' . $_POST['title'] . '\' is already exist.';
		}
	}
}
>>>>>>> 8fad85e3205d92408f2d76969fdd13f31e95dd5a
?>
  <!-- Content of page -->
  <div class="col-md-9 col-sm-9 ">
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3>Have an extra copy of book? Sell it today! (<-TODO)</h3>
      </div>
	  <form class="form-horizontal" action="" method="post">
		  <li class="list-group-item">
			<label>Book Title:</label>
			<input type="text" name="title" class="form-control"  placeholder="BookTitle">
		  </li>
		  <li class="list-group-item">
			<label>Author name:</label>
			<input type="text" name="author" class="form-control"  placeholder="Author name">
		  </li>  
		  <li class="list-group-item">
<<<<<<< HEAD
=======
			<label>Genre:</label>
			<input type="text" name="genre" class="form-control"  placeholder="Genre">
		  </li>  
		  <li class="list-group-item">
>>>>>>> 8fad85e3205d92408f2d76969fdd13f31e95dd5a
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
<<<<<<< HEAD
			<!-- <button type="submit" class="btn btn-default"> Join Libro!</button> -->
		  </li>
	  </form>
    </div>
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3>Books Iventory: (<-TODO)</h3>
      </div>
	  <li class="list-group-item">
	  <div class="row">
			<div class="col-md-3"> <!--this is the size of the box of the image--> 
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
			</div>
	  </div>
	  </li>                       
    </div>
  </div>  
=======
		  </li>
	  </form>
    </div>
	<?php include 'includes/widgets/recommendation.php';?>                       
  </div>
>>>>>>> 8fad85e3205d92408f2d76969fdd13f31e95dd5a
  <div class="col-md-3 col-xs-12">
  	<?php include 'includes/widgets/side_recommendation.php';?>
  </div> 
<?php include 'includes/overall/footer.php';?>