<?php
session_start();
include("config.php");
//$id=25;
$id=$_POST["id"];
$_SESSION["vbt_id"]=$id;



$sql_text= "SELECT * FROM vbt WHERE `ID`='$id'";
		   if (mysqli_connect_errno()) {
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$result=mysqli_query($db, $sql_text);
		
		 
		  

		  
			//$json = array();
			$json_arr=array();
		  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
			// $json[] = $row;
			//$_SESSION["vbt_id"]=$row["ID"];
			//echo $row["hataly_vizbazis"]."</br>";
			$_SESSION["uzemelteto_neve"]=$row["vizmu_neve"];
			$_SESSION["hataly_vizbazis"]= $row["hataly_vizbazis"];
			//echo "Sessionbol vizbazis: ".$_SESSION["hataly_vizbazis"]."</br>";
			//echo "beolvasott vizkezeles: ";
			//echo $row["hataly_kezeles"]."</br>";
			$_SESSION["hataly_kezeles"]= $row["hataly_kezeles"];
			//echo "sessionbol vizkezeles: ".$_SESSION["hataly_kezeles"]."</br>";
			//echo $row["hataly_halozat"]."</br>";
			$_SESSION["hataly_halozat"]= $row["hataly_halozat"];
			//echo $row["hataly_tarozas"]."</br>";
			$_SESSION["hataly_tarozas"]= $row["hataly_tarozas"];
			//echo $row["hataly_atvetel"]."</br>";
			$_SESSION["hataly_atvetel"]= $row["hataly_atvetel"];
			//echo $row["hataly_atadas"]."</br>";
			$_SESSION["hataly_atadas"]= $row["hataly_atadas"];
			//echo $row["hataly_fogyaszto"]."</br>";
			$_SESSION["hataly_fogyaszto"]=$row["hataly_fogyaszto"];
			//$json_arr[] = array("ID" => $id, "vizellato_rendszer_neve" => $vizellato);	
			
		  }
		
		mysqli_free_result($result);
		
		$sql_text="UPDATE `work_on_vbt` SET `VBT_ID`='$id', 
		`hataly_vizbazis`=".$_SESSION['hataly_vizbazis'].", 
		`hataly_kezeles`=".$_SESSION['hataly_kezeles'].", 
		`hataly_halozat`=".$_SESSION['hataly_halozat'].",
		`hataly_tarozas`=".$_SESSION['hataly_tarozas'].",
		`hataly_atvetel`=".$_SESSION['hataly_atvetel'].",
		`hataly_atadas`=".$_SESSION['hataly_atadas'].", 
		`hataly_fogyaszto`=".$_SESSION['hataly_fogyaszto']." WHERE `ID`=1";
		mysqli_query($db,$sql_text);
		mysqli_close($db);
		echo true;


?>