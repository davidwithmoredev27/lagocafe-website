<!DOCTYPE html>
<html lang="en">
<head>
	<?php require "template/reset.php"; ?>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Services</title>
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
					<li><a href="coffteamenu.php">Cofftea Menu</a></li>
					<li><a href="lagomenu.php">Lago Menu</a></li>
					<li><a href="foodservices.php">Services</a></li>
					<li><a href="facilities.php">Facilities</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
				</ul>	
			</nav> <!-- end of navbar-->
		</header>
		<section class="servicesbanner">
			<div class="servicetxt">
				<h2>Services Offer</h2>
			</div>
		</section>
		<section class="servicescontainer">
			<div class="categoryoption">
				<div class="category"><a href="">BANDS</a></div>
				<div class="category"><a href="">KTV</a></div>
				<div class="category"><a href="">MARTINAS EVENT PLACE</a></div>
			</div>
			<div class="genre">
				<div class="genrecontainer">
					<div class="genretitle">
						<h3 style="text-decoration: uppercase;text-align: center;">Genre</h3>
					</div>
					<div class="dayscontainer">
						<div class="days">
							<div class="daystitle">
								<h4>Monday</h4>
							</div>
							<figure>
								<img src="" alt="">
								<figcaption></figcaption>
							</figure>
						</div>
						<div class="days">
							<div class="daystitle">
								<h4>Tuesday</h4>
							</div>
							<figure>
								<img src="" alt="">
								<figcaption></figcaption>
							</figure>
						</div>
						<div class="days">
							<div class="daystitle">
								<h4>Wednesday</h4>
							</div>
							<figure>
								<img src="" alt="">
								<figcaption></figcaption>
							</figure>
						</div>
						<div class="days">
							<div class="daystitle">
								<h4>Thursday</h4>
							</div>
							<figure>
								<img src="" alt="">
								<figcaption></figcaption>
							</figure>
						</div>
						<div class="days">
							<div class="daystitle">
								<h4>Friday</h4>
							</div>
							<figure>
								<img src="" alt="">
								<figcaption></figcaption>
							</figure>
						</div>
						<div class="days">
							<div class="daystitle">
								<h4>Saturday</h4>
							</div>
							<figure>
								<img src="" alt="">
								<figcaption></figcaption>
							</figure>
						</div>
						<div class="days">
							<div class="daystitle">
								<h4>Sunday</h4>
							</div>
							<figure>
								<img src="" alt="">
								<figcaption></figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
			<div class="ktv">
				<div class="ktvcontainer">
					<div class="ktvtitle">
						<h4>KTV</h4>
					</div>
					<div class="rooms" id="firstroom">
						<div class="roomsfigure">
							<a href="">Details</a>
						</div>
					</div>
					<div class="rooms">
						<div class="roomsfigure">
							<a href="">Details</a>
						</div>
					</div>
					<div class="rooms">
						<div class="roomsfigure">
							<a href="">Details</a>
						</div>
					</div>
				</div>
			</div>
			<div class="martinas">
				<div class="martinascontainer">
					<div class="martinastitle">
						<h3>MARTINAS</h3>
					</div>
					<div class="imageslider">
						<div class="slidercontainer">
							<div class="slider"><img src="" alt="left"></div>
							<div class="slider"><img src="" alt="right"></div>
						</div>
						<div class="details"><a href="">Details</a></div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footercontainer">
			<div class="footercontent">
				<div class="aboutinfocontainer">
					<p id="companyname"><span>Lago Cafe</span></p>
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
				<div class="hours">
					<div class="hoursdevider">
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>COFFTEA HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>12:00 Noon to 11:00 PM</p>
							</div>
						</div>
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>LAGO HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>2:00 PM to 2:00 AM</p>
							</div>
						</div>
					</div>
					<div class="hoursdevider">
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>MARTINAS HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>12:00 Noon to 11:00 PM</p>
							</div>
						</div>
						<div class="hourscontainer">
							<div class="hourstitle">
								<h3>KTV BAR HOURS</h3>
							</div>
							<div class="hoursched">
								<h4>Monday to Sunday</h4>
								<p>2:00 PM to 2:00 AM</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="copyrightcontainer">
				<p>&copy; Cofftea Zone &amp; Lago De Dalahican 2017</p>
			</div>
		</footer>
	</div>
<!-- 	<script src="../js/jquery-3.2.1.js"></script>
	 -->	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js></script> -->
	<script type="text/javascript">
		var images = ["" , "" , "" , ""];
		var leftarr = document.querySelector();
	</script>
</body>
</html>