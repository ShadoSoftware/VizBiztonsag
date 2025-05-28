<?php
$vizbazis=$_GET["bazis"];	
											//header('Content-Type: text/html; charset=utf-8'); 
		  include("config.php");
		  //session_start();
			
			
			//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		   $sql_text= "SELECT * FROM vizmutelep WHERE vizbazis='$vizbazis'";
		   if (mysqli_connect_errno()) {
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$result=mysqli_query($db, $sql_text);
		
		 
		  

		  
			$json = array();
		  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
			  $json[] = $row;
		
		  }
		
		mysqli_free_result($result);
		mysqli_close($db);
		
		$display_string= '<table class="table table-bordred table-striped">
				<tbody>
					<tr><th width="25"><input type="checkbox" id="checkall"></th><th>Átvett víz</th><th>Vízműtelep neve</th><th>Vízműtelep elhelyezkedése</th><th>Technológia száma</th><th>Fő eljárás</th><th>Engedélyezett kapacitás</th><th>Átlagos teljesítmény</th><th>Szerkeszt</th><th>Töröl</th></tr>' ;
		foreach($json as $id => $item) {
				$display_string.= '<tr>
				<td width="25">
				<input type="checkbox" id="checkall"></td>
				<td>'.$item["atvett_viz"].'</td>
				<td>'.$item["vizmutelep_neve"].'</td>
				<td>'.$item["elhelyezkedes"].'</td>
				<td>'.$item["technologia_szama"].'</td>
				<td>'.$item["fo_eljaras"].'</td>
				<td>'.$item["eng_kapacitas"].'</td>
				<td>'.$item["atlag_teljesitmeny"].'</td>
				<td><button type="button" id="id" class="btn btn-warning btn-xs update">Megnyit</button></td>
				<td><button type="button" id="id" class="btn btn-danger btn-xs delete">Töröl</button></td>
				</tr>';
			}
			
		$display_string.= '</tbody></table>' ;
	
  echo $display_string;
 
	?>