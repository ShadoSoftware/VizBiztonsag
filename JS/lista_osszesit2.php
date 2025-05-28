<?php

session_start();
include("../config.php");
if(isset($_POST["selected_ID"])) {
	$selected = $_POST["selected_ID"];
	$sql_text="SELECT * 
	FROM uzemeltet_alap"

	$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
	$result = mysqli_query($db,$sql_text);
	$json = array();
	
	
    while($row = mysqli_fetch_array($result)) {
        $json[] = $row; 
		}
	
				
	//címei
	$htmlArray = "";
	$htmlArray.='<tr>
				<th>Üzemeltető címe</th>
				<th>Kapcsolattartó</th>
				<th>Elérhetősége</th>
				<th>Jóváhagyó</th>
				<th>Beosztása</th>
				</tr>';

	
	//belseje
	foreach($json as $row) {
        $htmlArray .=  "<tr class='border'>	
                            <td>" . $row["uzemelteto_IRSZ"] . " ". $row["uzemelteto_telepulesnev"].", " . $row["uzemelteto_kozter_nev"]." " . $row["uzemelteto_kozter_jelleg"]." " .$row["uzemelteto_hsz"]."." ."</td>
							<td>" . $row["kapcs_tarto_nev"] . "</td>
                            <td>" . $row["kapcs_tart_telefon"] . "</td>
                            <td>" . $row["jovahagy_szemely_nev"] . "</td>
                            <td>" . $row["jovahagy_szemely_beosztas"] . "</td>
  
						</tr>";
    }


    //PDF tartalma html-ben
	
	$html=' <style>
		table{
		border-collapse: separate;
		width: 100%;
		}

			th{
			text-align: left;
			padding: 8px;
			}
			td{
			text-align: left;
			padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}

		th{
		background-color: #259797;
		color: white;
		} 
		</style><h3>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h3>';
		
	//$html='<style>table{border-collapse:collapse;}td{padding:10px;border-top:1px double #000;}</style><h2>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h2>';
	//$html='<style>table{border-collapse:collapse;}.border td{padding:10px 0 10px 0;border-top:1px solid #000;}.border1 td,.border1 th{padding:10px 0 10px 0;border-bottom:1px solid #000;}th,td{text-align:left;}</style><h2>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h2>';
	
	
	$html .= '<table style=><tbody>';
    $html .= $htmlArray;
	$html .= '</tbody></table>';


	
	//TCPDF
	require_once('../tcpdf/tcpdf.php');
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
	$pdf->setPrintHeader(false);
	$pdf->setPrintFooter(false);
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	
	$pdf->SetFont('dejavusans', '', 10, '', false);
	$pdf->AddPage();
	$html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
	$pdf->writeHTML($html, true, false, true, false, '');
	$pdf->lastPage();
	$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/vibir/pdf/' . $row["uzemelteto_neve"] . '.pdf', 'F');
	
    echo true;
	

}
?>