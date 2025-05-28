<?php
session_start();
include("config.php");




$sql_text= "SELECT `VBT_ID` FROM work_on_vbt WHERE `ID`=1 ";
		   if (mysqli_connect_errno()) {
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$result=mysqli_query($db, $sql_text);
			
			$json_arr=array();
		  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
			 //$json[] = $row;
			 $id = $row['VBT_ID'];
			 echo $id;
			

			$json_arr[] = array("VBT_ID" => $id);	
			return $id;
		  }
			$result_txt=$json_arr['VBT_ID'];
			$sql_text=	"SELECT * FROM vbt WHERE `ID`='$id' ";	 
		  

		  $result=mysqli_query($db, $sql_text);
			
			
		  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
			 $json[] = $row;
			
			$json_arr[] = array("hataly_kezeles" => $row['hataly_kezeles'], "hataly_atadas" => $row['hataly_atadas'], "hataly_halozat" => $row['hataly_halozat'], "hataly_tarozas" => $row['hataly_tarozas'],"hataly_atvetel" => $row['hataly_atvetel'], );	
			
		  }
		
		mysqli_free_result($result);
		
		
		echo json_encode($json_arr, JSON_UNESCAPED_UNICODE);
		mysqli_close($db);
		


?>