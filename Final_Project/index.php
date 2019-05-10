
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
<br>


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


	<section class="listings">
<h2 class="caption" style="text-align:center;color:white"><strong>Our Satisfied Customers</strong></h2>
   
        <!--
        <div class="container">
 <img src="cust1.jpg" class="img-thumbnail" alt="Cinque Terre">
<img src="cust2.jpeg" class="img-thumbnail" alt="Cinque Terre">
<img src="cust3.png" class="img-thumbnail" alt="Cinque Terre">
            
        </div>
        !-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 img-thumbnail">
  <img src="cust1.jpg" class="image">
    </div>
                
                <div class="col-md-4 img-thumbnail">
                <img src="cust2.jpeg" class="image">
        </div>
                
                <div class="col-md-4 img-thumbnail">
                <img src="cust3.png" class="image">
</div>
           
            </div>
        
        
  <div class="row">
      
                  <div class="col-md-4 img-thumbnail">
  <img src="cust4.jpg" class="image">
    </div>
                
                <div class="col-md-4 img-thumbnail">
                <img src="cust5.jpeg" class="image">
        </div>
                
                <div class="col-md-4 img-thumbnail">
                <img src="cust6.JPG" class="image">
</div>
        
        
        
           </div>    
            
            
   <div class="row">
      
                  <div class="col-md-4 img-thumbnail">
  <img src="cust7.jpg" class="image">
    </div>
                
                <div class="col-md-4 img-thumbnail">
                <img src="cust8.jpg" class="image">
        </div>
                
                <div class="col-md-4 img-thumbnail">
                <img src="cust9.jpg" class="image">
</div>
        
        
        
           </div>          
        </div>
	</section>	<!--  end customer section  -->

    
    
    
    
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