<?php
include("device_login2.php");


$sql = "Select id,vizmu_neve,vbt_elnevezes from vbt";

if ($result = mysqli_query($conn, $sql))
{

$resultArray = array();
$tempArray = array();
while($row = $result->fetch_object())//$row = mysqli_fetch_assoc($result)
{
	
    //echo "<br> id: " . $row["id"]. ", Vizmu neve: " . $row["vizmu_neve"]. ", VBT elnevezes: " . $row["vbt_elnevezes"]. "<br>";
	
// Add each result into the results array
$tempArray = $row;
array_push($resultArray, $tempArray);
}

// Encode the array to JSON and output the results

$qryResult = array();
$qryResult['vbt'] = $resultArray;
echo json_encode($resultArray);

//header('Content-type: application/json');
//echo json_encode($resultArray);
}
$conn->close();

?>