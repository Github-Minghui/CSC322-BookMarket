<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-9 col-sm-9 ">
    <div class= "panel panel-primary">
      <div class="panel-heading">
       <h3>Have an extra copy of book? Sell it today!</h3>
      </div>
	  <form class="form-horizontal" action="" method="post">
	  <li class="list-group-item">
		Book Title:<input type="password" name="password" class="form-control"  placeholder="BookTitle">
	  </li>
	  <li class="list-group-item">
		Author name:<input type="password" name="password" class="form-control"  placeholder="Author name">
	  </li>  
	  <li class="list-group-item">
		Price:<input type="password" name="password" class="form-control"  placeholder="price">
	  </li>
	  <li class="list-group-item">
		Condition:<input type="password" name="password" class="form-control"  placeholder="Condition">
	  </li>
	  <li class="list-group-item">
		<div class="form-group">
		<label for="exampleInputFile">Book Cover</label>
		<input type="file" id="exampleInputFile">
	  </li>
	  <li class="list-group-item">
		<button type="submit" value="Log in" class="btn btn-default" > List for sell</button>
		<!-- <button type="submit" class="btn btn-default"> Join Libro!</button> -->
	  </li>
		</form>
    </div>
  </div>
  
  <div class="col-md-3 col-sm-3 col-xs-12 ">
	<?php include 'includes/aside.php';?>
  </div><!-- .col-sm-4 -->
<?php include 'includes/overall/footer.php';?>