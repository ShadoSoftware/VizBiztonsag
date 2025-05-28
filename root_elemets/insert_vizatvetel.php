<?php
include("config.php");

	if($_POST["vizatvetel_cimke"]=="nincs"){
		
		$vizatvetel_cimke=$_POST["vizatvetel_cimke"];
		$atado_vizbazis_neve_cimke="NA";
		$vizatado_neve_cimke="NA";
		$vizatvetel5ev_cimke="NA";
		$atvett_vizmennyiseg_cimke=0;
		$vizkeveredes_select_cimke="NA";
		}else{
			
		$vizatvetel_cimke=$_POST["vizatvetel_cimke"];	
		$atado_vizbazis_neve_cimke=$_POST["atado_vizbazis_neve_cimke"];
		$vizatado_neve_cimke=$_POST["vizatado_neve_cimke"];	
		
				if($_POST["vizatvetel5ev_cimke"]=="nem"){
					$vizatvetel5ev_cimke=$_POST["vizatvetel5ev_cimke"];
					$atvett_vizmennyiseg_cimke=0;
					$vizkeveredes_select_cimke="NA";
				}else{
					$vizatvetel5ev_cimke=$_POST["vizatvetel5ev_cimke"];
					$atvett_vizmennyiseg_cimke=$_POST["atvett_vizmennyiseg_cimke"];
					$vizkeveredes_select_cimke=$_POST["vizkeveredes_select_cimke"];
					
				}
			
		}
		
	
	
		


			$sql_text="INSERT INTO vizatvetel_alap( 
			vizatvetel_van, 
			atado_vizbazis_neve, 
			atado_vizellato_neve, 
			vizatvetel5ev, 
			atvett_vizmennyiseg, 
			vizkeveredes_van 
			) VALUES (	'$vizatvetel_cimke',
						'$atado_vizbazis_neve_cimke',
						'$vizatado_neve_cimke',
						'$vizatvetel5ev_cimke',
						'$atvett_vizmennyiseg_cimke',
						'$vizkeveredes_select_cimke')";
	
            
			
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
		
		mysqli_close($db);



//header("location: vizatvetel_alap.php")
?>