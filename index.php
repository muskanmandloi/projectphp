<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TRACK YOUR SKILLS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutt.php">AboutUs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ContactUs</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/shiv.jpg" alt="Shiva" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/india.jpg" alt="India" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/sky.jpg" alt="Kashmir" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About Us</h3>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 co-12">
			<img src="images/tr.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">I AM TRACKER HOST!</h2>
			<p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<a href="about.php" class="btn btn-success">CHECK MORE</a>
		</div>
	</div>
	
</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our Services</h3>
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 co-12">
			<div class="card">
  <img class="card-img-top" src="images/pur.jfif" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
		</div>

		<div class="col-lg-4 col-md-4 co-12">
			<div class="card">
  <img class="card-img-top" src="images/mumbai.jfif" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
		</div>
		<div class="col-lg-4 col-md-4 co-12">
			<div class="card">
  <img class="card-img-top" src="images/sky.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
		</div>
</section>
		<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our Gallery</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
		
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/sky.jpg" class="image-fluid pb-3">
		</div>	
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/sky.jpg" class="image-fluid pb-3">
		</div>	
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/sky.jpg" class="image-fluid pb-3">
		</div>	
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/sky.jpg" class="image-fluid pb-3">
		</div>	
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/sky.jpg" class="image-fluid pb-3">
		</div>	
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/sky.jpg" class="image-fluid pb-3">
		</div>	
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">For Contact</h3>
	</div>

<div class="w-100 m-auto" >
	<form action="user.php" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" autocomplete="off" class="form-control">
		</div>
		<div class="form-group">
			<label>Email ID</label>
			<input type="text" name="email" autocomplete="off" class="form-control">
		</div>
		<div class="form-group">
			<label>Phone No.</label>
			<input type="text" name="phone" autocomplete="off" class="form-control">
		</div>
		<div class="form-group">
			<label>Comments</label>
			<textarea class="form-control" autocomplete="off" name="comment"></textarea>
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
</div>
</section>
<footer>
<p class="p-3 bg-dark text-white text-center">
@TrackerHost
</p></footer>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<footer>

</body>
</html>