<?php
//$uzemelteto_neve=$_POST["uzemelteto_neve"];	
$uzemeltet_id= $_POST["uzemelteto_id"];
//$uzemeltet_id=3;
	include("config.php");	
			
	$sql_text= "SELECT * FROM uzemeltet_alap WHERE `ID`='$uzemeltet_id' ";
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
	$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
	$result=mysqli_query($db, $sql_text);
		 
	$json_arr=array();
		  
	while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
		$nev = $row['uzemelteto_neve'];
		$irsz = $row['uzemelteto_IRSZ'];
		$telepules = $row['uzemelteto_telepulesnev'];
		$kozter_nev = $row['uzemelteto_kozter_nev'];
		$kozter_jelleg = $row['uzemelteto_kozter_jelleg'];
		$hsz = $row['uzemelteto_hsz'];
		$kapcs_nev = $row['kapcs_tarto_nev'];
		$kapcs_tel = $row['kapcs_tart_telefon'];
		$jovahagy_nev = $row['jovahagy_szemely_nev'];
		$jovahagy_beoszt = $row['jovahagy_szemely_beosztas'];
			
		$json_arr[] = array("uzemelteto_neve" => $nev, "uzemelteto_IRSZ" => $irsz, "uzemelteto_telepulesnev" => $telepules, "uzemelteto_kozter_nev" => $kozter_nev, "uzemelteto_kozter_jelleg" => $kozter_jelleg, "uzemelteto_hsz" => $hsz, "kapcs_tarto_nev" => $kapcs_nev, "kapcs_tart_telefon" => $kapcs_tel, "jovahagy_szemely_nev" => $jovahagy_nev, "jovahagy_szemely_beosztas" => $jovahagy_beoszt);	
			
	}
		
	mysqli_free_result($result);
	mysqli_close($db);
	echo json_encode($json_arr, JSON_UNESCAPED_UNICODE);
?>