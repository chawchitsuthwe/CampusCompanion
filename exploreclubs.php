<?php
	$con = new mysqli("127.0.0.1:3310","root","","campuscompanion");
	$query="SELECT * FROM clubs";
	
	$result=mysqli_query($con,$query);
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

  <title>Explore Clubs</title>

  <link rel="shortcut icon" href="img/ccheaderimg3.png" type="image/x-icon" />

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet"> 

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <link rel="stylesheet" href="css/custom_navbar.css" />
  <link rel="stylesheet" href="css/star_rating.css" />
  <link rel="stylesheet" href="css/clubsui.css" />
  <link rel="stylesheet" href="css/exploreclubs.css" />
  <link rel="stylesheet" href="css/hr.css" />
  <script src="js/star_rating.js"></script>

</head>
<body>

<!-- Navbar -->
<?php include("nav.html"); ?>

<div class="container" style="margin-top: 100px;">
      <h1 align="center">Explore Clubs</h1>
      <hr class="fade-2">
      <p align="center">
      	<!--Our website is to make university students to join their favorite activity - clubs in a very convenient way<br>-->
  		Our website contain all information and data about all clubs with less of time comsumption and also include nice display to view about each club.</p>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row" align="center">
		<?php 
		$count=0;
		while($row=mysqli_fetch_array($result)){
		?>
        <div class="col-md-3" data-aos="flip-up" data-aos-duration="1000">
          <a href="club.php?club_id=<?php echo $row['club_id']; ?>">
			<img src="img/<?php echo $row['club_logo']; ?>" class="responsive" width="500" height="350"><?php echo $row['club_name']; ?></a>
		</div>
        <?php
		$count++;
		if($count%4==0){
			echo "</div></div><div class='container'><div class='row' align=center>";
		}
		} 
		?>  
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
<!-- AOS slide effects -->
  <script>
    AOS.init();
  </script>
<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
</script>
</html>
