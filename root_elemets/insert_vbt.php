<?php
session_start();
include("config.php");
//include("session.php");
//session_start();
			//$vbt_nev="PHP generalt VBT1";	
			//$uzemeltet_ID="Teszteléshez Minden adatos Cég Üzemeltető";
			//$uzemeltet_valaszt=8;
			//$vizellato_valaszt="Teszteléshez MInden adattal Vízellátó rendszer";
			
			
			$vbt_nev=$_POST["vbt_nev"];	
			$uzemeltet_ID=$_POST["uzemeltet_id"];
			$uzemeltet_valaszt=$_POST["uzemeltet_valaszt2"];
			$vizellato_valaszt=$_POST["vizellato_valaszt2"];
			$now = new DateTime();
			$letrehozva=date("Y-m-d H:i:s");
			echo $letrehozva;
			$modositva=date("Y-m-d H:i:s");
			echo $modositva;
			$lezarva=date("Y-m-d H:i:s");
			echo $lezarva;
			$vbt_hataly_vizbazis=isset($_POST["vbt_hataly_vizbazis"])?1:0;
			//$_SESSION["hataly_vizbazis"]=$vbt_hataly_vizbazis;
			$vbt_hataly_vizkezeles=isset($_POST["vbt_hataly_vizkezeles"])?1:0;
			//$_SESSION["hataly_vizkezeles"]=$vbt_hataly_vizkezeles;
			$vbt_hataly_halozat=isset($_POST["vbt_hataly_halozat"])?1:0;
			//$_SESSION["hataly_halozat"]=$vbt_hataly_halozat;
			$vbt_hataly_fogyaszto=isset($_POST["vbt_hataly_fogyaszto"])?1:0;
			//$_SESSION["hataly_fogyaszto"]=$vbt_hataly_fogyaszto;
			$vbt_hataly_tarozas=isset($_POST["vbt_hataly_tarozas"])?1:0;
			//$_SESSION["hataly_tarozas"]=$vbt_hataly_tarozas;
			$vbt_hataly_atvetel=isset($_POST["vbt_hataly_atvetel"])?1:0;
			//$_SESSION["hataly_atvetel"]=$vbt_hataly_atvetel;
			$vbt_hataly_atadas=isset($_POST["vbt_hataly_atadas"])?1:0;
			//$_SESSION["hataly_atadas"]=$vbt_hataly_atadas;
			$kulso_szakerto=$_POST["kulso_szakerto"];
			$date_uzem_jova=$_POST["date_uzem_jova"];
			$OKK_szakv_kiadas=$_POST["OKK_szakv_kiadas"];
			
					
		
        $sql_text= "INSERT INTO vbt( 
						vbt_elnevezes, 
						vizmu_neve, 
						vizellato_megnevezes, 
						letrehozva, 
						modositva, 
						lezarva,
						hataly_vizbazis,
						hataly_kezeles,
						hataly_halozat,
						hataly_fogyaszto,
						hataly_tarozas,
						hataly_atvetel,
						hataly_atadas,
						kulso_szakerto,
						jovahagy_uzemelteto,
						okk_szakv_dat,
						UZEMELTETO_ID
						) 
						VALUES(?,?,?, ?, ?, ? ,?,?,?,?,?,?,?,?,?,?,? )";
            $stmt = mysqli_prepare($db, $sql_text);
			$stmt->bind_param("sssssssssssssssss",
								$vbt_nev, 
								$uzemeltet_valaszt, 
								$vizellato_valaszt,
								$letrehozva,
								$modositva,
								$lezarva,
								$vbt_hataly_vizbazis,
								$vbt_hataly_vizkezeles,
								$vbt_hataly_halozat,
								$vbt_hataly_fogyaszto,
								$vbt_hataly_tarozas,	
								$vbt_hataly_atvetel,
								$vbt_hataly_atadas,	
								$kulso_szakerto,
								$date_uzem_jova,
								$OKK_szakv_kiadas,
								$uzemeltet_ID
								);
			if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$stmt->execute();
			//$sql_text="UPDATE vbt SET letrehozva=now() modositva=now() lezarva=now() WHERE vbt_elnevezes='" .$vbt_nev . "'";
			//$result=mysqli_query($db, $sql_text);
		//mysqli_query($db, $sql_text);
		mysqli_close($db);
		
		//header("location: vbt_main.php")
		
?>


