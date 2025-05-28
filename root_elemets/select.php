<?php
$url1=$_POST['felszini'];

if($url1==1){
	header("location:vizbazis_alap_ff.php");
}elseif ($url1==0){
	header("location:vizbazis_alap_fa.php");
	
}else{
	header("location:vizatvetel_alap_ff.php");
}
?>