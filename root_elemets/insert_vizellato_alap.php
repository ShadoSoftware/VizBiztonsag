<?php
include("config.php");
			//$vizellat_uzemeltet=$_POST["vizellat_uzemeltet"];
			$vizellat_uzemeltet;
			$vizellat_uzemeltet_ID=$_POST["vizellat_uzemeltet"];
			//$vizellat_uzemeltet_ID=1;
			
			$sql_text="SELECT * FROM uzemeltet_alap WHERE `ID`='$vizellat_uzemeltet_ID'";
			$result1= mysqli_query($db, $sql_text);
			
			$json_arr=array();
		  while($row = mysqli_fetch_array($result1)) { //mysqli_fetch_row($result)
			
			 //$json[] = $row;
			 $id = $row['ID'];
			$uzemelteto = $row['uzemelteto_neve'];
			//echo $uzemelteto;
			$vizellat_uzemeltet=$uzemelteto;

			//$json_arr[] = array("ID" => $id, "uzemelteto_neve" => $uzemelteto);	
			
		  }
			
			//echo $result1;
			//$vizellat_uzemeltet=$json_arr["uzemelteto_neve"];
			
			
			$vizellat_nev=$_POST["vizellat_nev"];
			$vizellat_ir_szam=$_POST["vizellat_ir_szam"];
			$vizellat_telepules=$_POST["vizellat_telepules"];
			$vizellat_kozter_nev=$_POST["vizellat_kozter_nev"];
			$vizellat_kozter_jelleg=$_POST["vizellat_kozter_jelleg"];
			$vizellat_hazszam=$_POST["vizellat_hazszam"];
			$vizszolg_jelleg=$_POST["vizszolg_jelleg"];
			$ellatott_letszam=$_POST["ellatott_letszam"];
			$eves_atlag_ivoviz=$_POST["eves_atlag_ivoviz"];
			$eves_atlag_egyeb=$_POST["eves_atlag_egyeb"];
			$uzemeltet_eng_szam= $_POST["uzemeltet_eng_szam"];
			$eng_kelte= $_POST["eng_kelte"];
			//$kulso_szakerto=$_POST["kulso_szakerto"];
			//$date_uzem_jova=$_POST["date_uzem_jova"];
			//$OKK_szakv_kiadas=$_POST["OKK_szakv_kiadas"];
			
			
			
					
		//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $sql_text= "INSERT INTO vizellat_alap ( 
						UZEMELTETO,
						UZEMELTET_ID,
						vizellato_rendszer_neve, 
						vizellato_rendszer_IRSZ, 
						vizellato_rendszer_telepulesnev, 
						vizellato_rendszer_kozter_nev, 
						vizellato_rendszer_kozter_jelleg, 
						vizellato_rendszer_hsz, 
						vizszolg_jelleg, 
						ellatott_szemelyek_szama, 
						evi_ivoviz_fogy, 
						evi_egyeb_fogy,
						uzemeltet_enged_szam_01,
						uzemeltet_enged_dat_01) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
						
						
			
            
			if($stmt = mysqli_prepare($db, $sql_text)){
			
			$stmt->bind_param("ssssssssssssss",
								$vizellat_uzemeltet,
								$vizellat_uzemeltet_ID,								
								$vizellat_nev, 
								$vizellat_ir_szam, 
								$vizellat_telepules, 
								$vizellat_kozter_nev, 
								$vizellat_kozter_jelleg, 
								$vizellat_hazszam, 
								$vizszolg_jelleg, 
								$ellatott_letszam, 
								$eves_atlag_ivoviz,
								$eves_atlag_egyeb,
								$uzemeltet_eng_szam,
								$eng_kelte);
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


header("location: vizellato_alap.php")
?>