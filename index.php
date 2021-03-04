<!DOCTYPE html>
<html>
<head>
	<title>First website</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Raleway:wght@200&display=swap" rel="stylesheet">


</head>
<body>


 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"  href="#">PRACTICE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userinfo.php">Contact</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Image/Ashraf.jpeg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Image/2.jpeg" alt="Chicago" >
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Image/3.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div>
		<h3 class="text-center">About Us</h3>
		<br>
	</div>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-lg-6 col-md-6 col-12">
				<img src="Image/Ashraf.jpeg" class="img-fluid aboutImg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4"> I am Ashraf</h2>
				<p> I am a student of NorthSouth University</p>
				<a href="about.php" class="btn btn-success">Know me</a>
			</div>

			
		</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> My photo</h2>		
	</div>
	<div class="container-fluid">
		<div class=row>
			<div class="col-lg-4 col-md-4 col-12 ">
				<img src="Image/Dp1.PNG" class="img-fluid pb-3 ">
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="Image/dp3.PNG" class="img-fluid pb-3">
				
			</div>
			
			<div class="col-lg-4 col-md-4 col-12">
				<img src="Image/dp6.PNG" class="img-fluid pb-3">
				
			</div>
		</div>
		
	</div>
</section>
<section class="my-5">
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email ID</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" name="comments"></textarea>
			</div>
				<button type="submit" class="btn-success">Submit</button>

		</form>
		
	</div>
</section>
<footer>
	<h6 class="p-3 bg-dark text-white">I am Ash</h6>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>