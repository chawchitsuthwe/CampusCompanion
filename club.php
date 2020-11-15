<?php
	$club_id=$_GET['club_id'];
	$con = new mysqli("127.0.0.1:3310","root","","campuscompanion");
	$query="SELECT * FROM clubs WHERE club_id=$club_id LIMIT 1";
	
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
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

	<title>Photography Club</title>

	<link rel="shortcut icon" href="img/ccheaderimg3.png" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet"> 

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<link rel="stylesheet" href="css/custom_navbar.css" />
	<link rel="stylesheet" href="css/star_rating.css" />
	<link rel="stylesheet" href="css/clubsui.css" />
	<link rel="stylesheet" href="css/hr.css" />
	<script src="js/star_rating.js"></script>

</head>
<body>

<!-- Navbar -->
<?php include("nav.html"); ?>

<?php
	if(is_array($row)){
?>
<div class="container">
	<div class="clubframe">
		<h1 align="center"><?php echo $row['club_name']; ?></h1>
		<hr class="fade-2">
			<div class="row">
				<div class="col-sm-4">
					<img src="img/<?php echo $row['club_logo']; ?>" class="img-fluid mx-auto d-block" alt="Responsive image" width="200px" height="200px">
				</div>
				<div class="col-sm-4">
					<p class="classinfo">
						Class President <span style="margin-left: 0.8em"></span> : <a href="<?php echo $row['facebook_link']; ?>"><?php echo $row['president']; ?></a><br><br>
						Time <span style="margin-left: 5.3em"></span> : <?php echo $row['time']; ?><br><br>
						<i class="fa fa-phone" aria-hidden="true"></i><span style="margin-left: 6.9em"></span>: <?php echo $row['phno']; ?><br><br>
						<i class="fa fa-envelope-open" aria-hidden="true"></i> <span style="margin-left: 6.5em"></span>: <a href="#"><?php echo $row['mail']; ?></a><br>
					</p>
				</div>
				<div class="col-sm-4">
					<p>Aim</p>
					<p class="item3">
					<span style="margin-left: 2em"></span><?php echo $row['aim']; ?></p>
				</div>
			</div>
			<div class="row">
		      <div class="col-sm-12">
		      <h1 align="center">Activities</h1>
			  <hr class="fade-2">
		      <p class="item3">
		      <span style="margin-left: 2em"></span><?php echo $row['activities']; ?></p>
		      </div>
			</div>
			<div class="row">
<?php } ?>
<?php
	$query="SELECT * FROM photo_storage WHERE club_id=$club_id";
	
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
?>
			
		  		<div class="col-sm-4" data-aos="fade-down" data-aos-duration="1000">
		  			<img src="img/<?php echo $row['photo_file']; ?>" class="img-fluid" alt="Responsive image">
		  		</div>
<?php } ?>
</div>

<div class="container">
	<div class="row">
			<div class="col-sm-12" align="center"><br>
				<h1>Rate This Club</h1>
				<hr class="fade-2">
					<form action="php/rating_function.php" id="rating_form">
					<div class="rating">

					<input type="radio" name="rating" id="r1" value="5">
					<label for="r1"></label>

					<input type="radio" name="rating" id="r2" value="4">
					<label for="r2"></label>

					<input type="radio" name="rating" id="r3" value="3">
					<label for="r3"></label>

					<input type="radio" name="rating" id="r4" value="2">
					<label for="r4"></label>

					<input type="radio" name="rating" id="r5" value="1">
					<label for="r5"></label>
					</div>
					<input type="hidden" name="club_id" value="<?php echo $club_id; ?>">
					</form>
			</div>
	</div>
</div>

<div class="container" align="center">
	<button class="test" type="submit" form="rating_form">Rate</button>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="file:///D:/Campus%20Companion%20(Completed)/index.html"> Campus Companion.com</a>
  </div>
  <!-- Copyright -->

</footer>

</div>

</body>
<!-- AOS slide effects -->
	<script>
	  AOS.init();
	</script>
<!--hamburger-icon animation-->
    <script>
      function myFunction(x) {
          x.classList.toggle("change");
      }
    </script>
</html>