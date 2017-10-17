<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Martinas and KTV</title>
	<?php require "template/scriptsandstylesheet.php"; ?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/lagocafeStyle.css">
</head>
<body>
	<div id="container">
		<header class="header">
			<section id="logocontainer">
				<img src="img/lagocafe.png" alt="lago cafe">
			</section>
			<nav id="navbar">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="foodservices.php">Food Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header> <!-- end of header-->
		<section id="eventscontainer">
			<div class="eventstitle">
				<h1>We Also Offer Several Events Reservation</h1>
			</div>
			<div id="centering">
				<div id="martinazcontainer" class="separator">
					<div id="martinazimg" class="eventsimg">
						<figure></figure>
					</div>
					<section id="martinazdescription" class="description" style="clear:both">
						<h3>Martinas Event Place</h3>
						<div class="informationtxt">
							<div class="prices">
								<h4>Price: Seven Thousand five hundred Pesos</h4>
								<dl>
									<dt>Inclusive of :</dt>
									<dd>Tables &amp; Chairs</dd>
									<dd>Sound System Separated By DJ</dd>
									<dd>1 Room</dd>
									<dd>Aircondition w/ the capacity of 100 Person</dd>
									<dd style="color:white;">pro</dd>
								</dl>
							</div>
							<div class="prices">
								<h4>Price: Ten Thousand Pesos</h4>
								<dl>
									<dt>Inclusive of :</dt>
									<dd>Tables &amp; Chairs</dd>
									<dd>Sound System Separated By DJ</dd>
									<dd>1 Room</dd>
									<dd>Aircondition w/ the capacity of 100 Person</dd>
									<dd>Projector</dd>
								</dl>
							</div>
						</div>
					</section>
				</div>
				<div id="ktvcontainer" class="separator">
					<div id="ktvimg" class="eventsimg">
						<figure></figure>
					</div>
					<section  id="ktvdescription" class="description">
						<h3>KTV</h3>
						<div class="informationtxt">
							<div class="prices">
								<h4>Room 1</h4>
								<dl>
									<dt></dt>
								</dl>
							</div>
							<div class="prices">
								<h4>Room 2</h4>
							</div>
							<div class="prices">
								<h4>Room 3</h4>
							</div>
						</div>
					</section>	
				</div>
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
	<script src="../js/jquery-3.2.1.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
</body>
</html>