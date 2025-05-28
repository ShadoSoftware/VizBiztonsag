<?php
include("config.php");

$fogyasztok_szama=$_POST["fogyasztok_szama"];
$fogyasztok_megjegyz1=$_POST["fogyasztok_megjegyz1"];
$erzekeny=$_POST["erzekeny"];
$fogyasztok_megjegyz2=$_POST["fogyasztok_megjegyz2"];

$sql_text= "INSERT INTO fogyasztok ( 
						 
						szama, 
						megjegyzes, 
						erzekeny, 
						ismertetes) VALUES(?, ?, ?, ?)";

if($stmt = mysqli_prepare($db, $sql_text)){
			
			$stmt->bind_param("ssss",
								$fogyasztok_szama,
								$fogyasztok_megjegyz1,
								$erzekeny,
								$fogyasztok_megjegyz2
								 
								);
			}
			
			
			if (mysqli_connect_errno()) {
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
			}
			$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
			$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
			$stmt->execute();
		//mysqli_query($db, $sql_text);
		mysqli_close($db);



header("location: fogyaszto_alap.php")
?>