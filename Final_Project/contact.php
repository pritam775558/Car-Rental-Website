<!DOCTYPE html>
<html lang="en">
<head>
	<title>Falcon DRI>E</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/index-style.css">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
    

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center;color:white">Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center;color:white">Lamborghini - Mercedes Benz - Ferrari - BMW - Mclaren</h3>
			</section>
	</section>
  


 <div class="slideshow-container">

  <!--<div class="numbertext">1 / 4</div> !-->

     
<div id="background-img">

<img class="mySlides" id="img-1" src="falcon.jpeg" style="width:100%">
<img class="mySlides" id="img-1" src="lamb.jpg" style="width:100%">
<img class="mySlides" id="img-1" src="lambo.jpg" style="width:100%">
<img class="mySlides" id="img-1" src="duc.jpg" style="width:100%">
</div>

</div>


<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 4000); // Change image every 3 seconds
}

</script>

<div>
<h2 class="caption" style="text-align:center;color:white"><strong>Contact Us</strong></h2><br>
    <h3 style="text-align:center;color:white">
    Headquarters:<br><br>123 N. Main Street<br>Atlanta,GA, 30350<br>1-800-DRIVEUS<br><br>
    
    
    </h3>
        </div>
    
        <footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>SPONSORS</li>
						<li><a href="#">PORSCHE</a></li>
						<li><a href="#">TURO</a></li>
						<li><a href="#">NASCAR</a></li>
						<li><a href="#">AIRBNB</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Mcclaren</a></li>
						<li><a href="#">Others</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php"; ?>