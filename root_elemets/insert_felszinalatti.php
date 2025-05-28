<?php

include("config.php");

	$felszin_alatti_vizbazis=$_POST["felszin_alatti_vizbazis"];	
	$fa_vizbazis_neve=$_POST["fa_vizbazis_neve"];	
	$fa_vizellato_rendszer_neve=$_POST["fa_vizellato_rendszer_neve"];
	$ff_fajta="NA";
	$ff_kivet_mod="NA";
	$serulekeny=$_POST["serulekeny"];
	if($serulekeny=="védett"){
		$serulekeny1="NA";
		$serulekeny2="NA";
		$serulekeny3="NA";
	}else{
		$serulekeny1=$_POST["serulekeny11"];
		$serulekeny2=$_POST["serulekeny21"];
		$serulekeny3=$_POST["serulekeny31"];
	}
	//$serulekeny1=$_POST["serulekeny11"];//serulekeny_bazi viz
	//$serulekeny2=$_POST["serulekeny21"]; //kivetel modja, sekely melysegu vagy melyfurasu
	//$serulekeny3=$_POST["serulekeny31"];	//asott kutak
	$vizgyujto_neve2=$_POST["vizgyujto_neve2"];
	$vizkivetel2=$_POST["vizkivetel2"];		
	$kutakszama2=$_POST["kutakszama2"]; //vizkiveteli muvek szama, kutak szama
	$vizbazis_leiras2=$_POST["vizbazis_leiras2"];


	$sql_text= "INSERT INTO vizbazis_alap ( 
						 
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
						
				
			
            
			if($stmt = mysqli_prepare($db, $sql_text)){
			
			$stmt->bind_param("sssssssssssss",
								$felszin_alatti_vizbazis,
								$fa_vizbazis_neve,
								$fa_vizellato_rendszer_neve,
								$ff_fajta,
								$vizgyujto_neve2,
								$vizkivetel2,
								$vizbazis_leiras2,
								$ff_kivet_mod,
								$kutakszama2,
								$serulekeny,
								$serulekeny1,
								$serulekeny2,
								$serulekeny3
								);
			}
			if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$stmt->execute();
		//mysqli_query($db, $sql_text);
		mysqli_close($db);



header("location: vizbazis_alap.php")




?>