<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
  crossorigin="anonymous">

  <!-- js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
  crossorigin="anonymous"></script>

  <!--icon design-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Contact Us</title>

  <link rel="shortcut icon" href="img/ccheaderimg3.png" type="image/x-icon" />

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet"> 

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link rel="stylesheet" href="css/custom_navbar.css" />
  <link rel="stylesheet" href="css/star_rating.css" />
  <link rel="stylesheet" href="css/clubsui.css" />
  <link rel="stylesheet" href="css/contactus.css" />
  <link rel="stylesheet" href="css/hr.css" />
  <script src="js/star_rating.js"></script>
  <style>
		.head-img-container {
		  background-image: url("img/contactus.jpg");
		  background-attachment: fixed;
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		  padding-top: 170px;
		  height: 550px;
		}
  </style>
</head>
<body>
<!-- Navbar -->
<?php include("nav.html"); ?>

<!-- Image Section -->
    <div class="head-img-container">
      <div
        class="position-absolute d-flex justify-content-center img-responsive">
      </div>
    </div>
<!-- End of Image Section -->

	<div class="container">
	<h1 align="center" style="margin-top: 50px;">Contact Us</h1>
	<hr class="fade-2">
	<p style="text-align: center;">
      We are here to help you.Want to test hobby? Want to know more? Want to join clubs? We look forward to hearing from you.</p>
	  <form action="action_page.php">
	  	<div class="cuform">
	  		<div class="row">
	  			<div class="col-md-6">
				    <label for="fname">Name</label>
				    <input type="text" id="fname" name="firstname" placeholder="Your Name.." required>

			    	<label for="email">Email</label>
			    	<input type="text" placeholder="Enter your Email" name="email" required>
		    	</div>

		    	<div class="col-md-6">
				    <label for="message">Message</label>
				    <textarea id="message" name="message" placeholder="Message Here.." required style="height:155px"></textarea>
				</div>
			</div>
			<div class="container" align="center">
				<a href="contactus.html"><button class="test" type="submit">Join Now</button></a>
			</div>
	    </div>
	  </form>
	</div> 

	<div class="container" align="center">
	<h1>Location</h1>
	<hr class="fade-2">
		<div class="mapouter">
			<div class="gmap_canvas">
				<iframe width="1000" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=yangon%20techniological%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org">embedgooglemap.org</a>
			</div>
		</div>
	</div>

	<!-- Footer -->
	  <footer class="page-footer font-small blue">

	    <!-- Copyright -->
	    <div class="footer-copyright text-center py-3">© 2019 Copyright:
	      <a href="file:///D:/Campus%20Companion%20(Completed)/index.html"> Campus Companion.com</a>
	    </div>
	  <!-- Copyright -->

	  </footer>

</body>
<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
</script>
</html>