<?php
	session_start();
	$vbt_id = $_POST["vbt_id"];
	//$vbt_id = 2;
	
	include("config.php");
	
	$sql_text = "SELECT * FROM `vbt` WHERE `ID`='$vbt_id'";
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
	$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
	$result=mysqli_query($db, $sql_text);
	
	$json = array();
	
	while($row = mysqli_fetch_array($result)){
		//$json[] = $row;
		
		$vbt_id = $row["ID"];
		$vbt_elnevezes = $row["vbt_elnevezes"];
		$uzemelteto_nev = $row["vizmu_neve"];
		$vizellato_rendszer = $row["vizellato_megnevezes"];
		$hataly_vizbazis = $row["hataly_vizbazis"];
		$hataly_kezeles = $row["hataly_kezeles"];
		$hataly_halozat = $row["hataly_halozat"];
		$hataly_fogyaszto = $row["hataly_fogyaszto"];
		$hataly_tarozas = $row["hataly_tarozas"];
		$hataly_atvetel = $row["hataly_atvetel"];
		$hataly_atadas = $row["hataly_atadas"];
		
		$_SESSION["VBT_Id"] = $vbt_id;
		$_SESSION["VBT_Nev"] = $vbt_elnevezes;
		$_SESSION["VBT_Uzemelteto_Nev"] = $uzemelteto_nev;
		$_SESSION["VBT_Vizellato_Rendszer"] = $vizellato_rendszer;
		$_SESSION["VBT_Hataly_Vizbazis"] = $hataly_vizbazis;
		$_SESSION["VBT_Hataly_Kezeles"] = $hataly_kezeles;
		$_SESSION["VBT_Hataly_Halozat"] = $hataly_halozat;
		$_SESSION["VBT_Hataly_Fogyaszto"] = $hataly_fogyaszto;
		$_SESSION["VBT_Hataly_Tarozas"] = $hataly_tarozas;
		$_SESSION["VBT_Hataly_Atvetel"] = $hataly_atvetel;
		$_SESSION["VBT_Hataly_Atadas"] = $hataly_atadas;
		
		$json_arr[] = array("hataly_vizbazis" => $hataly_vizbazis, "hataly_kezeles" => $hataly_kezeles, "hataly_halozat" => $hataly_halozat, "hataly_fogyaszto" => $hataly_fogyaszto, "hataly_tarozas" => $hataly_tarozas, "hataly_atvetel" => $hataly_atvetel, "hataly_atadas" => $hataly_atadas);	
	}
	
	mysqli_free_result($result);
	mysqli_close($db);
	echo json_encode($json_arr, JSON_UNESCAPED_UNICODE);
	/*foreach($json as $id => $item){
		
		$vbt_id = $item["ID"];
		$vbt_elnevezes = $item["vbt_elnevezes"];
		$uzemelteto_nev = $item["vizmu_neve"];
		$vizellato_rendszer = $item["vizellato_megnevezes"];
		$hataly_vizbazis = $item["hataly_vizbazis"];
		$hataly_kezeles = $item["hataly_kezeles"];
		$hataly_halozat = $item["hataly_halozat"];
		$hataly_fogyaszto = $item["hataly_fogyaszto"];
		$hataly_tarozas = $item["hataly_tarozas"];
		$hataly_atvetel = $item["hataly_atvetel"];
		$hataly_atadas = $item["hataly_atadas"];
		
		
		
		$_SESSION["VBT_Id"] = $vbt_id;
		$_SESSION["VBT_Nev"] = $vbt_elnevezes;
		$_SESSION["VBT_Uzemelteto_Nev"] = $uzemelteto_nev;
		$_SESSION["VBT_Vizellato_Rendszer"] = $vizellato_rendszer;
		$_SESSION["VBT_Hataly_Vizbazis"] = $hataly_vizbazis;
		$_SESSION["VBT_Hataly_Kezeles"] = $hataly_kezeles;
		$_SESSION["VBT_Hataly_Halozat"] = $hataly_halozat;
		$_SESSION["VBT_Hataly_Fogyaszto"] = $hataly_fogyaszto;
		$_SESSION["VBT_Hataly_Tarozas"] = $hataly_tarozas;
		$_SESSION["VBT_Hataly_Atvetel"] = $hataly_atvetel;
		$_SESSION["VBT_Hataly_Atadas"] = $hataly_atadas;
	}
	
	echo "VBT ID: ", $_SESSION["VBT_Id"], "<br>", 
		 "VBT Név: ", $_SESSION["VBT_Nev"], "<br>",
		 "Üzemeltető Neve: ", $_SESSION["VBT_Uzemelteto_Nev"], "<br>",
		 "Vizellátó rendszer: ", $_SESSION["VBT_Vizellato_Rendszer"], "<br>",
		 "Hatály vízbázis: ", $_SESSION["VBT_Hataly_Vizbazis"], "<br>",
		 "Hatály Kezelés: ", $_SESSION["VBT_Hataly_Kezeles"], "<br>",
		 "Hatály Hálózat: ", $_SESSION["VBT_Hataly_Halozat"], "<br>",
		 "Hatály Fogyasztó: ", $_SESSION["VBT_Hataly_Fogyaszto"], "<br>",
		 "Hatály Tározás: ", $_SESSION["VBT_Hataly_Tarozas"], "<br>",
		 "Hatály Átvétel: ", $_SESSION["VBT_Hataly_Atvetel"], "<br>",
		 "Hatály Átadás: ", $_SESSION["VBT_Hataly_Atadas"], "<br>";
	*/
?>