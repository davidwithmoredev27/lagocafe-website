<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Gallery</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
</head>
<body>
	<div id="container">
		<header class="header">
			<section id="logocontainer">
				<img src="img/cofftealogo.png" alt="cofftea zone">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="foodservices.php">Food Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header> <!-- end of header-->
		<section id="gallerycontainer">
		<!-- 	<div id="gallerytitle">
			<h1>choose your favorite photo's in our Gallery</h1>
		</div> -->
			<div class="compartment">
				<a href="index.php">
					<div class="category" id="facilitiesgallery">
						<h2>facilities</h2>
					</div>
				</a>
				
				<a href="index.php">
					<div class="category" id="membersgallery">
						<h2>staff</h2>
					</div>
				</a>
				
			</div>
			<div class="compartment">
				<a href="index.php">
					<div class="category" id="eventsgallery">
						<h2>events</h2>
					</div>
				</a>
				<a href="index.php">
					<div class="category" id="foodsgallery">
						<h2>Customer Experience</h2>
					</div>
				</a>
			</div>
		</section>
		<footer id="footercontainer">
			<div class="footercontent">
				<div class="aboutinfocontainer">
					<p id="companyname"><span >Cofftea Zone</span></p>
					<p id="location"><span>851 Manila Cavite Road, Dalahican Cavite City,<br>Philippines.</span></p>
					<div id="phonenumber">
						<p>Contact Numbers:</p>
						<span>Telephone: 402-0556</span><br>
						<span>Mobile: 09177049806</span>
					</div>
					<div id="email">
						<p>email: <span>justine.ponsones@gmail.com</span></p>
					</div>
				</div>
				<div class="footernavbar">
					<nav class="links">
						<ul>
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="menu.php">Menu</a></li>
							<li><a href="foodservices.php">Food Services</a></li>
							<li><a href="facilities.php">Facilities</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
						</ul>
					</nav>
					<div class="findus">
						<h3>Find Us</h3>
						<a href="#">Facebook</a>
					</div>
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone &amp; Lago De Dalahican 2017</p>
			</div>
		</footer>
	</div>
	<script src="js/jquery-3.2.1.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
</body>
</html>