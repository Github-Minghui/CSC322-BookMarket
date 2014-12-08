<html>
<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-8 col-xs-8 ">
    <div class= "panel panel-default">
      <div class="panel-heading">
       <h3>$book_data['title'] </h3><p>by $book_data['author']</p>$book_data['rating'] <!--TODO: float to right-->
      </div>
	  <li class="list-group-item">
		
		Description: $book_data['description']
	  </li>
	  <li class="list-group-item">
		Price: $book_data['price']
	  </li>
	  <li class="list-group-item">
		Condition: $book_data['condition'][poor, good, like new, new]
	  </li>
	  <li class="list-group-item">
		<button class="btn btn-sm btn-danger" type="submit">Add <span class="glyphicon glyphicon-shopping-cart"> </span></button>
		<button class="btn btn-sm btn-primary" type="submit">Buy it</button>	  
	  </li>

	  <li class="list-group-item">
		Comment:
	  </li>
    </div>
  </div>
  
  <div class="col-md-4 col-xs-4 ">
	<?php include 'includes/aside.php';?>
  </div><!-- .col-sm-4 -->
<?php include 'includes/overall/footer.php';?>