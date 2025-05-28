<?php
session_start();
include("config.php");
$vbt_id=$_SESSION["vbt_id"];
//$vizellat_egyseg_ID=$_POST["vizellat_egyseg_ID"];
//echo "vbt ID: ".$vbt_id."</br>";
//echo $vizellat_egyseg_ID;
$hozzaadva_vbthez=date("Y-m-d H:i:s");
$veszely_tipus=$_POST["veszely_tipus"];
$veszely_azon=$_POST["veszely_azon"];
$veszely_oka=$_POST["veszely_oka"];
$veszely_kovetk=$_POST["veszely_kovetk"];
$aktualis_monitoring=$_POST["aktualis_monitoring"];
$megallapitasok=$_POST["megallapitasok"];
$val_ok=$_POST["val_ok"];
$sulyossag=$_POST["sulyossag"];
$val_ertek=$_POST["val_ertek"];
$sulyossag_ertek=$_POST["sulyossag_ertek"];
$kockazat_ertek=$_POST["kockazat_ertek"];
$meghat_kock=$_POST["maghat_kock"];
$jav_eljaras=$_POST["jav_eljaras"];
$kapcs_monit=$_POST["kapcs_monit"];


$sql_text="INSERT INTO `kockazat_elemzes`(
`VBT_ID`, 
`hozzaadva_vbthez`, 
 `veszely_tipus`,
 `veszely_azon`,
 `veszely_oka`, 
 `veszely_kovetk`,
 `aktualis_monitoring`,
 `megallapitasok`, 
 `val_ok`, 
 `sulyossag`,
 `val_ertek`,
 `sulyossag_ertek`,
 `kockazat_ertek`,
 `meghat_kock`, 
 `jav_eljaras`,
 `kapcs_monit`) VALUES (
 '$vbt_id',
 '$hozzaadva_vbthez',
 '$veszely_tipus',
 '$veszely_azon',
 '$veszely_oka',
 '$veszely_kovetk',
 '$aktualis_monitoring',
 '$megallapitasok',
 '$val_ok', 
 '$sulyossag',
 '$val_ertek',
 '$sulyossag_ertek',
 '$kockazat_ertek',
 '$meghat_kock', 
 '$jav_eljaras',
 '$kapcs_monit')";
if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
if (mysqli_query($db, $sql_text)) {
						echo "New record created successfully";
			} else {
				  echo "Error: " . $sql_text . "<br>" . mysqli_error($db);
			}
			
			
	//mysqli_query($db, $sql_text);
	mysqli_close($db);	
	
//echo true;

//header("location: kockazon_vizbazis.php")
?>