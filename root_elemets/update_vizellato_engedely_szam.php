<?php
$vizellato_engedely_szam=$_POST["engedely_szam"];
$id=$_POST["id"];

	include("config.php");

	$sql_text = "UPDATE vizellat_alap SET `uzemeltet_enged_szam_01`='$vizellato_engedely_szam' WHERE ID = '$id'";
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
	$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
	if(!$result=mysqli_query($db, $sql_text)){
		
		 exit(mysqli_error($db));
	}

	mysqli_close($db);
	header("location: vizellato_alap_szerk.php");
?>