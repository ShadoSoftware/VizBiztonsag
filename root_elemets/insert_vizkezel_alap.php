<?php

include("config.php");

	
	
	$vizmutelep_neve_cimke=$_POST["vizmutelep_neve"];	
	$vizbazis_valaszt_cimke=$_POST["vizbazis_valaszt_cimke"];
	


	$sql_text= "INSERT INTO vizkezel_alap ( 
						 
						
						vizmutelep_neve, 
						) VALUES(
								
								'$vizmutelep_neve_cimke',
								'$vizbazis_valaszt_cimke'
								)";
						
				
			
            
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
						echo "New record created successfully";
			} else {
				  echo "Error: " . $sql_text . "<br>" . mysqli_error($db);
			}
			
			//$stmt->execute();
		//mysqli_query($db, $sql_text);
		mysqli_close($db);



//header("location: vizkezel_alap.php?openDialog()")




?>