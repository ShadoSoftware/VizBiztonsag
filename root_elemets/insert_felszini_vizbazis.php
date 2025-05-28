<?php
include("config.php");


	$felszini_vizbazis=$_POST["felszini_vizbazis"];	
	$ff_vizbazis_neve=$_POST["felszini_vizbazis_neve_cimke"];
	$ff_vizellato_rendszer_neve=$_POST["ff_vizellato_rendszer_neve_cimke"];
	$ff_fajta=$_POST["ff_fajta_cimke"];
	$ff_vizgyujto_neve=$_POST["ff_vizgyujto_neve_cimke"];
	$ff_vizkivetel=$_POST["ff_vizkivetel_cimke"];
	$ff_vizbazis_leiras=$_POST["ff_vizbazis_leiras_cimke"];
	$ff_kivet_mod=$_POST["ff_kivet_mod_cimke"];
	$ff_vizkivet_muvek=$_POST["ff_vizkivet_muvek_cimke"];
	$serulekeny="NA";
	$serulekeny1="NA";
	$serulekeny2="NA";
	$serulekeny3="NA";	


$sql_text="INSERT INTO vizbazis_alap( 
felszini, 
vizbazis_neve, 
ff_vizellato_rendszer_neve, 
ff_fajta, 
ff_vizgyujto_neve, 
ff_vizkivetel, 
ff_vizbazis_leiras, 
ff_kivet_mod, 
ff_vizkivet_muvek, 
serulekeny, 
serulekeny_bazis, 
fa_kivetel_mod, 
fa_sekely_mutargy) VALUES ('$felszini_vizbazis',
								'$ff_vizbazis_neve',
								'$ff_vizellato_rendszer_neve',
								'$ff_fajta',
								'$ff_vizgyujto_neve',
								'$ff_vizkivetel',
								'$ff_vizbazis_leiras',
								'$ff_kivet_mod',
								'$ff_vizkivet_muvek',
								'$serulekeny',
								'$serulekeny1',
								'$serulekeny2',
								'$serulekeny3')";
	/*$sql_text= "INSERT INTO vizbazis_alap ( 
						 
						felszini, 
						vizbazis_neve, 
						ff_vizellato_rendszer_neve, 
						ff_fajta, 
						ff_vizgyujto_neve, 
						ff_vizkivetel, 
						ff_vizbazis_leiras, 
						ff_kivet_mod, 
						ff_vizkivet_muvek, 
						serulekeny, 
						serulekeny_bazis, 
						fa_kivetel_mod, 
						fa_sekely_mutargy) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
						*/
						
			
            
			/*if($stmt = mysqli_prepare($db, $sql_text)){
			
			$stmt->bind_param("sssssssssssss",
								$felszini_vizbazis,
								$ff_vizbazis_neve,
								$ff_vizellato_rendszer_neve,
								$ff_fajta,
								$vizgyujto_neve,
								$ff_vizkivetel,
								$ff_vizbazis_leiras,
								$ff_kivet_mod,
								$ff_vizkivet_muvek,
								$serulekeny,
								$serulekeny1,
								$serulekeny2,
								$serulekeny3
								);
			}*/
			if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			//$stmt->execute();
			
			
			if (mysqli_query($db, $sql_text)) {
						echo "New record created successfully";
			} else {
				  echo "Error: " . $sql_text . "<br>" . mysqli_error($db);
			}
		//mysqli_query($db, $sql_text);
		mysqli_close($db);



header("location: vizbazis_alap.php")
?>