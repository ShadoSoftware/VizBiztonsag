<?php

session_start();
include("../config.php");
if(isset($_POST["selected_ID"])) {
	$selected = $_POST["selected_ID"];
	$sql_text="SELECT * FROM uzemeltet_alap WHERE ID = '".$selected."'";
	$sql_text2="SELECT *,uzemeltet_alap.uzemelteto_neve 
				FROM vbt 
				INNER JOIN uzemeltet_alap ON vbt.vizmu_neve=uzemeltet_alap.ID 
				WHERE archiv=0 AND vbt.vizmu_neve=".$selected." 
				ORDER BY modositva DESC";
	
	$sql_text4="SELECT *,uzemeltet_alap.uzemelteto_neve 
				FROM vizellat_alap 
				INNER JOIN uzemeltet_alap ON vizellat_alap.UZEMELTET_ID=uzemeltet_alap.ID 
				WHERE vizellat_alap.UZEMELTET_ID= '".$selected."'";
    
	$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
	$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");

	
	
    $result = mysqli_query($db,$sql_text);
	$result2 = mysqli_query($db,$sql_text2);
	$result4 = mysqli_query($db,$sql_text4);

    $json = array();
	$json2 = array();
	$json4 = array();
	
    while($row = mysqli_fetch_array($result)) {
        $json[] = $row;
    }
	while($row = mysqli_fetch_array($result2)) {
        $json2[] = $row;
    }
	 while($row = mysqli_fetch_array($result4)) {
        $json4[] = $row;
    }
				
	//Első rész címei
	$htmlArray = "";
	$htmlArray.='<tr>
				<th>Üzemeltető címe</th>
				<th>Kapcsolattartó</th>
				<th>Elérhetősége</th>
				<th>Jóváhagyó</th>
				<th>Beosztása</th>
				</tr>';
	
	//Második rész címei, colspan=cellaösszevonás
	$htmlArray2 = "";
	$htmlArray2.='<tr class="border1">
				<th colspan="3">VBT neve</th> 
				<th colspan="2">Vízellátó rendszer</th>
				<th>Létrehozva</th>
				<th>Módosítva</th>
			    </tr>';
			
	//Negyedik rész címei
	$htmlArray4 = "";
	$htmlArray4.= '<tr>
					<th>Vízellátó rendszer neve</th>
					<th>Vízszolgáltatás jellege</th>
					<th>Ellátott szemelyek száma</th>
					<th>Üzem. engedély száma</th>
					<th>Üzem. engedély kelte</th>
				   </tr>';
	
	
	//Első rész belseje
	foreach($json as $row) {
        $htmlArray .=  "<tr class='border'>	
                            <td>" . $row["uzemelteto_IRSZ"] . " ". $row["uzemelteto_telepulesnev"].", " . $row["uzemelteto_kozter_nev"]." " . $row["uzemelteto_kozter_jelleg"]." " .$row["uzemelteto_hsz"]."." ."</td>
							<td>" . $row["kapcs_tarto_nev"] . "</td>
                            <td>" . $row["kapcs_tart_telefon"] . "</td>
                            <td>" . $row["jovahagy_szemely_nev"] . "</td>
                            <td>" . $row["jovahagy_szemely_beosztas"] . "</td>
  
						</tr>";
    }

	
	//Második rész belseje
	foreach($json2 as $item) {
			$date1=strtotime($item["letrehozva"]);
			$datum1=date('Y-m-d',$date1);
			$date2=strtotime($item["modositva"]);
			$datum2=date('Y-m-d',$date2);
			$checkbox0 = (($item["hataly_vizbazis"] == 1) ? "checked='checked'" : "");
			$checkbox1 = (($item["hataly_kezeles"] == 1) ? "checked='checked'" : "");
            $checkbox2 = (($item["hataly_halozat"] == 1) ? "checked='checked'" : "");
            $checkbox3 = (($item["hataly_fogyaszto"] == 1) ? "checked='checked'" : "");
            $checkbox4 = (($item["hataly_tarozas"] == 1) ? "checked='checked'" : "");
            $checkbox5 = (($item["hataly_atvetel"] == 1) ? "checked='checked'" : "");
            $checkbox6 = (($item["hataly_atadas"] == 1) ? "checked='checked'" : "");
			$htmlArray2 .= '<tr>
                                <td colspan="3">'.$item["vbt_elnevezes"].'</td>
                                <td colspan="2">'.$item["vizellato_megnevezes"].'</td>
                                <td>'.$datum1.'</td>
                                <td>'.$datum2.'</td><br>
							</tr>
							<tr>
                                <th>Vízbázis</th>
                                <th>Vízkezelés</th>
                                <th>Hálózat</th>
                                <th>Fogyasztói pontok</th>
                                <th>Víztározás</th>
                                <th>Vízátvétel</th>
                                <th>Vízátadás</th>
				            </tr>
							<tr class="border1">
                                <td><input type="checkbox" disabled '.$checkbox0.'></td>
                                <td><input type="checkbox" disabled '.$checkbox1.'></td>
                                <td><input type="checkbox" disabled '.$checkbox2.'></td>
                                <td><input type="checkbox" disabled '.$checkbox3.'></td>
                                <td><input type="checkbox" disabled '.$checkbox4.'></td>
                                <td><input type="checkbox" disabled '.$checkbox5.'></td>
                                <td><input type="checkbox" disabled '.$checkbox6.'></td>
						    </tr>';
	}
	
	//Negyedik rész belseje
	foreach($json4 as $row) {
        $htmlArray4 .= "<tr class='border'>		
							<td>" . $row["vizellato_rendszer_neve"] . "</td>
                            <td>" . $row["vizszolg_jelleg"] . "</td>
							<td>" . $row["ellatott_szemelyek_szama"] . "</td>
                            <td>" . $row["uzemeltet_enged_szam_01"] . "</td>
                            <td>" . $row["uzemeltet_enged_dat_01"] . "</td>
						</tr>";
    }

    //PDF tartalma html-ben
	//Első, stílus #259797
	
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
		} </style><h3>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h3>';
	
	//$html='<style>table{border-collapse:collapse;}td{padding:10px;border-top:1px double #000;}</style><h2>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h2>';
	//$html='<style>table{border-collapse:collapse;}.border td{padding:10px 0 10px 0;border-top:1px solid #000;}.border1 td,.border1 th{padding:10px 0 10px 0;border-bottom:1px solid #000;}th,td{text-align:left;}</style><h2>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h2>';
	$html .= '<table style=><tbody>';
    $html .= $htmlArray;
	$html .= '</tbody></table>';

	//Masodik
	if(mysqli_num_rows($result2) > 0) {
        $html .= '<br><br><br><h3>'.$row["uzemelteto_neve"] . ' üzemeltetőhöz tartozó vízbiztonsági tervek</h3>';
        $html .= '<table><tbody>';
        $html .= $htmlArray2;
        $html .= '</tbody></table>';
	} else {
	    $html .= '<br><br><br>'.$row["uzemelteto_neve"] . ' üzemeltetőhöz nincs vízbiztonsági terv rögzítve!';
	}

	//Negyedik
	if(mysqli_num_rows($result4) > 0) {
		$html .= '<br><br><h3>'.$row["uzemelteto_neve"] . ' üzemeltetőhöz tartozó vízellátó rendszerek:</h3>';
        $html .= '<table><tbody>';
        $html .= $htmlArray4;
        $html .= '</tbody></table>';
	} else {
	    $html .= '<br><br>'.$row["uzemelteto_neve"] . ' üzemeltetőhöz nincs vízellátó rendszer rögzítve!';
	}

	//PDF generálása
	
	//MPDF
	/*include ('../mpdf/mpdf.php');
	$mpdf=new mPDF();
    $mpdf->allow_charset_conversion = true;
    $mpdf->charset_in = 'UTF-8';
    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
    $mpdf->WriteHTML($html);
	$output_path=$row["uzemelteto_neve"].'.pdf';
    //$mpdf->Output('preview.pdf', 'F');
	$mpdf->Output('../pdf/'.$row["uzemelteto_neve"].'.pdf', 'F');
	
	//$mpdf->Output('../pdf/preview.pdf',\Mpdf\Output\Destination::FILE);
	//$mpdf->('http://vszucs.hu/vibir/pdf/'.$uzemelteto.'.pdf', 'F');
	//$mpdf->('http://vszucs.hu/vibir/pdf/preview.pdf', 'F');
	$mpdf->showImageErrors = true;*/

	//TFPDF
    /*require('..\tfpdf\tfpdf.php');
    $pdf = new tFPDF();
    $pdf->AddPage();
    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');
	$pdf->SetFont('Arial','',12);
    $pdf->Write(12, $html);
	$pdf->showImageErrors = true;
    $pdf->Output('../pdf/' . $row["uzemelteto_neve"] . '.pdf');*/
	
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
