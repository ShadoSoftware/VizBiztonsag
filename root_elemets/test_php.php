<?php
include("device_login2.php");

if($_GET){
	$query=$_GET['query'];
	$param = $_GET['param'];
}
else{
	$query = $argv[1];
	$param = $argv[2];
}

if($query == "vbt"){
	$sql = "Select id,vizmu_neve,vbt_elnevezes from vbt";
}
elseif($query == "uzemelteto"){
	$sql = "SELECT DISTINCT uzemelteto_telepulesnev, uzemelteto_neve, kapcs_tarto_nev FROM uzemeltet_alap";
}
elseif($query == "uzemelteto_nev"){
	$sql = "SELECT DISTINCT uzemelteto_neve FROM uzemeltet_alap";
}
elseif($query == "vizellato"){
	$sql = "SELECT vbt.vizmu_neve, vizellato_megnevezes, adat.ellatott_szemelyek_szama, adat.evi_ivoviz_fogy FROM vbt JOIN uzemeltet_adat as adat on vbt.vizellato_megnevezes = adat.vizellato_rendszer_neve";
}
elseif($query == "vbt_uzemelteto"){
	$sql = "SELECT ua.uzemelteto_neve, ua.uzemelteto_telepulesnev, ua.kapcs_tarto_nev, vbt.vizmu_neve, vbt.vbt_elnevezes, vbt.modositva, vbt.lezarva FROM uzemeltet_alap ua JOIN vbt on ua.id = vbt.UZEMELTETO_ID WHERE ua.uzemelteto_neve = ?";
}
elseif($query == "adatok"){
	$sql = "SELECT uzemelteto, va.vizellato_rendszer_neve, ua.ellatott_szemelyek_szama, ua.evi_ivoviz_fogy FROM `vizellat_alap` va JOIN uzemeltet_adat ua on va.vizellato_rendszer_neve = ua.vizellato_rendszer_neve WHERE UZEMELTETO = ?";
}
//WHERE nev = ? and id = ? and nev2 = ?
//bind_param("sis", $nev, $id, $nev2)


$stmt = $conn -> prepare($sql);

if($param){
	//Paraméteres lekérdezésben a ? helyére beteszi a url-ben kapott paraméter értékét
	//"s" -> 1 db string
	$stmt -> bind_param("s", $param);
}
$stmt -> execute();
$result = $stmt->get_result();
$resultArray = array();
//$tempArray = array();


while($obj = mysqli_fetch_object($result)){
	array_push($resultArray, $obj);
	//echo json_encode($obj);
}
$conn -> close();
$qryResult = array();
$qryResult['vbt'] = $resultArray;
echo json_encode($resultArray);
?>