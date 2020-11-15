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
			echo '<script type="text/javascript" language="Javascript">window.open("../result.php?name='.$v.'");</script>';
		}
	}
?>