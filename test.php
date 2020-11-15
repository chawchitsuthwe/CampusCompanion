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

	<title>Test</title>

	<link rel="shortcut icon" href="img/ccheaderimg3.png" type="image/x-icon" />

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet"> 

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<link rel="stylesheet" href="css/custom_navbar.css" />
	<link rel="stylesheet" href="css/star_rating.css" />
	<link rel="stylesheet" href="css/clubsui.css" />
	<link rel="stylesheet" href="css/test.css" />
	<link rel="stylesheet" href="css/hr.css" />
	<script src="js/star_rating.js"></script>
<style>

	.head-img-container {
		  background-image: url("img/question.jpg");
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
		<img src="img/banner-1090829_1920.jpg" width=100% height=100%>	
	  </div>
    </div>
    <!-- End of Image Section -->

	<div class="container" style="margin-top: 50px;">
		<h1 align="center">Test Hobby</h1>
		<hr class="fade-2">
		<p align="center">Please answer our questions patiently. Thank You <3 .</p>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<form method="POST" id="hobbytestform">
					<div class="container">
						<p class="questions">I . Cost Money</p>
						<label class="container-1">Little
						  <input type="radio" name="radio1" value="a" required>
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Moderate
						  <input type="radio" name="radio1" value="b">
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Much
						  <input type="radio" name="radio1" value="c">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="container">
						<p class="questions">II . Generate Money</p>
						<label class="container-1">Yes
						  <input type="radio" name="radio2" value="a" required>
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">No
						  <input type="radio" name="radio2" value="b">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="container">
						<p class="questions">III . Activity Period</p>
						<label class="container-1">During Extracurriculum
						  <input type="radio" name="radio3" value="a" required>
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Apart from Extracurriculum
						  <input type="radio" name="radio3" value="b">
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Both
						  <input type="radio" name="radio3" value="c">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="container">
						<p class="questions">IV . Creativity</p>
						<label class="container-1">Essential
						  <input type="radio" name="radio4" value="a" required>
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Not Necessarily Required
						  <input type="radio" name="radio4" value="b">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="container">
						<p class="questions">V . Activity Type</p>
						<label class="container-1">Relaxing
						  <input type="radio" name="radio5" value="a" required>
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Chellenging
						  <input type="radio" name="radio5" value="b">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="container">
						<p class="questions">VI . Requirement</p>
						<label class="container-1">Minimum
						  <input type="radio" name="radio6" value="a" required>
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Moderate
						  <input type="radio" name="radio6" value="b">
						  <span class="checkmark"></span>
						</label>
						<label class="container-1">Much
						  <input type="radio" name="radio6" value="c">
						  <span class="checkmark"></span>
						</label>
					</div>
				</form>
				<div class="container" align="left">
					<button class="test" form="hobbytestform" type="submit" value="Test">Test</button>
				</div>
			</div>

			<div class="col-md-5">
			<h1 style="margin-top: 50px;" align="center">Popular Clubs</h1>
			<hr class="fade-2">
				<p>Photography Club</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
				    30%
				  </div>
				</div>
				<p>Dance Club</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
				    24%
				  </div>
				</div>
				<p>Music Club</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
				    18%
				  </div>
				</div>
				<p>CST</p>
				<div class="progress">
				  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
				    15%
				  </div>
				</div>
				<p>Others</p>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 13%">
				    13%
				  </div>
				</div>
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
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "10px 10px";
    document.getElementById("logo").style.width = "80px";
    document.getElementById("logo").style.height = "80px";
  } else {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementByIs("logo").style.width = "90px";
    document.getElementById("logo").style.height = "90px";
  }
}
</script>

<script>
	function clearAnswers(){
  $("img").each(function(){
    $(this).remove();
  })
}

function markIncorrect(el){
  var img = new Image();
  img.src = 'http://www.littletherese.com/x.jpg';
  el.append(img);
}

function markCorrect(el){
  var img = new Image();
  img.src = 'http://www.littletherese.com/tick.jpg';
  el.append(img);
}

$("form").on("submit", function(e){
  e.preventDefault();
  clearAnswers();

  $questions = $(".question");
  $questions.each(function(){
    var answer = $(this).find("input:checked"),
        key = answer.attr("name"),
        val = answer.attr("value");

    if(answer.length === 0){
      markIncorrect($(this).find("p"));
    } else if (answers[key] !== val){
      markIncorrect($(this).find("p"));
    } else {
      markCorrect(answer.parent());
    }
  });
});

var answers = {
  "radio1": "a",
  "radio2": "b",
  "radio3": "c",
  "radio4": "d",
  "radio5": 
  "radio6": 
}

</script>
<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }
</script>
</html>
<?php
	if(count($_POST)>0){
		$ans1=$_POST['radio1'];
		$ans2=$_POST['radio2'];
		$ans3=$_POST['radio3'];
		$ans4=$_POST['radio4'];
		$ans5=$_POST['radio5'];
		$ans6=$_POST['radio6'];
		
		$oriArray=array("Art Club","Badminton Club","Basktetball Club","Boat Club","Chess Club","Dance Club","English Club"
					,"Hiking Club","History Club","Literature Association","Music Club","Performance Club","Photography Club"
					,"Swimming Club","Tennis Club","CST","YTU Men Football Team","YTU Women Football Team");
		
		$condiArray=array();
		
		switch($ans1){
			case 'a' : $condiArray=array("Chess Club","Dance Club","English Club","History Club","Swimming Club","Literature Association","Music Club","Art Club");break;
			case 'b' : $condiArray=array("Photography Club","CST","Badminton Club","Boat Club","Hiking Club","Literature Association","Music Club","Performance Club","Tennis Club","YTU Men Football Team","YTU Women Football Team");break;
			case 'c' : $condiArray=array("Boat Club","Hiking Club","Art Club","Basktetball Club","CST","Music Club","Photography Club");
		}
		
		$count=0;
		foreach($oriArray as $ori){
			if(!in_array($ori,$condiArray)){
				$oriArray=array_diff($oriArray, array($ori));
			}
			$count++;
		}

			
		unset($condiArray);
		$condiArray=array();
		switch($ans2){
			case 'a' : $condiArray=array("Literature Association","Art Club","Chess Club","Photography Club","YTU Men Football Team","YTU Women Football Team","Badminton Club","Basktetball Club","Performance Club");break;
			case 'b' : $condiArray=array("Boat Club","Dance Club","English Club","Hiking Club","History Club","Music Club","Swimming Club","Tennis Club","CST");
		}
		
		$count=0;
		foreach($oriArray as $ori){
			if(!in_array($ori,$condiArray)){
				$oriArray=array_diff($oriArray, array($ori));
			}
			$count++;
		}

		unset($condiArray);
		$condiArray=array();
		switch($ans3){
			case 'a' : $condiArray=array("Literature Association","Art Club","Chess Club","Music Club","Performance Club","History Club","English Club","Photography Club","CST");break;
			case 'b' : $condiArray=array("Hiking Club","Boat Club","Swimming Club","Tennis Club","CST","Photography Club");break;
			case 'c' : $condiArray=array("Hiking Club","Photography Club","Dance Club","CST","Boat Club","Tennis Club");
		}
		
		$count=0;
		foreach($oriArray as $ori){
			if(!in_array($ori,$condiArray)){
				$oriArray=array_diff($oriArray, array($ori));
			}
			$count++;
		}
		
		unset($condiArray);
		$condiArray=array();
		switch($ans4){
			case 'a' : $condiArray=array("Basktetball Club","Badminton Club","Literature Association","Art Club","Chess Club","Photography Club","CST","Music Club","Performance Club","English Club","Dance Club","History Club");break;
			case 'b' : $condiArray=array("English Club","YTU Men Football Team","YTU Women Football Team","Basktetball Club","Badminton Club","Swimming Club","Hiking Club","Boat Club","History Club","Tennis Club","Literature Association");
		}
		
		$count=0;
		foreach($oriArray as $ori){
			if(!in_array($ori,$condiArray)){
				$oriArray=array_diff($oriArray, array($ori));
			}
			$count++;
		}
		
		
		unset($condiArray);
		$condiArray=array();
		switch($ans5){
			case 'a' : $condiArray=array("Literature Association","Art Club","English Club","History Club","Music Club","Dance Club","Performance Club","Photography Club","Dance Club");break;
			case 'b' : $condiArray=array("Literature Association","English Club","YTU Men Football Team","YTU Women Football Team","Basktetball Club","Badminton Club","Swimming Club","Hiking Club","CST","Boat Club","Photography Club","Dance Club","Chess Club","Tennis Club");
		}
		
		$count=0;
		foreach($oriArray as $ori){
			if(!in_array($ori,$condiArray)){
				$oriArray=array_diff($oriArray, array($ori));
			}
			$count++;
		}
		
		
		unset($condiArray);
		$condiArray=array();
		switch($ans6){
			case 'a' : $condiArray=array("Literature Association","Chess Club","English Club","History Club","YTU Men Football Team","YTU Women Football Team");break;
			case 'b' : $condiArray=array("Literature Association","Dance Club","Photography Club","Performance Club","Music Club","Art Club","CST");break;
			case 'c' : $condiArray=array("Photography Club","CST","YTU Men Football Team","YTU Women Football Team","Basktetball Club","Badminton Club","Hiking Club","Boat Club","Tennis Club");
		}
		
		$count=0;
		foreach($oriArray as $ori){
			if(!in_array($ori,$condiArray)){
				$oriArray=array_diff($oriArray, array($ori));
			}
			$count++;
		}
	
		foreach($oriArray as $v){
			echo '<script type="text/javascript" language="Javascript">window.open("result.php?name='.$v.'");</script>';
		}
	}
?>