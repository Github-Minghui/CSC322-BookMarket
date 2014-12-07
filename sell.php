<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-8 col-xs-8 ">
    <div class= "panel panel-default">
      <div class="panel-heading">
       <h3>Have an extra copy of book? Sell it today!</h3>
      </div>
	  <li class="list-group-item">
		Book Title:<br>
		<input type="text" name ="username" class="form-control"  placeholder="Title">
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
		<button type="submit" value="Log in" class="btn btn-default" > List for sell</button>
		<!-- <button type="submit" class="btn btn-default"> Join Libro!</button> -->
	  </li>
	  <li class="list-group-item">

	  </li>
    </div>
  </div>
  
  <div class="col-md-4 col-xs-4 ">
	<?php include 'includes/aside.php';?>
  </div><!-- .col-sm-4 -->
<?php include 'includes/overall/footer.php';?>