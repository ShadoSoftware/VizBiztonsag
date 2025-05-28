<?php session_start();?>
<?php
$vizellat_egyseg=$_POST["vizellat_egyseg"];	
//echo $vizellat_egyseg;
$veszely_tipus=$_POST["veszely_tipus"];	
//echo $veszely_tipus;
$veszely_specifikacioja=$_POST["veszely_specifikacioja"];
//echo $veszely_specifikacioja;
$veszely_technologiaja= $_POST["veszely_technologiaja"];	



//$vizellat_egyseg=8;
//$veszely_tipus=1;
//$veszely_specifikacioja=0;
//$veszely_technologiaja=0;

										//header('Content-Type: text/html; charset=utf-8'); 
		  include("config.php");
		  
			
			
			//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		   //$sql_text="SELECT * FROM `veszely_azonositas` WHERE `vizellatas_egyseg_tipus_id`=1 AND `vizkezel_spec_ID`=0 AND `vizkezel_tech_ID`=0 AND `veszely_tipusa`=2";
		  $sql_text= "SELECT * FROM veszely_azonositas WHERE `vizellatas_egyseg_tipus_id`='$vizellat_egyseg' AND `vizkezel_spec_ID`='$veszely_specifikacioja' AND `vizkezel_tech_ID`='$veszely_technologiaja' AND `veszely_tipusa`='$veszely_tipus'";
		   if (mysqli_connect_errno()) {
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$result=mysqli_query($db, $sql_text);
		
		 
		  

		
			$json = array();
			$json_arr=array();
		  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
			 $json[] = $row;
			 $id = $row['UID'];
			$azonositas = $row['azonositas'];

			$json_arr[] = array("UID" => $id, "azonositas" => $azonositas);	
			
		  }
		 

		mysqli_free_result($result);
		mysqli_close($db);
		
		//$display_string='<select class="form-control" id="veszely_azon" name="veszely_azon">'; 
		
			
			$display_string='<option>Kérem válasszon a listából!</option>';
		foreach($json as $id => $item) {
				$display_string.='<option value="'.$item["UID"].'">'.$item["UID"].$item["azonositas"].'</option>';
			
			}
					
											
				
															
			/* $display_string2.="}"; */
			
		//$display_string.="</select>" ;
//echo json_encode(display_string2);
// echo $display_string;
 echo json_encode($json_arr, JSON_UNESCAPED_UNICODE);
// $json2=json_encode ($json);
 //echo $json2;
//echo json_encode($json);
//echo $valtozok;
	?>