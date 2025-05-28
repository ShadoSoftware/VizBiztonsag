<?php

include("config.php");
	$vizbazis_valaszt_cimke2=$_POST["vizbazis_valaszt_cimke2"];	
	$atvett_viz_cimke=$_POST["atvett_viz"];	

	$vizmutelep_neve_cimke=$_POST["vizmutelep_neve"];	
	$elhelyezkedes_cimke=$_POST["elhelyezkedes"];
	$technologia_szama_cimke=$_POST["technologia_szama"];
	$fo_eljaras_cimke=$_POST["fo_eljaras"];
	$eng_kapacitas_cimke=$_POST["eng_kapacitas"];
	$atlag_teljesitmeny_cimke=$_POST["atlag_teljesitmeny"];
	


	$sql_text= "INSERT INTO vizmutelep ( 
						vizbazis, 
						atvett_viz, 
						vizmutelep_neve, 
						elhelyezkedes, 
						technologia_szama, 
						fo_eljaras, 
						eng_kapacitas, 
						atlag_teljesitmeny) VALUES(
								'$vizbazis_valaszt_cimke2',
								'$atvett_viz_cimke',
								'$vizmutelep_neve_cimke',
								'$elhelyezkedes_cimke',
								'$technologia_szama_cimke',
								'$fo_eljaras_cimke',
								'$eng_kapacitas_cimke',
								'$atlag_teljesitmeny_cimke')";
						
				
			
            
			/*if($stmt = mysqli_prepare($db, $sql_text)){
			
			$stmt->bind_param("sssssss",
								$atvett_viz_cimke,
								$vizmutelep_neve_cimke,
								$elhelyezkedes_cimke,
								$technologia_szama_cimke,
								$fo_eljaras_cimke,
								$eng_kapacitas_cimke,
								$atlag_teljesitmeny_cimke
								);
			}*/
			if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			
			if (mysqli_query($db, $sql_text)) {
						//echo "New record created successfully";
						//header("location: vizkezeles_alap.php")
			} else {
				  echo "Error: " . $sql_text . "<br>" . mysqli_error($db);
			}
			
			//$stmt->execute();
		//mysqli_query($db, $sql_text);
		mysqli_close($db);



//header("location: vizkezeles_alap.php")




?>