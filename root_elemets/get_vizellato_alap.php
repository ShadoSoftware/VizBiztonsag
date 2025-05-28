<?php
$vizellato_rendszer_neve=$_POST["vizellato_rendszer_neve"];	

	include("config.php");	
			
	$sql_text= "SELECT * FROM vizellat_alap WHERE `vizellato_rendszer_neve`='$vizellato_rendszer_neve' ";
		   
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
			
	$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
	$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
	$result=mysqli_query($db, $sql_text);
		
		 
	$json_arr=array();
	while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
			
		$unev = $row['UZEMELTETO'];
		$v_r_nev = $row['vizellato_rendszer_neve'];
		$v_r_irsz = $row['vizellato_rendszer_IRSZ'];
		$v_r_telepules = $row['vizellato_rendszer_telepulesnev'];
		$v_r_kozter_nev = $row['vizellato_rendszer_kozter_nev'];
		$v_r_kozter_jelleg = $row['vizellato_rendszer_kozter_jelleg'];
		$v_r_hsz = $row['vizellato_rendszer_hsz'];
		$vsz_jelleg = $row['vizszolg_jelleg'];
		$szemelyek = $row['ellatott_szemelyek_szama'];
		$e_i_fogy = $row['evi_ivoviz_fogy'];
		$e_e_fogy = $row['evi_egyeb_fogy'];
		$u_engedely_szam = $row['uzemeltet_enged_szam_01'];
		$u_engedely_datum = $row['uzemeltet_enged_dat_01'];
			
		$json_arr[] = array("UZEMELTETO" => $unev, "vizellato_rendszer_neve" => $v_r_nev, "vizellato_rendszer_IRSZ" => $v_r_irsz, "vizellato_rendszer_telepulesnev" => $v_r_telepules, "vizellato_rendszer_kozter_nev" => $v_r_kozter_nev, "vizellato_rendszer_kozter_jelleg" => $v_r_kozter_jelleg, "vizellato_rendszer_hsz" => $v_r_hsz, "vizszolg_jelleg" => $vsz_jelleg, "ellatott_szemelyek_szama" => $szemelyek, "evi_ivoviz_fogy" => $e_i_fogy, "evi_egyeb_fogy" => $e_e_fogy, "uzemeltet_enged_szam_01" => $u_engedely_szam, "uzemeltet_enged_dat_01" => $u_engedely_datum);	
			
	}
		
	mysqli_free_result($result);
	mysqli_close($db);
		
	echo json_encode($json_arr, JSON_UNESCAPED_UNICODE);
?>