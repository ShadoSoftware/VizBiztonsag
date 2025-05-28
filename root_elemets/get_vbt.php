<?php

$vbt_id= $_POST["vbt_id"];

	include("config.php");	
			
	$sql_text= "SELECT * FROM vbt WHERE `ID`='$vbt_id' ";
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
	$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
	$result=mysqli_query($db, $sql_text);
		 
	$json_arr=array();
		  
	while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
		$vbt_nev = $row['vbt_elnevezes'];
		$uzemelteto_nev = $row['vizmu_neve'];
		$vizellato_rendszer = $row['vizellato_megnevezes'];
			
		$json_arr[] = array("vbt_elnevezes" => $vbt_nev, "vizmu_neve" => $uzemelteto_nev, "vizellato_megnevezes" => $vizellato_rendszer);	
			
	}
		
	mysqli_free_result($result);
	mysqli_close($db);
	echo json_encode($json_arr, JSON_UNESCAPED_UNICODE);
?>