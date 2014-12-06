<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container .col-xs-6 .col-sm-4">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Libros</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href="index.php">Home</a></li>
        
        <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="true">Buy a Book <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li role="presentation"><a href="#">by Publish Date</a></li>
            <li class="divider"></li>
            <li role="presentation"><a href="#">by Price</a></li>
            <li class="divider"></li>
            <li role="presentation"><a href="#">by Publisher</a></li>
        </ul>
        </li>
        
        <li><a href="#">Sell a Book</a></li>
      </ul>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">        
              <input type="text" class="form-control" placeholder="Search a Book">
              <button type="submit" class="btn btn-default" > <span class="glyphicon glyphicon-search" ></span></button>
        </div>
      </form><!-- /.navbar-left-->

      <form class="navbar-form navbar-right" role="navigation">
        <ul class="nav navbar-nav">              
              <li><a href="#">
              <span class="glyphicon glyphicon-shopping-cart"></span> cart  
              </a></li>
              <li><a href="html/login.html"><span class="glyphicon glyphicon-user"></span> Log In</a></li>

              <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help </a></li>
        </ul>            
      </form> <!-- /.navbar-right-->
	    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<nav class="container navbar-fixed-bottom">
    <li role="presentation" class="dropup navbar-right">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="true">
              <button type="submit" class="btn btn-default" ><span class="glyphicon glyphicon-cog"></span> </button>
            </a>
            <ul class="dropdown-menu" role="menu">
              <p><a href="html/login.html">log in</a></p>
              <p><a href="html/signUp.html">Sign up</a></p>
            </ul>
    </li>   
</nav>
