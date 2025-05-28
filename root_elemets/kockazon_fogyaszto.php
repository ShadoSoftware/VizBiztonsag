<?php session_start();?>
<html >
<head >
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        
        <link href='https://fonts.googleapis.com/css?family=Angkor' rel='stylesheet'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
		

		
		
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <script src="JS/modernizr-2.8.3.min.js"></script>
		<script src="JS/plugins.js"></script>
		<script src="JS/main.js"></script>

</head>
<body>

		<div class="container" id="kockazat_keret">
		<div class="row">
			<div class="col-lg-12">
			<legend><h1>Fogyasztói pontok kockázatainak azonosítása</h1></legend>
<form action="" method="POST">			
			
			<div class="form-group row">
								<!--<label class="col-2 " style="font-size: 1.5em" style="display:none">Vízellátási egység:</label>-->
									<div class="col-10">
									
									
										<select class="form-control" id="vizellat_egyseg" name="vizellat_egyseg" style="display:none">
										<option>Válsszon vízellátási egységet!</option>
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											$sql_text= 'SELECT * FROM vizellatas_egyseg WHERE ID=8';
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
														 // var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ID"].'">'.$item["megnevezes"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>
								
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Veszély típusa:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="veszely_tipus" name="veszely_tipus" onchange="console.log(this.value)">
										<option>Válsszon veszély típust!</option>
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM veszely_tipus';
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
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ID"].'">'.$item["veszely_kategoria"].'</option>';
																
																
															}
									
											?>
												
											</select>
											
											
											<input type="hidden" id="selected_veszely_tipusa" name="selected_veszely_tipusa" value="">
									</div>
								</div>
								
								
								<form action="" method="get">
									<div class="form-group">
									<div class="row" >
										<div class="col-lg-12">
											<hr style="border:1px dashed #dddddd;">
											<input type="hidden" id="vizbazis_valaszt_cimke3" name="vizbazis_valaszt_cimke3" value="" >
											<!--<button type="submit" id="vizbazis_selected"  class="btn btn-primary btn-lg btn-block"  value="" >Vízműtelepek listája</button>-->
											<input type="button" class="btn btn-primary btn-lg btn-block" id="azonosit_lista" onclick="azonosit()" value="Listát kérek!">
											
											</div>                
									</div>
								</div>
								</form>
						<form action="" method="get">		
						<div class="form-group row">
									<label class="col-2 " style="font-size: 1.5em">Veszély azonosítása</label>
											<div class="col-10" id="ajaxDiv_veszely_azonosit">
											<!--<input type="textarea" id="veszely_azon_textarea" text="">-->
											<select class="form-control" id="veszely_azon" name="veszely_azon" >
											<option value="0">Nincs találat!</option>
											<select>
											</div>
											<input type="hidden" id="azonosit_valaszt_cimke" name="azonosit_valaszt_cimke" value="" >
						</div>	
						</form>
					
								
			<script>
			
			function azonosit(){
		
			console.log("scriptben van");
				//var vizellat_Egyseg = document.getElementById('vizellat_egyseg').value; 
				var vizellat_Egyseg=8;
				console.log(vizellat_Egyseg);
				var veszely_Tipus = document.getElementById('veszely_tipus').value;
				console.log(veszely_Tipus);
				var veszely_Technologiaja=0;
				console.log(veszely_Technologiaja);
				var veszely_Specifikacioja=0;
				console.log(veszely_Specifikacioja);
				
				
				  $.ajax(
				  {url: "get_veszely_azon_vizbazis.php", 
				  type:'POST',
				  dataType: 'json',
				  data: {vizellat_egyseg:vizellat_Egyseg,
						veszely_tipus:veszely_Tipus,
						veszely_technologiaja:veszely_Technologiaja,
						veszely_specifikacioja:veszely_Specifikacioja
						
						},
				  
					success:function(response){

								var len = response.length;

								$("#veszely_azon").empty();
								//console.log(response);
								for( var i = 0; i<len; i++){
									var id = response[i]["UID"];
									
										
									var azonositas = response[i]['azonositas'];
									console.log(response[i]['UID']);
									
									$("#veszely_azon").append('<option value="'+id+'">'+id +azonositas+'</option>');

								}
							}
				  });
			}	
			
			
			
				
			
			
			
			
				

			</script>

			<div class="form-group row" style="display:none">
								<label class="col-2 " style="font-size: 1.5em">Veszély specifikációja:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="veszely_spec" name="veszely_spec">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= "SELECT * FROM vizkezel_specifikacio WHERE vizellatas_egyseg_tipus_id= AND veszely_tipusa=";
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
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["UID"].'">'.$item["specifikacio"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>
								
			<div class="form-group row" style="display:none">
								<label class="col-2 " style="font-size: 1.5em">Technológiája::</label>
									<div class="col-10">
									
									
										<select class="form-control" id="vizkezel_technologia" name="vizkezel_technologia">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM vizkezel_tech_lista';
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
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["UID"].'">'.$item["technologia"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>

					
						
			<div class="form-group row" style="display:none">
								<label class="col-2 " style="font-size: 1.5em">Veszély azonosítása</label>
									<div class="col-10">
									
									
										<select class="form-control" id="veszely_azon" name="veszely_azon">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM veszely_azonositas';
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
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ID"].'">'.$item["azonositas"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>	


			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Veszély oka:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="veszely_oka1" name="veszely_oka1" value="0">
										<option value="0">Kérem válaszzon!</option>
												
										</select>
									</div>
								</div>
								
				<script>
						document.getElementById("veszely_azon").addEventListener("change", readValueAzonositva);
						document.getElementById("veszely_azon").addEventListener("click",readValueAzonositva);
						function readValueAzonositva(){
							console.log("veszely_azonositas scriptben vagyunk");
							var value=$('#veszely_azon :selected').val();
							console.log("ez a selectről kiolvasott value mező");
							console.log(value);
							var object=document.getElementById('veszely_azon');
							console.log("azonositott veszely:");
							console.log(object.value);
							//var object = document.forms[0].veszely_azon;
							var index = object.selectedIndex;
							var value =  object.options[index].value;
							var content = object.options[index].text;
							console.log("itt a content valtozo erteke:");
							console.log(content);
							var azonositott_Veszely = value; 
							console.log("atadott veszely azonosito");
							console.log(azonositott_Veszely);
				
				
				  $.ajax(
				  {url: "get_veszely_oka_vizbazis.php", 
				  type:'POST',
				  dataType: 'json',
				  data: {azonositott_veszely:azonositott_Veszely
						},
				  
					success:function(response){

								var len = response.length;
								console.log(response);
								$("#veszely_oka1").empty();
								for( var i = 0; i<len; i++){
									var id = response[i]["ID"];
									console.log(response[i]["ID"]);
									var oka = response[i]["vesz_ok"];
									console.log(response[i]["vesz_ok"]);
									$("#veszely_oka1").append("<option value='"+id+"'>"+oka+"</option>");

								}
							}
				  });
							
							
							
							
						}
						
						
						
				


				</script>


			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Veszély következménye:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="veszely_kovetkezmeny" name="veszely_kovetkezmeny">
											<option value="0">Kérem válasszon!</option>
												
										</select>
									</div>
								</div>	
			
			<script>
					document.getElementById("veszely_oka1").addEventListener("change", readValueOk);
					document.getElementById("veszely_oka1").addEventListener("click",readValueOk);
						function readValueOk(){
							console.log("kovetkezmeny lehívó scriptben vagyunk");
							var value=$('#veszely_oka1 :selected').val();
							console.log("ez a selectről kiolvasott value mező");
							console.log(value);
							var object=document.getElementById('veszely_oka1');
							console.log("veszely oka:");
							//console.log(object.value);
							//var object = document.forms[0].veszely_azon;
							var index = object.selectedIndex;
							var value =  object.options[index].value;
							var content = object.options[index].text;
							console.log("itt a content valtozo erteke:");
							console.log(content);
							var azonositott_Ok = value; 
							console.log("atadott veszely ok");
							console.log(azonositott_Ok);
				
				
				  $.ajax(
						  {url:"get_veszely_kovetk_vizbazis.php", 
						  type:'POST',
						  dataType: 'json',
						  data: {azonositott_ok:azonositott_Ok
								},
				  
					success:function(response){

								var len = response.length;
								if (len==0){
									$("#veszely_kovetkezmeny").append("<option value='0'>Nincs meghatározott következménye</option>");
								}else{
								console.log(response);
								$("#veszely_kovetkezmeny").empty();
								for( var i = 0; i<len; i++){
									var id = response[i]["ID"];
									console.log(response[i]["ID"]);
									var kovetkezmeny = response[i]["kovetkezmeny"];
									console.log(response[i]["kovetkezmeny"]);
									$("#veszely_kovetkezmeny").append("<option value='"+id+"'>"+kovetkezmeny+"</option>");

									}
								}
							}
							});
							
							
							
							
						}	
				</script>
			

			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Aktuális monitoring:</label>
									<div class="col-10">
										<textarea class="form-control" id="akt_monitoring" name="akt_monitoring" maxlength="500" rows="12"></textarea>
									</div>
								</div>	
								
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Megállapítások jelenlegi állapot alapján::</label>
									<div class="col-10">
										<textarea class="form-control" id="megallapitas1" name="megallapitas1" maxlength="500" rows="12"></textarea>
									</div>
								</div>	
								
								
			<div class="form-group row">
			<legend><h1>Kockázati érték számítása:</h1></legend>
								<label class="col-2 " style="font-size: 1.5em">Bekövetkezés valószínűsége:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="valoszinuseg" name="valoszinuseg">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM valoszinuseg';
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
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["val_pont"].'">'.$item["megnevez"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>
								
								
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Súlyossága:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="sulyossag" name="sulyossag">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM sulyossag';
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
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ertek"].'">'.$item["megnev"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>
								
			<script>
			var sulyossag_ertek=0;
			var valoszinuseg_ertek=0;
			var kock_ertek=0;
			
			
			function szamol(){
				var object=document.getElementById('valoszinuseg');
				var object2=document.getElementById('sulyossag');
				var index = object.selectedIndex;
				var index2 = object2.selectedIndex;
				var value =  parseInt(object.options[index].value);
				var value2 =  parseInt(object2.options[index].value);
				
				kock_ertek=value * value2;
				console.log("kockazat erteke: "+kock_ertek);
				
				if (parseInt(kock_ertek) >= 8){
					document.getElementById("kockazati_ertek").innerText=kock_ertek;
					document.getElementById("meghatarozo").innerText="Meghatarozo kockázat";
					document.getElementById("meghatarozo").style.backgroundColor='red';
					document.getElementById("meghatarozo").style.color='white';
  
				}else{
					
					document.getElementById("kockazati_ertek").innerText=kock_ertek;
					document.getElementById("meghatarozo").innerText="Átlagos kockázat";
					document.getElementById("meghatarozo").style.backgroundColor='green';
					document.getElementById("meghatarozo").style.color='yellow';
					
				}
			}
			</script>
			<div class="form-group">
									<div class="col-sm-12 text-right">
									<hr style="border:1px dashed #dddddd;">
										<button type="button" id="kockazat_szamit" onclick="szamol()" class="btn btn-primary button-block">
											<span class="glyphicon glyphicon-plus"></span> Kockázati érték számítása
										</button>
									</div>
								</div>
								
								
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Kockázati értéke:</label>
									<div class="col-10">
										<!--<input type="number" class="form-control" id="kockazati_ertek" name="kockazati_ertek" >-->
										<label id="kockazati_ertek" name="kockazati_ertek" >...</label>
									</div>
								</div>
			
			
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Meghatározó kockázat?</label>
									<div class="col-10">
										<!--<input type="text" class="form-control" id="meghatarozo" name="meghatarozo" >-->
										<label id="meghatarozo" name="meghatarozo" >...</label>
									</div>
								</div>
								
								
								
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Beavatkozás, intézkedés:</label>
									<div class="col-10">
										<textarea class="form-control" id="beavatkozas" name="beavatkozas" maxlength="500" rows="12"></textarea>
									</div>
								</div>	
								
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Monitoring:</label>
									<div class="col-10">
										<textarea class="form-control" id="monitoring1" name="monitoring1" maxlength="500" rows="12"></textarea>
									</div>
								</div>
			
			<div class="form-group">
									<div class="col-sm-12 text-right">
									<hr style="border:1px dashed #dddddd;">
										<button type="button" class="btn btn-primary button-block" id="ment_fogyaszto">
											<span class="glyphicon glyphicon-plus"></span> Mentés!
										</button>
									</div>
								</div>
			
			
			
			</form>
			</div>
		</div>
		</div>

<script>
	var veszely_tipus;
	var veszely_azon;
	var veszely_oka;
	var veszely_kovetk;
	var aktualis_monitoring;
	var megallapitasok;
	var val_ok; 
	var sulyossag;
	var val_ertek;
	var sulyossag_ertek;
	var kockazat_ertek;
	var meghat_kock; 
	var jav_eljaras;
	var kapcs_monit;
	document.getElementById('ment_fogyaszto').addEventListener('click', ment);
	function ment(){
		
		var veszely_tipus_object=document.getElementById('veszely_tipus'); 
		var index = veszely_tipus_object.selectedIndex;
		var value =  veszely_tipus_object.options[index].value;
		var content = veszely_tipus_object.options[index].text;
		veszely_tipus=content;
		console.log(veszely_tipus);
		
		var veszely_azon_object=document.getElementById('veszely_azon'); 
		var index = veszely_azon_object.selectedIndex;
		var value =  veszely_azon_object.options[index].value;
		var content = veszely_azon_object.options[index].text;
		veszely_azon=content;
		console.log(veszely_azon);
		
		var veszely_oka_object=document.getElementById('veszely_oka1'); 
		var index = veszely_oka_object.selectedIndex;
		var value =  veszely_oka_object.options[index].value;
		var content = veszely_oka_object.options[index].text;
		veszely_oka=content;
		console.log(veszely_oka);
		
		var veszely_kovetk_object=document.getElementById('veszely_kovetkezmeny'); 
		var index = veszely_kovetk_object.selectedIndex;
		var value =  veszely_kovetk_object.options[index].value;
		var content = veszely_kovetk_object.options[index].text;
		veszely_kovetk=content;
		console.log(veszely_kovetk);
		
		aktualis_monitoring=document.getElementById('akt_monitoring').value;
		console.log(aktualis_monitoring);
		megallapitasok=document.getElementById('megallapitas1').value;
		console.log(megallapitasok);
		
		var val_ok_object=document.getElementById('valoszinuseg'); 
		var index = val_ok_object.selectedIndex;
		var value =  val_ok_object.options[index].value;
		var content = val_ok_object.options[index].text;
		val_ok=content;
		console.log(val_ok);
		val_ertek=parseInt(value);
		console.log(val_ertek);
		
		var sulyossag_object=document.getElementById('sulyossag'); 
		var index = sulyossag_object.selectedIndex;
		var value2 =  sulyossag_object.options[index].value;
		var content = sulyossag_object.options[index].text;
		sulyossag=content;
		console.log(sulyossag);
		sulyossag_ertek=parseInt(value2);
		console.log(sulyossag_ertek);
		
		kockazat_ertek=sulyossag_ertek*val_ertek;
		console.log(kockazat_ertek);
		
		if (parseInt(kockazat_ertek) >= 8){
					meghat_kock='igen';
  
				}else{
					
					meghat_kock='nem';
					
				}
				
		console.log(meghat_kock);
		
		jav_eljaras=document.getElementById('beavatkozas').value;
		console.log(jav_eljaras);
		kapcs_monit=document.getElementById('monitoring1').value;
		console.log(kapcs_monit);
		$.ajax(
						  {url:"insert_kock_fogyaszto.php", 
						  type:'POST',
						  dataType: 'json',
						  data: {veszely_tipus: veszely_tipus,
								 veszely_azon: veszely_azon,
								 veszely_oka: veszely_oka,
								 veszely_kovetk: veszely_kovetk,
								 aktualis_monitoring: aktualis_monitoring,
								 megallapitasok: megallapitasok,
								 val_ok: val_ok, 
								 sulyossag: sulyossag,
								 val_ertek: val_ertek,
								 sulyossag_ertek: sulyossag_ertek,
								 kockazat_ertek: kockazat_ertek,
								 meghat_kock: meghat_kock, 
								 jav_eljaras: jav_eljaras,
								 kapcs_monit: kapcs_monit
								},
				  
					success:function(response){

								var len = response.length;
								
							}
							});		
	}	
</script>

</body>
</html>