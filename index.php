<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/ccheaderimg3.png" type="image/x-icon" />
	<title>Campus Companion-Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet"> 
	<style>
	{
		margin: 0;
		padding: 0;
	}
	html,body{
		height: 100%;
	}
	section{
		position: relative;
		bottom: 0;
		left: 0;
		content: '';
		width: 100%;
		height: 100%;
		background: -webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.6) 100%);
  		background: linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.8) 80%,rgba(0,0,0,.6) 100%);
	}
	.homelink{
		outline: 0;
	}
	/* section1 */
	.demo1 { 
	    display: block;
	    position: relative;
	}

	.demo1::after {
	    content: "";
	    background: url(img/ytubg2.jpg); 
	    background-size: cover;
	    opacity: 0.8;
	    top: 0;
	    left: 0;
	    bottom: 0;
	    right: 0;
	    position: absolute;
	    z-index: -1;
	}
	.responsive {
		position: relative;
		margin-top: 3%;
	  	max-width: 100%;
	  	height: auto;
	}
	.description{
		position: relative;
		top: 20%;
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 14px;
		letter-spacing: 1px;
		line-height: 1.6;
		color: #fff;
		text-align: center;
		}

	@media screen and (min-width: 500px) {
	  .description{
	    font-size: calc(14px + 9 * ((100vw - 320px) / 680));
	  }
	}
	@media screen and (min-width: 980px) {
	  .description{
	    font-size: 16px;
	  }
	}
	/* section2 */
	.demo2 { 
	    display: block;
	    position: relative;
	}

	.demo2::after {
	    content: "";
	    background: url(img/ytubg1.jpg); 
	    background-size: cover;
	    opacity: 0.8;
	    top: 0;
	    left: 0;
	    bottom: 0;
	    right: 0;
	    position: absolute;
	    z-index: -1;
	}
	.responsive2 {
		position: relative;
		margin-bottom: 5%;
	  	max-width: 100%;
	  	height: auto;
	}
	.carousel-item{
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 35px;
		color: #ffffff;
	}
	.test{
		position: relative;
		margin: 180px 5% 0% 5%;
	}
	.test1{
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 20px;
		font-weight: bold;
		border-style: none;
		border-radius: 25px;
		margin: 0px 5px 5px 5px;
		padding: 5px 40px 5px 40px;
		background-color: transparent;
		border:1px solid #fff;
		color: #fff;
		transition: 0.5s ease;
	}
	.test1:hover{
		background-color: #ffffff;
		color: #ff7f50;
		opacity: .85;
	}
	.explore1{
		font-family:'Source Sans Pro', sans-serif;
		font-size: 20px;
		font-weight: bold;
		border-style: none;
		border-radius: 25px;
		margin: 0px 5px 5px 5px;
		padding: 5px 26px 5px 26px;
		background-color: transparent;
		border:1px solid #fff;
		color: #fff;
		transition: 0.5s ease;
	}
	.explore1:hover{
		background-color: #ffffff;
		color: #ff7f50;
		opacity: .85;
	}
	a .test1{
		outline: 0;
	}
	a .explore1{
		outline: 0;
	}
	.footer {
	    font-family: 'Source Sans Pro', sans-serif;
	    font-size: 16px;
	    color: #ffffff;
	    position: absolute;
	    left: 0;
	    bottom: 0;
	    width: 100%;
	    text-align: center;
	}
	/* background img & effects */
	i{
		position: absolute;
		top: 80%;
		left: 50%;
		width: 46px;
		height: 46px;
		margin-left: -23px;
		border: 1px solid #fff;
		border-radius: 100%;
		box-sizing: border-box;
	}
	i::after{
		position: absolute;
		top: 50%;
		left: 50%;
		content: '';
		border: 1px solid #fff;
		margin: -15px 0 0 -14px;
		border-width: 0 1px 1px 0;
		display: inline-block;
		padding: 10px;
	}
		i::before{
		position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
		content: '';
		width: 44px;
		height: 44px;
		box-shadow: 0 0 0 0 rgba(255,255,255,.1);
		border-radius: 100%;
		opacity: 0;
		-webkit-animation: sdb03 3s infinite;
		animation: sdb03 3s infinite;
		box-sizing: border-box;
	}
	@-webkit-keyframes sdb03 {
	  0% {
	    opacity: 0;
	  }
	  30% {
	    opacity: 1;
	  }
	  60% {
	    box-shadow: 0 0 0 45px rgba(255,255,255,.1);
	    opacity: 0;
	  }
	  100% {
	    opacity: 0;
	  }
	}
	@keyframes sdb03 {
	  0% {
	    opacity: 0;
	  }
	  30% {
	    opacity: 1;
	  }
	  60% {
	    box-shadow: 0 0 0 45px rgba(255,255,255,.1);
	    opacity: 0;
	  }
	  100% {
	    opacity: 0;
	  }
	}
	i:hover{
		opacity: 0.7;
	}
	/* section link */
	.down {
		transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
	}
	</style>
</head>
<body>
	<section id="section1" class="demo1">
		<a href="" class="homelink">
			<div align="center">
				<img src="img/ytulogo14.png" class="responsive" width="225" height="120">
			</div>
		</a>
		<p class="description">Welcome to Yangon Technological University.<br>
		Are you still new to our clubs and activities?<br>
		Then you can find out your hobby by taking a test.<br>
		You can also explore all of our clubs' activities here.</p>
		<a href="#section2"><i class="down"></i></a>
	</section>
	<section id="section2" class="demo2">
	<div class="container-fluid" align="center">
		<br>
		<a href="" class="homelink">
			<div align="center">
				<img src="img/c-c4.png" class="responsive2" width="100" height="100">
			</div>
		</a>
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      "DISCOVER YOURSELF"
		    </div>
		    <div class="carousel-item">
		      "FIND YOUR HOBBIES"
		    </div>
		    <div class="carousel-item">
		      "HAVE FUN IN UNIVERSITY LIFE"
		    </div>
		  </div>
		</div>
		<div class="test" align="center">
			<div class="row">
			   <div class="col-md-6">
			   	<a href="test.php"><button class="test1" type="">Take a Test</button></a>
			   </div>
			   <div class="col-md-6">
			   <a href="exploreclubs.php"><button class="explore1" type="">Explore Clubs</button></a>
			   </div>
			 </div>
		</div>
		<div class="footer">
	  		<p><span style="font-size: 16px">&copy;</span>&nbsp; 2019 &nbsp; Campus Companion &nbsp; by &nbsp; H<sup>4</sup> SQUAD &nbsp; All Rights Reserved</p>
	  	</div>
	  </div>
  	</div>
	</section>



<!-- ********************* testing firebase start ******************** -->

	<script src="/__/firebase/6.1.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#reserved-urls -->

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


<!-- ********************* testing firebase  end******************** -->

		<script>
		$(document).ready(function(){
		  // Add smooth scrolling to all links
		  $("a[href*='#']").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 1000, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});
	</script>
</body>
</html>