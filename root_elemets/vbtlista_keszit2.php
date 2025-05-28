<?php
				  include("config.php");
				  session_start(); 
				  if(!isset($_POST["uzemeltetoID"])){
					  printf("nincs atkuldott adat");
				  }
				  $uzemelteto_id=$_POST["uzemeltetoID"];
				  $vizellato_id=$_POST["vizellatoID"];
				  
					$SESSION["uzemelteto_ID"]=$uzemelteto_id;
					
					$kiiras='<tbody><tr><th width="25"></th><th>VBT elnevezése</th><th>VERZIÓJA</th><th>Vízellátó rendszer megnevezése</th><th>Létrehozva</th><th>Utolsó módosítás</th><th>Szerkesztés</th></tr>';
				 
					$sql_text1= 'SELECT * FROM `vbt`  WHERE `archiv`=0 ORDER BY modositva DESC';
					$sql_text2= "SELECT * FROM `vbt`  WHERE `archiv`=0 AND `UZEMELTETO_ID`='$uzemelteto_id' AND `VIZELLATO_ID`='$vizellato_id' ORDER BY modositva DESC";
					if (mysqli_connect_errno()) {
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}
					$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
					$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
					if (isset($_POST["uzemeltetoID"])){
						//echo "<script>console.log('van uzemelteto')</script>";
						//echo $_SESSION["uzemelteto_neve"];
					$sql_text=$sql_text2;
					}else{
						$sql_text=$sql_text1;
					}
					$result=mysqli_query($db, $sql_text);

				    $json = array();
					while($row = mysqli_fetch_array($result)) { 
						$json[] = $row;
					}
				 
				mysqli_free_result($result);
				mysqli_close($db);
				
				
				foreach($json as $id => $item) {
						$date1=strtotime($item["letrehozva"]);
						$datum1=date('Y-m-d',$date1);
						$date2=strtotime($item["modositva"]);
						$datum2=date('Y-m-d',$date2);
						$kiiras.= '<tr id="row_id_'.$item["ID"].'"><td width="25"><input type="checkbox" id="checkall"></td><td>'.$item["vbt_elnevezes"].'</td><td>'.$item["vizmu_neve"].'</td><td>'.$item["vizellato_megnevezes"].'</td><td>'.$datum1.'</td><td>'.$datum2.'</td><td><button type="button" id="'.$item["ID"].'" class="btn btn-warning btn-xs update" onclick="getVBT('.$item["ID"].')">Betölt!</button></td></tr>';
						$kiiras.= '</tbody>';
					}
		echo $kiiras;
		  		 
  ?>
  