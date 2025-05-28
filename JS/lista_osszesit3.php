<?php

session_start();
include("../config.php");
if(isset($_POST["selected_ID"]) && isset($_POST["select"])) {
	$selected = $_POST["selected_ID"];
	$select_ID = $_POST["select"];
	if($select_ID!=2) {
		$sql_text6 = "SELECT * FROM uzemeltet_alap WHERE ID = '" . $selected . "'";
		$sql_text7 = "SELECT *,uzemeltet_alap.uzemelteto_neve 
				FROM vbt 
				INNER JOIN uzemeltet_alap ON vbt.vizmu_neve=uzemeltet_alap.ID 
				WHERE archiv=0 AND vbt.vizmu_neve=" . $selected . " 
				ORDER BY modositva DESC";
	}
	if($select_ID==1) $sql_text8="SELECT * FROM vizellat_alap WHERE UZEMELTET_ID= '".$selected."' ";
	if($select_ID==2) $sql_text9="SELECT * FROM uzemeltet_alap";

	mysqli_query($db,"SET CHARACTER SET 'utf8'");
	mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");

	if($select_ID!=2) $result6 = mysqli_query($db,$sql_text6);
	if($select_ID!=2) $result7 = mysqli_query($db,$sql_text7);
	if($select_ID==1) $result8 = mysqli_query($db,$sql_text8);
	if($select_ID==2) $result9 = mysqli_query($db,$sql_text9);

	if($select_ID!=2) $json6 = array();
	if($select_ID!=2) $json7 = array();
	if($select_ID==1) $json8 = array();
	if($select_ID==2) $json9 = array();

	if($select_ID!=2) {
		while ($row = mysqli_fetch_array($result6)) {
			$json6[] = $row;
		}
	}
	if($select_ID!=2) {
		while ($row = mysqli_fetch_array($result7)) {
			$json7[] = $row;
		}
	}
	if($select_ID==1) {
		while($row = mysqli_fetch_array($result8)) {
			$json8[] = $row;
		}
	}
	if($select_ID==2) {
		while($row = mysqli_fetch_array($result9)) {
			$json9[] = $row;
		}
	}
				
	//Első rész címei
	if($select_ID!=2) {
		$htmlArray6 = "";
		$htmlArray6 .= '<tr>
					<th>Üzemeltető címe</th>
					<th>Kapcsolattartó</th>
					<th>Elérhetősége</th>
					<th>Jóváhagyó</th>
					<th>Beosztása</th>
					</tr>';
	}
	
	//Második rész címei, colspan=cellaösszevonás
	if($select_ID!=2) {
		$htmlArray7 = "";
		$htmlArray7 .= '<tr class="border1">
					<th colspan="3">VBT neve</th> 
					<th colspan="2">Vízellátó rendszer</th>
					<th>Létrehozva</th>
					<th>Módosítva</th>
					</tr>';
	}

	//Harmadik rész címei, colspan=cellaösszevonás
	if($select_ID==1) {
		$htmlArray8 = "";
		$htmlArray8 .= '<tr class="border1">
				<th colspan="2">Vízellátó rendszer neve</th> 
				<th colspan="3">Vízellátó rendszer címe</th>
				<th>Ellátott személyek száma</th>
				<th>Évi fogyasztás</th>
				<th>Engedély száma</th>
				<th>Engedély dátuma</th>
			    </tr>';
	}

	//Csaknév címei, colspan=cellaösszevonás
	if($select_ID==2) {
		$htmlArray9 = "";
		$htmlArray9.='<tr>
				<th>Üzemeltető neve</th>
				<th colspan="2">Üzemeltető címe</th>
				<th>Kapcsolattartó neve</th>
				<th>Kapcsolattartó telefon</th>
				<th>Jóváhagyó neve</th>
				<th>Jóváhagyó beosztása</th>
				</tr>';
	}

	//Első rész belseje
	if($select_ID!=2) {
		foreach ($json6 as $row) {
			$htmlArray6 .= "<tr class='border'>	
								<td>" . $row["uzemelteto_IRSZ"] . " " . $row["uzemelteto_telepulesnev"] . ", " . $row["uzemelteto_kozter_nev"] . " " . $row["uzemelteto_kozter_jelleg"] . " " . $row["uzemelteto_hsz"] . "." . "</td>
								<td>" . $row["kapcs_tarto_nev"] . "</td>
								<td>" . $row["kapcs_tart_telefon"] . "</td>
								<td>" . $row["jovahagy_szemely_nev"] . "</td>
								<td>" . $row["jovahagy_szemely_beosztas"] . "</td>
	  
							</tr>";
		}
	}
	
	//Második rész belseje
	if($select_ID!=2) {
		foreach ($json7 as $item) {
			$date1 = strtotime($item["letrehozva"]);
			$datum1 = date('Y-m-d', $date1);
			$date2 = strtotime($item["modositva"]);
			$datum2 = date('Y-m-d', $date2);
			$checkbox0 = (($item["hataly_vizbazis"] == 1) ? "checked='checked'" : "");
			$checkbox1 = (($item["hataly_kezeles"] == 1) ? "checked='checked'" : "");
			$checkbox2 = (($item["hataly_halozat"] == 1) ? "checked='checked'" : "");
			$checkbox3 = (($item["hataly_fogyaszto"] == 1) ? "checked='checked'" : "");
			$checkbox4 = (($item["hataly_tarozas"] == 1) ? "checked='checked'" : "");
			$checkbox5 = (($item["hataly_atvetel"] == 1) ? "checked='checked'" : "");
			$checkbox6 = (($item["hataly_atadas"] == 1) ? "checked='checked'" : "");
			$htmlArray7 .= '<tr>
									<td colspan="3">' . $item["vbt_elnevezes"] . '</td>
									<td colspan="2">' . $item["vizellato_megnevezes"] . '</td>
									<td>' . $datum1 . '</td>
									<td>' . $datum2 . '</td><br>
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
									<td><input type="checkbox" disabled ' . $checkbox0 . '></td>
									<td><input type="checkbox" disabled ' . $checkbox1 . '></td>
									<td><input type="checkbox" disabled ' . $checkbox2 . '></td>
									<td><input type="checkbox" disabled ' . $checkbox3 . '></td>
									<td><input type="checkbox" disabled ' . $checkbox4 . '></td>
									<td><input type="checkbox" disabled ' . $checkbox5 . '></td>
									<td><input type="checkbox" disabled ' . $checkbox6 . '></td>
								</tr>';
		}
	}

	//Harmadik rész belseje
	if($select_ID==1) {
		foreach ($json8 as $item) {
			$date = strtotime($item["uzemeltet_enged_dat_01"]);
			$datum = date('Y-m-d', $date);
			$htmlArray8 .= '<tr>
									<td colspan="2">' . $item["vizellato_rendszer_neve"] . '</td>
									<td colspan="3">' . $item["vizellato_rendszer_IRSZ"] . ' '.$item["vizellato_rendszer_telepulesnev"].','.$item["vizellato_rendszer_kozter_nev"].' '.$item["vizellato_rendszer_kozter_jelleg"].' '.$item["vizellato_rendszer_hsz"].'</td>
									<td>' . $item["ellatott_szemelyek_szama"] . '</td>
									<td>' . $item["evi_ivoviz_fogy"] . '+' . $item["evi_egyeb_fogy"] . '</td>
									<td>' . $item["uzemeltet_enged_szam_01"] . '</td>
									<td>' . $datum . '</td><br>
								</tr>';
		}
	}

	//Csaknév rész belseje
	if($select_ID==2) {
		foreach ($json9 as $item) {
			$htmlArray9 .= '<tr>
									<td>' . $item["uzemelteto_neve"] . '</td>
									<td colspan="2">' . $item["uzemelteto_IRSZ"] . ' '.$item["uzemelteto_telepulesnev"].','.$item["uzemelteto_kozter_nev"].' '.$item["uzemelteto_kozter_jelleg"].' '.$item["uzemelteto_hsz"].'</td>
									<td>' . $item["kapcs_tarto_nev"] . '</td>
									<td>' . $item["kapcs_tart_telefon"] . '</td>
									<td>' . $item["jovahagy_szemely_nev"] . '</td>
									<td>' . $item["jovahagy_szemely_beosztas"] . '</td><br>
								</tr>';
		}
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
		} 
		.one{
		font-size:10px;
		}
		</style>';
	
	//$html='<style>table{border-collapse:collapse;}td{padding:10px;border-top:1px double #000;}</style><h2>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h2>';
	//$html='<style>table{border-collapse:collapse;}.border td{padding:10px 0 10px 0;border-top:1px solid #000;}.border1 td,.border1 th{padding:10px 0 10px 0;border-bottom:1px solid #000;}th,td{text-align:left;}</style><h2>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h2>';
	if($select_ID!=2) {
		$html .= '<h3>'.$row["uzemelteto_neve"].' üzemeltető összesítő adatlapja</h3>';

		$html .= '<table><tbody>';
		$html .= $htmlArray6;
		$html .= '</tbody></table>';
	}

	//Masodik
	if($select_ID!=2) {
		if (mysqli_num_rows($result7) > 0) {
			$html .= '<br><br><br><h3>' . $row["uzemelteto_neve"] . ' üzemeltetőhöz tartozó vízbiztonsági tervek</h3>';
			$html .= '<table><tbody>';
			$html .= $htmlArray7;
			$html .= '</tbody></table>';
		} else {
			$html .= '<br><br><br>' . $row["uzemelteto_neve"] . ' üzemeltetőhöz nincs vízbiztonsági terv rögzítve!';
		}
	}

	//Harmadik
	if($select_ID==1) {
		if (mysqli_num_rows($result8) > 0) {
			$html .= '<br><br><br><h3>' . $row["uzemelteto_neve"] . ' üzemeltetőhöz tartozó vízellátó rendszerek</h3>';
			$html .= '<table class="one"><tbody>';
			$html .= $htmlArray8;
			$html .= '</tbody></table>';
		} else {
			$html .= '<br><br><br>' . $row["uzemelteto_neve"] . ' üzemeltetőhöz nincs vízellátó rendszer rögzítve!';
		}
	}

	if($select_ID==2) {
		$html .= '<h3>Összes rögzített üzemeltető adatai</h3><br>';
		$html .= '<table class="one"><tbody>';
		$html .= $htmlArray9;
		$html .= '</tbody></table>';
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
	if($select_ID!=2) {
		$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/vibir/pdf/' . $row["uzemelteto_neve"] . '.pdf', 'F');
	} else {
		$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/vibir/pdf/uzemelteto_osszes.pdf', 'F');
	}

	
    echo true;
	

}
?>
