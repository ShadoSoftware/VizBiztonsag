<?php
$uzemelteto_telepules=$_POST["telepules"];
$id = $_POST["id"];

	include("config.php");

	$sql_text = "UPDATE uzemeltet_alap SET `uzemelteto_telepulesnev`='$uzemelteto_telepules' WHERE ID = '$id'";
	
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