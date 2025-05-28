<html lang="hu">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href='https://fonts.googleapis.com/css?family=Angkor' rel='stylesheet'>
        <link rel="stylesheet" href="CSS/bootstrap.min.css">		
        <link rel="stylesheet" href="CSS/bootstrap-theme.min.css">
        <link rel="stylesheet" href="CSS/main.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="JS/modernizr-2.8.3.min.js"></script>
		<script src="JS/main.js"></script>
		
	</head>

	<body>
		<div class="container" id="uzemeltet_keret">
			<div class="row">
				<div class="col-sm-12">
					<legend><h1>Meglévő ÜZEMELTETŐ alapadatainak szerkesztése</h1></legend>
				</div>
			
			
				<form action="uzemeltet_alap.php" method="POST">
					<div class="col-sm-9">
						<h4>Üzemeltető választása:</h4>
			
						<div class="panel panel-default">
							<div class="panel-body form-horizontal payment-form">
								<div class="form-group">
									<label for="uzemeltet_valaszt" class="col-sm-3 control-label">Kiválasztott üzemeltető:</label>
									<div class="col-sm-9">
										<select class="form-control" id="uzemeltet_valaszt" name="uzemeltet_valaszt">
											<option>Válassza ki az üzemeltőt...</option>
											<?php
												header('Content-Type: text/html; charset=utf-8');
												include("config.php");
													
												$sql_text= 'SELECT * FROM uzemeltet_alap';
													
												if (mysqli_connect_errno()) {
													printf("Connect failed: %s\n", mysqli_connect_error());
													exit();
												}
												
												$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
												$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
												$result=mysqli_query($db, $sql_text);
																
												$json = array();
												while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)					
													$json[] = $row;			  
												}
												
												var_dump($json);
												mysqli_free_result($result);
												mysqli_close($db);
												foreach($json as $id => $item) {
													echo '<option id="uz_nev" value="'.$item["ID"].'">'.$item["uzemelteto_neve"].'</option>';																
												}
											?>
										</select>
									</div>
								</div>
					
						<!--	<div class="form-group">
									<div class="col-sm-12 text-right">
										<button type="button" class="btn btn-primary button-block" onclick="ajaxFunction()" >
										<span class="glyphicon glyphicon-plus"></span>Adatok betöltése és továbblépés</button>
									</div>
								</div>  --> 
		  
							</div>
						</div>    
					</div> <!-- / panel preview -->
				</form> 
			
				<div class="panel-body form-horizontal payment-form" id ="ajaxDiv">...</div> 
				<!-- panel preview -->
			
				<form action="uzemeltet_alap.php" method="POST">
					<div class="col-sm-9">
				
						<h4>Meglévő üzemeltető adatai:</h4>
					
						<div class="panel panel-default">
							<div class="panel-body form-horizontal payment-form">
								
								<div class="form-group">
									<label for="uzemeltet_nev" class="col-sm-3 control-label">Üzemeltető neve:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="uzemeltet_nev" name="uzemeltet_nev">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateUzemeltetoNeve()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="uzemeltet_irsz" class="col-sm-3 control-label">Irányítószám:</label>
									<div class="col-sm-7">
										<input type="number" size="4" class="form-control" id="ir_szam" name="ir_szam">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateIRSZ()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="telepules" class="col-sm-3 control-label">Település:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="telepules" name="telepules">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateTelepules()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="kozter_nev" class="col-sm-3 control-label">Közterület neve:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="kozter_nev" name="kozter_nev">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateKozterNeve()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="kozter_jelleg" class="col-sm-3 control-label">Közterület jellege:</label>
									<div class="col-sm-7">
										<select class="form-control" id="kozter_jelleg" name="kozter_jelleg">
											<option>utca</option>
											<option>út</option>
											<option>tér</option>
											<option>sétány</option>
											<option>körút</option>
											<option>sugárút</option>
											<option>dűlő</option>
											<option>fasor</option>
										</select>
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateKozterJelleg()" class="btn btn-info">Mentés</button>
									</div>-->
								</div> 
							
								<div class="form-group">
									<label for="hazszam" class="col-sm-3 control-label">Házszám:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="hazszam" name="hazszam">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateHSZ()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="kapcsolat_szemely" class="col-sm-3 control-label">Kapcsolattartó neve:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="kapcsolat_szemely" name="kapcsolat_szemely">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateKapcsTartNeve()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="kapcsolat_elerheto" class="col-sm-3 control-label">Elérhetősége:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="kapcsolat_elerheto" name="kapcsolat_elerheto">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateElerhetoseg()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="jovahagyo_neve" class="col-sm-3 control-label">Jóváhagyó személy:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="jovahagy_neve" name="jovahagy_neve">
									</div>
									<!--<div class="col-sm-2">
										<button type="button" onClick="updateJovahagyo()" class="btn btn-info">Mentés</button>
									</div>-->
								</div>
								
								<div class="form-group">
									<label for="jovahagy_beoszt" class="col-sm-3 control-label">Beosztása:</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" id="jovahagy_beoszt" name="jovahagy_beoszt">
									</div>
									<div class="col-sm-2">
										<button type="button" onClick="updateData()" class="btn btn-info">Mentés</button>
									</div>
								</div>
							
								<div class="form-group">
									<!-- <div class="col-sm-12 text-right">	
										<button type="submit" onClick="updateUzemelteto()" class="btn btn-primary button-block">
										<span class="glyphicon glyphicon-plus"></span>Frissítés</button> -->
									</div>
								</div>
							</div>
						</div>    
						   
					</div> <!-- / panel preview -->
				</form> 
			</div>
		</div>	


<script>

	document.getElementById("uzemeltet_valaszt").addEventListener("change", readValueUzemelteto);
	
	function readValueUzemelteto(){
		console.log("uzemeltet_valaszt scriptben vagyunk");
				
		var value_select = $('#uzemeltet_valaszt :selected').text();
		console.log("Ez a selectről kiolvasott text mező");
		console.log(value_select);
									
		var object=document.getElementById('uzemeltet_valaszt');
		console.log("Üzemeltető:");
		console.log(object.value);
		
		var index = object.selectedIndex;
		var value =  object.options[index].value;
		var content = object.options[index].text;
		
		console.log("itt a content valtozo erteke:");
		console.log(content);
		
		var Uzemelteto_neve = content; 
		console.log("Üzemeltető neve:");
		console.log(Uzemelteto_neve);
										
		$.ajax(
			{	
				url: "get_uzemeltet_alap.php", 
				type:'POST',
				dataType: 'json',
				data: 
					{uzemelteto_id:value},
			
				success:function(response){
					var len = response.length;
					console.log(response);
					$("#uzemeltet_nev").empty();
					$("#ir_szam").empty();
					$("#telepules").empty();
					$("#kozter_nev").empty();
					$("#hazszam").empty();
					$("#kapcsolat_szemely").empty();
					$("#kapcsolat_elerheto").empty();
					$("#jovahagy_neve").empty();
					$("#jovahagy_beoszt").empty();
					
				
					for( var i = 0; i<len; i++){
						var nev = response[i]["uzemelteto_neve"];
						console.log(response[i]["uzemelteto_neve"]);
						$("#uzemeltet_nev").val(nev);
						
						var irsz = response[i]["uzemelteto_IRSZ"];
						console.log(response[i]["uzemelteto_IRSZ"]);
						$("#ir_szam").val(irsz);
						
						var telepules = response[i]["uzemelteto_telepulesnev"];
						console.log(response[i]["uzemelteto_telepulesnev"]);
						$("#telepules").val(telepules);
						
						var kozter_nev = response[i]["uzemelteto_kozter_nev"];
						console.log(response[i]["uzemelteto_kozter_nev"]);
						$("#kozter_nev").val(kozter_nev);
						
						var kozter_jelleg = response[i]["uzemelteto_kozter_jelleg"];
						console.log(response[i]["uzemelteto_kozter_jelleg"]);
						$("#kozter_jelleg").val(kozter_jelleg);
						
						var hsz = response[i]["uzemelteto_hsz"];
						console.log(response[i]["uzemelteto_hsz"]);
						$("#hazszam").val(hsz);
						
						var kapcs_nev = response[i]["kapcs_tarto_nev"];
						console.log(response[i]["kapcs_tarto_nev"]);
						$("#kapcsolat_szemely").val(kapcs_nev);
						
						var kapcs_tel = response[i]["kapcs_tart_telefon"];
						console.log(response[i]["kapcs_tart_telefon"]);
						$("#kapcsolat_elerheto").val(kapcs_tel);
						
						var jovahagy_nev = response[i]["jovahagy_szemely_nev"];
						console.log(response[i]["jovahagy_szemely_nev"]);
						$("#jovahagy_neve").val(jovahagy_nev);
						
						var jovahagy_beoszt = response[i]["jovahagy_szemely_beosztas"];
						console.log(response[i]["jovahagy_szemely_beosztas"]);
						$("#jovahagy_beoszt").val(jovahagy_beoszt);
					}
				}
			});
													
	}
	
	
	
	function updateData(){
		var ID;
		//updateUzemeltetoNeve();
		//update uzemelteto
		var value_select = $('#uzemeltet_valaszt :selected').text();
		console.log("Ez a selectről kiolvasott text mező");
		console.log(value_select);
									
		var object=document.getElementById('uzemeltet_valaszt');
		console.log("Üzemeltető:");
		console.log(object.value);
		
		var index = object.selectedIndex;  //ha csak ezt írod, akkor egy objektumot adsz át, aminek az indexét kiválasztottad, nem annak valamelyik mezőjét
		var value =  object.options[index].value; //itt már annak az indexnek a value mezőjét olvasod ki
		var content = object.options[index].text;
		
		console.log("itt a content valtozo erteke:");
		console.log(content);
		console.log("a lekérdezett azonosító "+value);
		var Nev = document.getElementById('uzemeltet_nev').value;  //itt hiányzott a .value a lekérdezésből
		console.log('a módosított nev '+Nev);  //itt tudtam ellenőrizni a konzolon, hogy mi lett kiolvasva
		ID= value;  //itt adtam az ID-nak a jó értéket
		
		var Irsz = document.getElementById('ir_szam').value;
		var Telepules = document.getElementById('telepules').value;
		var Kozter_Nev = document.getElementById('kozter_nev').value;
		var Kozter_Jelleg = document.getElementById('kozter_jelleg').value;
		var Hazszam = document.getElementById('hazszam').value;
		var Kapcs_Tarto_Nev = document.getElementById('kapcsolat_szemely').value;
		var Kapcsolat_Elerheto = document.getElementById('kapcsolat_elerheto').value;
		var Jovahagy_Szemely_Nev = document.getElementById('jovahagy_neve').value;
		var Jovahagy_Szemely_Beosztas = document.getElementById('jovahagy_beoszt').value;
		
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_nev.php",
		dataType: 'JSON',
       	data: {nev:Nev,
				irsz:Irsz,
				telepules : Telepules,
				kozter_nev : Kozter_Nev,
				kozter_jelleg : Kozter_Jelleg,
				hazszam : Hazszam,
				kapcs_tarto_nev : Kapcs_Tarto_Nev,
				kapcsolat_elerheto : Kapcsolat_Elerheto,
				jovahagy_szemely_nev : Jovahagy_Szemely_Nev,
				jovahagy_szemely_beosztas : Jovahagy_Szemely_Beosztas,
       			id:ID},
       	success:function(response)
       		{
				var len = response.length;
				console.log("response-ban vagyunk");
				console.log("Sikeres frissítés."); 
       		}
     });
		
		
		
		
		
		//updateIRSZ
		//updateIRSZ();
		//var Irsz = document.getElementById('ir_szam');
		/*$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_irszam.php",
       	data: 	{irsz:Irsz,
       			id:ID
				},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
				return;
       		}
     });*/
		
		//updateTelepules();
		//var Telepules = document.getElementById('telepules');
		/*$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_telepules.php",
       	data: 	{telepules : Telepules,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
		
		
		//updateKozterNeve();
		//var Kozter_Nev = document.getElementById('kozter_nev');
		/*$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kozter.php",
       	data: 	{kozter_nev : Kozter_Nev,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
		//updateKozterJelleg();
		/*var Kozter_Jelleg = document.getElementById('kozter_jelleg');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kozter_jelleg.php",
       	data: 	{kozter_jelleg : Kozter_Jelleg,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
		
		//updateHSZ();
		/*var Hazszam = document.getElementById('hazszam');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_hazszam.php",
       	data: 	{hazszam : Hazszam,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
		
		//updateKapcsTartNeve();
		/*var Kapcs_Tarto_Nev = document.getElementById('kapcsolat_szemely');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kapcsolattarto.php",
       	data: 	{kapcs_tarto_nev : Kapcs_Tarto_Nev,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
		
		//updateElerhetoseg();
		
		/*var Kapcsolat_Elerheto = document.getElementById('kapcsolat_elerheto');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kapcsolattarto_elerheto.php",
       	data: 	{
			kapcsolat_elerheto : Kapcsolat_Elerheto,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
		
		//updateJovahagyo();
		/*var Jovahagy_Szemely_Nev = document.getElementById('jovahagy_neve');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_jovahagyo.php",
       	data: 	{jovahagy_szemely_nev : Jovahagy_Szemely_Nev,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
		
		//updateBeosztas();
		
		/*var Jovahagy_Szemely_Beosztas = document.getElementById('jovahagy_beoszt');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_jovahagyo_beoszt.php",
       	data: 	{jovahagy_szemely_beosztas : Jovahagy_Szemely_Beosztas,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		console.log("Sikeres frissítés");
       		}
     });*/
		
	}
	
	/*function updateUzemeltetoNeve(){
		var value_select = $('#uzemeltet_valaszt :selected').text();
		console.log("Ez a selectről kiolvasott text mező");
		console.log(value_select);
									
		var object=document.getElementById('uzemeltet_valaszt');
		console.log("Üzemeltető:");
		console.log(object.value);
		
		var index = object.selectedIndex;  //ha csak ezt írod, akkor egy objektumot adsz át, aminek az indexét kiválasztottad, nem annak valamelyik mezőjét
		var value =  object.options[index].value; //itt már annak az indexnek a value mezőjét olvasod ki
		var content = object.options[index].text;
		
		console.log("itt a content valtozo erteke:");
		console.log(content);
		console.log("a lekérdezett azonosító "+value);
		var Nev = document.getElementById('uzemeltet_nev').value;  //itt hiányzott a .value a lekérdezésből
		console.log('a módosított nev '+Nev);  //itt tudtam ellenőrizni a konzolon, hogy mi lett kiolvasva
		ID= value;  //itt adtam az ID-nak a jó értéket
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_nev.php",
		dataType: 'json',
       	data: {nev:Nev,
       			id:ID},
       	success:function(response)
       		{
				var len = response.length;
				console.log("response-ban vagyunk");
				alert("Sikeres frissítés."); 
       		}
     });
	}*/

	/*function updateIRSZ(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Irsz = document.getElementById('ir_szam');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_irszam.php",
       	data: 	{irsz:Irsz,
       			id:ID
				},
       	cache: false,
       	success: function(response)
       		{
         		//alert("Sikeres frissítés");
				return;
       		}
     });
	}*/

	/*function updateTelepules(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Telepules = document.getElementById('telepules');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_telepules.php",
       	data: 	{telepules : Telepules,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/

	/*function updateKozterNeve(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Kozter_Nev = document.getElementById('kozter_nev');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kozter.php",
       	data: 	{kozter_nev : Kozter_Nev,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/

	/*function updateKozterJelleg(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Kozter_Jelleg = document.getElementById('kozter_jelleg');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kozter_jelleg.php",
       	data: 	{kozter_jelleg : Kozter_Jelleg,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/

	/*function updateHSZ(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Hazszam = document.getElementById('hazszam');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_hazszam.php",
       	data: 	{hazszam : Hazszam,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/

	/*function updateKapcsTartNeve(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Kapcs_Tarto_Nev = document.getElementById('kapcsolat_szemely');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kapcsolattarto.php",
       	data: 	{kapcs_tarto_nev : Kapcs_Tarto_Nev,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/

	/*function updateElerhetoseg(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Kapcsolat_Elerheto = document.getElementById('kapcsolat_elerheto');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_kapcsolattarto_elerheto.php",
       	data: 	{kapcsolat_elerheto : Kapcsolat_Elerheto,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/

	/*function updateJovahagyo(){
		//var ID_obj = document.getElementById('uzemeltet_valaszt');
		//var ID = ID_obj[selectedIndex].value;
		var Jovahagy_Szemely_Nev = document.getElementById('jovahagy_neve');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_jovahagyo.php",
       	data: 	{jovahagy_szemely_nev : Jovahagy_Szemely_Nev,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/

	/*function updateBeosztas(){
	//	var ID_obj = document.getElementById('uzemeltet_valaszt');
	//	var ID = ID_obj[selectedIndex].value;
		var Jovahagy_Szemely_Beosztas = document.getElementById('jovahagy_beoszt');
		$.ajax({
       	type: "POST",
       	url: "update_uzemelteto_jovahagyo_beoszt.php",
       	data: 	{jovahagy_szemely_beosztas : Jovahagy_Szemely_Beosztas,
       			id : ID},
       	cache: false,
       	success: function(response)
       		{
         		alert("Sikeres frissítés");
       		}
     });
	}*/
</script>
</body>
</html>

