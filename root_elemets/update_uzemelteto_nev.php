<?php
$uzemelteto_neve=$_POST["nev"];
$uzemelteto_hazszam=$_POST["hazszam"];
$uzemelteto_irszam=$_POST["irsz"];
$uzemelteto_jovahagyo=$_POST["jovahagy_szemely_nev"];
$uzemelteto_jovahagyo_beoszt=$_POST["jovahagy_szemely_beosztas"];
$uzemelteto_kapcsolattarto=$_POST["kapcs_tarto_nev"];
$uzemelteto_kapcsolattarto_elerheto=$_POST["kapcsolat_elerheto"];
$uzemelteto_kozter=$_POST["kozter_nev"];
$uzemelteto_kozter_jelleg=$_POST["kozter_jelleg"];
$uzemelteto_telepules=$_POST["telepules"];
$id=$_POST["id"];

	include("config.php");

	$sql_text = "UPDATE uzemeltet_alap SET `uzemelteto_neve`='$uzemelteto_neve', 
	`uzemelteto_hsz`='$uzemelteto_hazszam',
`uzemelteto_IRSZ`='$uzemelteto_irszam',
`jovahagy_szemely_nev`='$uzemelteto_jovahagyo',
`jovahagy_szemely_beosztas`='$uzemelteto_jovahagyo_beoszt',
`kapcs_tarto_nev`='$uzemelteto_kapcsolattarto',
`kapcs_tart_telefon`='$uzemelteto_kapcsolattarto_elerheto',
`uzemelteto_kozter_nev`='$uzemelteto_kozter',
`uzemelteto_kozter_jelleg`='$uzemelteto_kozter_jelleg',
`uzemelteto_telepulesnev`='$uzemelteto_telepules' 
	WHERE ID = '$id'";
	
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
	//header("location: uzemeltet_alap_szerk.php");
?>