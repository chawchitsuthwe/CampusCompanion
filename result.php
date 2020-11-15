<?php
	$club_name=$_GET['name'];
	$con = new mysqli("localhost","root","","campuscompanion");
	$query="SELECT * FROM clubs WHERE club_name='$club_name' LIMIT 1";
	
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
?>
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

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="css/clubsui.css" />
<link rel="stylesheet" href="css/result.css" />
</head>
<body>
	<div class="container">
		<p class="heading">We suggest you to join ...</p>
		<p class="heading2"><a href="club.php?club_id=<?php echo $row['club_id']; ?>"><?php echo $row['club_name']; ?></a></p>
		<div class="row">
			<div class="col-md-12" align="center">
				<img src="img/<?php echo $row['club_logo']; ?>" class="img-responsive" width="250px" height="250px">
			</div>
		</div>
		<p align="center"><a href="test.html">Back</a></p>
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
</html>