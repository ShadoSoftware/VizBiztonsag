<?php
$uzemelteto_hazszam=$_POST["hazszam"];
$id = $_POST["id"];

	include("config.php");

	$sql_text = "UPDATE uzemeltet_alap SET `uzemelteto_hsz`='$uzemelteto_hazszam' WHERE ID = '$id'";
	
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
	header("location: uzemeltet_alap_szerk.php");
?>