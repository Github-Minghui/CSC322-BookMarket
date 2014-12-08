<html>
<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>
  <!-- Content of page -->
  <div class="col-md-12 col-xs-12 ">
    <div class= "panel panel-default">
      <div class="panel-heading">
       <h2><strong><em>$book_data['title']</em></strong>(<-TODO)</h2>
		 <small>by $book_data['author']</small>
      </div>
	  <li class="list-group-item">
	  Rating: 
			<form action="" method="post"> 
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
				</label>
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
				</label>
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
				</label> 
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option3"> 4
				</label> 
				<label class="radio-inline">
				  <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option3"> 5
				</label> 
				
				<button class="btn btn-sm btn-default pull-right" type="submit">Submit </button>
			</form>
	  </li>
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
		<p class="text-right">
		<button action="" method="" class="btn btn-sm btn-danger" type="submit">Add <span class="glyphicon glyphicon-shopping-cart"> </span></button>
		<button action="" method="" class="btn btn-sm btn-primary" type="submit">Buy it</button>	  
		</p>
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

