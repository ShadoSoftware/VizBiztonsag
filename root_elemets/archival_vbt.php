<?php
session_start();
include("config.php");
$id=$_POST["id"];
$sql_text="UPDATE `vbt` SET `archiv`=1 , `lezarva`= now()  WHERE `ID`='$id'";
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
			
mysqli_close($db);
?>