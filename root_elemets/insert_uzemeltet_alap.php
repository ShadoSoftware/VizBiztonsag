<?php
include("config.php");
//include("session.php");
session_start();
			$uzemeltet_nev=$_POST["uzemeltet_nev"];	
			$ir_szam=$_POST["ir_szam"];
			$telepules=$_POST["telepules"];
			$kozter_nev=$_POST["kozter_nev"];
			$kozter_jelleg=$_POST["kozter_jelleg"];
			$hazszam=$_POST["hazszam"];
			$kapcsolat_szemely=$_POST["kapcsolat_szemely"];
			$kapcsolat_elerheto=$_POST["kapcsolat_elerheto"];
			$jovahagy_neve=$_POST["jovahagy_neve"];
			$jovahagy_beoszt=$_POST["jovahagy_beoszt"];
			
			
					
		//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $sql_text= "INSERT INTO uzemeltet_alap( 
						uzemelteto_neve, 
						uzemelteto_IRSZ, 
						uzemelteto_telepulesnev, 
						uzemelteto_kozter_nev, 
						uzemelteto_kozter_jelleg, 
						uzemelteto_hsz, 
						kapcs_tarto_nev, 
						kapcs_tart_telefon, 
						jovahagy_szemely_nev, 
						jovahagy_szemely_beosztas) VALUES(?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($db, $sql_text);
			$stmt->bind_param("ssssssssss",
								$uzemeltet_nev, 
								$ir_szam, 
								$telepules, 
								$kozter_nev, 
								$kozter_jelleg, 
								$hazszam, 
								$kapcsolat_szemely, 
								$kapcsolat_elerheto, 
								$jovahagy_neve, 
								$jovahagy_beoszt);
			if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$stmt->execute();
		//mysqli_query($db, $sql_text);
		mysqli_close($db);
		header("location: uzemeltet_alap.php")
?>


