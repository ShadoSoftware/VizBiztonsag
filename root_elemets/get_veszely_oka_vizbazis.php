<?php
$azonositott_veszely=$_POST["azonositott_veszely"];	
//$azonositott_veszely=2;


										//header('Content-Type: text/html; charset=utf-8'); 
		  include("config.php");
		  
			
			
			//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		   //$sql_text="SELECT * FROM `veszely_azonositas` WHERE `vizellatas_egyseg_tipus_id`=1 AND `vizkezel_spec_ID`=0 AND `vizkezel_tech_ID`=0 AND `veszely_tipusa`=2";
		  $sql_text= "SELECT * FROM veszely_oka WHERE `vesz_azon_id`='$azonositott_veszely' ";
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
			
			 //$json[] = $row;
			 $id = $row['ID'];
			$vesz_ok = $row['vesz_ok'];

			$json_arr[] = array("ID" => $id, "vesz_ok" => $vesz_ok);	
			
		  }
		
		mysqli_free_result($result);
		mysqli_close($db);
		
		//$display_string='<select class="form-control" id="veszely_azon" name="veszely_azon">'; 
		
			
			//$display_string='<option>Kérem válasszon a listából!</option>';
		//foreach($json as $id => $item) {
				//$display_string.='<option value='.$item["ID"].'>'.$item["vesz_ok"].'</option>';
				//$id = $row['ID'];
				//$azonositas = $row['azonositas'];
						
											
		//		}
															
		
			
		//$display_string.="</select>" ;
	
 // echo $display_string;
  echo json_encode($json_arr, JSON_UNESCAPED_UNICODE);
// $json2=json_encode ($json);
 //echo $json2;
//echo json_encode($json);
	?>