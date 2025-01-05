<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Top Rated and Best Autocad & Tally</title>
	<!-- add the fevicon -->
	<link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNZyMyHIBkVQIlrzS_nrpruTqnx75JjWm3Cw&s">
	<!-- fontawsome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
	<!-- Bootstrap -->
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!-- form comes on load page -->
<body onload="setTimeout(loadFunction, 4000)">

<!-- Navigation bar -->
<nav class="navbar navbar-expand-md navbar-dark">
	<!-- Brand -->
  <a class="navbar-brand" href="#">CADD PLUS TALLY HUB</a>
    <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        All Courses
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Web Desining</a>
        <a class="dropdown-item" href="#">Photoshop Master</a>
        <a class="dropdown-item" href="#">Graphic Design</a>
        <a class="dropdown-item" href="#">C,C++ Training</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="https://caddplustallyhub.in/training-courses/">Training</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://caddplustallyhub.in/about-us/">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://caddplustallyhub.in/blog/">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://caddplustallyhub.in/enquiry-now/">Contact Us</a>
      </li>
      <li class="nav-item float-right">
      	<form class="form-inline" action="/action_page.php">
  
    	<input class="form-control mr-sm-2" type="text" placeholder="Search">
    	<button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
  
    		</form>
      </li>    
    </ul>
   
  </div>

 <!-- END ... Navigation Bar   -->
</nav>
<br>

<!-- form section on load page -->
<div class="formSection" id="id01">

<div class="container">

<!-- using bootstrap login form -->
<form action="login_page.php" method="POST" class="was-validated">
		<h2 class="text-center text-primary">Login Form</h2>

		<button type="button" style="float: right; background-color: darkred;" class="btn text-white" onclick="cancelFunction()"><i class="fa-solid fa-xmark"></i></button> <!-- cancel icon -->

    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username example@example.com" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
    <button type="button" class="btn btn-danger" onclick="cancelFunction()">Cancel</button>
    <a href="signup.php" type="button" class="btn btn-primary">Sign Up</a>
  </form>
<!-- END ... container -->
</div>

<!-- END ... form section on load page	 -->
</div>

<!-- add carasoul -->
<div class="container">
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
      <img src="Images/worker.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Images/writing.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Images/backlook.jpg" alt="New York" width="1100" height="500">
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
</div>
<!-- Cadd Plus Tally Hub Understands You -->
<div class="container">
	<marquee direction="up" behavior="alternate" scrollamount="10"><h2 class="text-center m-5">Cadd Plus Tally Hub Understands You</h2></marquee>
<div class="row">
	<div class="col-sm-4 p-3">
		<!-- advertisment -->
		<iframe style="width: 100%; height: 250px;" 
src="https://www.youtube.com/embed/pvuN_WvF1to">
</iframe>
	</div>
	<!-- content -->
	<div class="col-sm-8 p-3">
		<p style="font-size: 20px;"><b class="text-danger">Cadd plus tally hub</b> is one of the best training institutes located in Laxmi Nagar. It was established in 11 Sep 2004. The experts are doing such an accomplished job in their relevant fields. Unique courses are available. In short, we develop the brands. A highly experienced team is working on our organization. We will consistently do our job with total effort. We teach numerous recognized batches, which we have done for the past few years. It’s a success story of our institute. </p>
		<p style="font-size: 20px;"><b>Our students are available</b> in companies all around the world. Cadd plus tally hub serves you the best software training of all types of courses. Highly trained experienced staff deliver you all kinds of viewpoints, which we really need. We are here and provide you 24/7 hours assistance all the time. Visit our site kindly, check planned courses and qualified staff. When we’re working on your project and marketing your business constantly, I assure you that you feel more comfortable. </p>
		<button type="button" id="read-btn" class="btn btn-success text-white">Read more</button>
		<div id="read-content" class="p-3" style="display: none;">
			<p style="font-size: 18px;"><b class="text-danger">Lorem ipsum dolor sit amet,</b> consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. <b class="text-success">Duis aute irure dolor in reprehenderit</b> in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. <b class="text-success">Duis aute irure dolor in reprehenderit</b> in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>
	</div>

</div>

<!-- END ...Cadd Plus Tally Hub Understands You -->
</div>
<!-- Our Popular Courses -->
<div class="bg-light">
<div class="container p-3" style="margin-top: 100px;">
	<h2 class="text-center m-5">Our Popular Courses</h2>

	<!-- first-row -->
	<div class="row">

		<div class="col-sm-3 p-3">
		 <div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="Images/architecture.jpg" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">AutoCad (Architecture, Machinical, Electronic, Electrical)</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>

		<div class="col-sm-3 p-3">
			<div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="Images/architecture2.jpg" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">Revit (Architecture, Structure,MEP)</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>

		<div class="col-sm-3 p-3">
			<div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="Images/design.jpg" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">3ds max, Vray</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>

		<div class="col-sm-3 p-3">
			<div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="Images/excel.jpg" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">Advance excel</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>
  
  <!-- END ... first-row -->
	</div>

 <!-- second-row -->
	<div class="row mt-5">

		<div class="col-sm-3 p-3">
			<div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="Images/marketing.jpg" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">Digital Marketing</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>

		<div class="col-sm-3 p-3">
			<div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="https://caddplustallyhub.in/wp-content/uploads/2021/08/solidworks-2.jpg" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">Solidworks</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>

		<div class="col-sm-3 p-3">
			<div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="https://caddplustallyhub.in/wp-content/uploads/2021/08/ms-office-course.png" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">Ms Office</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>

		<div class="col-sm-3 p-3">
			<div class="card p-3" style="height: 450px;">
  			<img class="card-img-top" src="https://caddplustallyhub.in/wp-content/uploads/2021/08/interior-designing.jpg" alt="auto cad" style="width: 100%;">
  			<div class="card-body">
    		<h5 class="card-title">Interior designing</h5>
    		<p class="card-text">Learn to design using AutoCAD® design and documentation software through AutoCAD® 2D & 3D with our expert.</p>
  			</div>
		 </div>
		</div>

	<!-- END ... second-row -->
	</div>

	<div class="text-center" style="margin: 50px;">
	<a href="https://caddplustallyhub.in/training-courses/" type="button" class="btn btn-success text-center">All Courses</a>
	</div>

<!-- END ... container -->
</div>

<!-- END ... Our Popular Courses -->
</div>

<!-- Our Student's Testimonial -->
<div class="testimonial">

<div class="container">
	<h2 class="text-center p-5">Our Student's Testimonial</h2>
	<!-- row -->
	<div class="row">
		<div class="col-sm-6 p-3">
			<div class="card p-5" style="height: 450px;">
				<img class="card-img-top students" src="https://caddplustallyhub.in/wp-content/uploads/2021/08/IMG_20210802_215915.jpg">
				<p class="text-center"><b>Good institute for digital marketing I like this institute Nd best teacher way of talking is very politely Dr Geeta Kansal mam very supportive there best institute in Laxmi Nagar.</b></p>
				<h4 class="text-center">Pooja Saxena</h4>
				<h5 class="text-center text-secondary">9 month ago</h5>
			</div>
		</div>
		<div class="col-sm-6 p-3">
			<div class="card p-5" style="height: 450px;">
				<img class="card-img-top students" src="https://caddplustallyhub.in/wp-content/uploads/2021/08/IMG_20210802_215957.jpg">
				<p class="text-center"><b>Highly experienced faculty which help in your work and your project as well your class. i did Autocad from this Institute is very less time. Because way of teaching is awesome.></p>
				<h4 class="text-center">Manan Gupta</h4>
				<h5 class="text-center text-secondary">a year ago</h5>
			</div>
		</div>
	
	<!-- END ... row -->
	</div>

	<!-- END ... container -->
</div>

<!-- END ... Our Student's Testimonial -->
</div>

<!-- Latest From Blog -->
<div class="latest">

<div class="container">
	<h2 class="text-center m-5">Latest From Blog</h2>
	
	<!-- row -->
	<div class="row">

		<div class="col-sm-4 p-3">
			<div class="card" style="height: 550px;">
			<img class="card-img-top" src="https://img.freepik.com/free-photo/digital-marketing-with-icons-business-people_53876-94833.jpg?semt=ais_hybrid" style="width: 100%;">
			<h4 class="p-3">How Is Digital Marketing Important for Business?</h4>
			<p class="p-3">Digital marketing has become the heartbeat of modern businesses. With...</p>
			</div>		
		</div>
		<div class="col-sm-4 p-3">
			<div class="card" style="height: 550px;">
			<img class="card-img-top" src="https://www.shutterstock.com/image-photo/portrait-businessman-standing-resort-folder-260nw-440912164.jpg" style="width: 100%;">
			<h4 class="p-3">Best AutoCAD training Laxmi Nagar – Cadd Plus Tally Hub</h4>
			<p class="p-3">If you’re looking to master AutoCAD and transform your career,...</p>
			</div>
		</div>
		<div class="col-sm-4 p-3">
			<div class="card" style="height: 550px;">
			<img class="card-img-top" src="https://media.istockphoto.com/id/1272687005/photo/hispanic-female-business-professional-in-office-boardroom.jpg?s=170667a&w=is&k=20&c=z1-wQCT4e_LG5c73WP0998BmYR62cWf0BeHW7F3LUis=" style="width: 100%;">
			<h4 class="p-3">Happy Teacher`s Day</h4>
			<p class="p-3">Happy Teachers’ Day to the educator who inspires reverence! You...</p>
			</div>
		</div>

		<!-- END ... row -->
	</div>

	<!-- END ... container -->
</div>

<!-- END ... Latest From Blog -->
</div>

<!-- footer section -->

<footer>
	<div class="container" style="margin-top: 100px;">

	<!-- row -->
	<div class="row">

		<div class="col-sm-3">
			<h4>Follow Us</h4>
			<div class="social-media">
				<a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
				<a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
				<a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
			</div>
		</div>
		<div class="col-sm-3">
			<h4>Contact Info</h4>
			<p style="padding: 5px;"><i class="fa-solid fa-location-dot"></i> <b>Address:</b><br>
			<small>U - 158 ,Vikas Marg Shakarpur, Laxmi Nagar, DCB Bank Basement</small></p>
			<p style="padding: 5px;"><i class="fa-solid fa-phone"></i> <b>Phone</b><br>
			<small>+91-8506000164</small></p>
			<p>
			<b style="padding: 5px;"><i class="fa-solid fa-envelope"></i> Email:</b><br>
			<small>caddplustallyhub@gmail.com</small></p>
			<h4>Branch 2:</h4>
			<p style="padding: 5px;"><small>Visa global(your trusted partner for visa )</small></p>
			<p style="padding: 5px;"><small>U – 158, vikas marg  Shakarpur, Laxmi Nagar, DCB Bank Basement</small></p>

		</div>
		<div class="col-sm-3">
			<h4>Popular Courses</h4>
			<ul>
				<li>Autocad Training</li>
				<li>NxCad/cam Training</li>
				<li>Revit Training</li>
				<li>3ds Max Training</li>
				<li>Tally ERP with GST</li>
				<li>MS office Training</li>
				<li>Digital Marketing Training</li>
				<li>Interior Designing Training</li>
				<li>Advance Excel Training</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<h4>Software Courses</h4>
			<ul>
				<li>Graphic Designing Training</li>
				<li>Web Designing Training</li>
				<li>Photoshop Training</li>
				<li>C, C++ Training</li>
				<li>UI/UX Designer</li>
				<li>PHP Training</li>
				<li>Solidworks Training</li>
				<li>CATIA V5 Training</li>
			</ul>
		</div>

	<!-- END ... row -->
	</div>
	
	<!-- END ... container -->
</div>
<div style="background-color: #b30000;">
		<a href="#" type="button" class="btn top-icon"><i class="fa-solid fa-square-caret-up"></i></a>
		<p class="text-center text-white" style="padding-bottom: 10px;"><b>Copyrights Cadd Plus Tally Hub 2022. All rights reserved.</b></p>
	</div>

	<!-- END ... footer section -->
</footer>



<!-- script -->
<script src="script.js"></script>
</body>
</html>
