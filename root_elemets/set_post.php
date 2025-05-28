<?php
session_start();
include("config.php");
if(isset($_POST["uzemeltetoID"])){
$uzemeltetoID=$_POST["uzemeltetoID"];
$_SESSION["uzemeltetoID"]=$_POST["uzemeltetoID"];
$_SESSION["uzemelteto_neve"]=$_POST["uzemelteto_Neve"];
$sql_text= "SELECT * FROM uzemeltet_alap WHERE `ID`='$uzemeltetoID'";
}else{
	$sql_text= "SELECT * FROM uzemeltet_alap";
}


											
											if (mysqli_connect_errno()) 
											{
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
											}
															$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
															$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
															$result=mysqli_query($db, $sql_text);
																																					
														
															$json = array();
														  
														  while($row = mysqli_fetch_array($result)) 
														  {
															$json[] = $row;
														  }
														 
											
											mysqli_free_result($result);
											
											foreach($json as $id => $item) 
											{
											$_SESSION["uzemelteto_ID"]=$item["ID"];
																										
											}





echo $_SESSION['uzemelteto_ID'];





?>