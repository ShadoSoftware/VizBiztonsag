<?php session_start();?>
<?php
$specifikacio=$_POST["specifikacio"];	
		
		  include("config.php");
		  $sql_text= "SELECT * FROM vizkezel_tech_lista WHERE `vizkezel_spec_ID`='$specifikacio' ";
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
			 $id = $row['UID'];
			$technologia = $row['technologia'];

			$json_arr[] = array("UID" => $id, "technologia" => $technologia);	
			
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