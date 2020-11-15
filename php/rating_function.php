<?php
	$rating=$_GET['rating'];
	$club_id=$_GET['club_id'];
	
	$con = new mysqli("localhost:3310","root","","campuscompanion");
	
	$query="INSERT INTO rating_data VALUES(?,?)";
	$stmt=$con->prepare($query);
	$stmt->bind_param('ss',$club_id,$rating);

	$result=$stmt->execute();
	if($result){
		echo "<script type='text/javascript'>alert('Rating process successful.');
					window.location='../club.php?club_id=".$club_id."';
					</script>";
	}
?>