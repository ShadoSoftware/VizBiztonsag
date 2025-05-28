<?php
session_start();
?>
<html >
<head >
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
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
		<script src="JS/plugins.js"></script>
		<script src="JS/main.js"></script>

</head>
<body>
	<div class="container" id="felulvizsgalat">
		
		<div class="row">
			<div class="col-lg-12">
				<legend><h1>Felülvizsgálatok</h1></legend>
					
				<div class="form-group row">
					<label class="col-2 " style="font-size: 1.5em">Vízbiztonsági terv kiválasztása:</label>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="uzemeltet_valaszt" class="col-sm-3 control-label">Üzemeltető:</label>
							<div class="col-sm-9">
								<select class="form-control" id="uzemeltet_valaszt" name="uzemeltet_valaszt">
									<option>Válasszon üzemeltetőt!</option>
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
											echo '<option  value="'.$item["ID"].'">'.$item["uzemelteto_neve"].'</option>';							
										}
									?>
											
								</select>
							</div>
						</div>
									
						<script>
							document.getElementById("uzemeltet_valaszt").addEventListener("change",readUzemeltet);
							function readUzemeltet(){
								console.log("uzemelteto scriptben vagyunk");
								var value=$('#uzemeltet_valaszt :selected').val();
								console.log("ez a selectről kiolvasott value mező");
								console.log(value);
								var object=document.getElementById('uzemeltet_valaszt');
								console.log("uzemelteto ID-ja:");
								console.log(object.value);
											
								//var object = document.forms[0].veszely_azon;
								var index = object.selectedIndex;
								var value =  object.options[index].value;
								var content = object.options[index].text;
								console.log("itt a content valtozo erteke:");
								console.log(content);
								var valasztott_Uzemelteto = value; 
								console.log("uzemelteto azonosito");
								console.log(valasztott_Uzemelteto);
											
								document.getElementById("uzemeltet_id").value=value;
								document.getElementById("uzemeltet_valaszt2").value=object.options[index].text;
								
								$.ajax(
									{
										url: "get_valasztott_uzemelteto.php", 
										type:'POST',
										dataType: 'json',
										data: {
											valasztott_uzemelteto:valasztott_Uzemelteto
										},
								  
										success:function(response){

											var len = response.length;
											console.log(response);
											$("#vizellato_valaszt").empty();
											//$("#vizellato_valaszt").append("<option value='0' i>Kérlek válassz egy vízellátó rendszert</option>");
											for( var i = 0; i<len; i++){
												var id = response[i]["ID"];
												console.log(response[i]["ID"]);
												var rendszer = response[i]["vizellato_rendszer_neve"];
												console.log(response[i]["vizellato_rendszer_neve"]);
												$("#vizellato_valaszt").append("<option value='"+id+"'>"+rendszer+"</option>");

											}
										}
									});	
							}
									
								
							//document.getElementById("vizellato_valaszt").addEventListener("change",readVizellato);
							//document.getElementById("vizellato_valaszt").addEventListener("click",readVizellato);
							function readVizellato(){
								console.log("readVizellato függvény adatai: ");
								var vizellato_value=$('#vizellato_valaszt :selected').val();
								console.log("vizellato ID: " + vizellato_value);
											
								var uzemelteto_value=$('#uzemeltet_valaszt :selected').val();							
								console.log('kivalasztott uzemelteto id: ' + uzemelteto_value);

								document.getElementById("vizellato_valaszt2").value=vizellato_value;

								$.ajax(
									{
										url: "vbtlista_keszit2.php", 
										type:'POST',
										data: {
											uzemeltetoID: uzemelteto_value,
											vizellatoID: vizellato_value	
										},
												  
										success:function(data)
										{	
											console.log("success");
											document.getElementById("mytable").innerHTML=data;
											document.getElementById("mytable").style.display="block";
											document.getElementById("tabletest").style.display="none";
										},
										error: function(data) {
											console.log("error");
										}
									}
								);
							}
									
						</script>
									<!--vbt hatálya, engedélyek-->
									
									
						<div style="display:none">			
						<input type="number" id="uzemeltet_id" name="uzemeltet_id" value="">
						<input type="text" id="uzemeltet_valaszt2" name="uzemeltet_valaszt2" value="">
						<input type="text" id="vizellato_valaszt2" name="vizellato_valaszt2" value="">		
						</div>			
									
									
						<div class="form-group">
										
							<label for="vizellato_valaszt" class="col-sm-3 control-label">Vízellátó rendszer:</label>
							<div class="col-sm-9">
								<select class="form-control" id="vizellato_valaszt" name="vizellato_valaszt">
									<option value="0" id="0">Válasszon vízellátó rendszert!</option>
								</select>
							</div>
						</div>
						<button type="button" onclick="readVizellato()" class="btn btn-primary">Lekérdez</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row"> 
			<div class="col-lg-12">	
				<form action="" method="POST">
					<div class="table-responsive">
						<table class="table table-bordred table-striped" id="tabletest" style="display:block">
							<tbody>
							
								<tr><th>VBT elnevezése</th><th>Üzemeltető megnevezése</th><th>Vízellátó rendszer megnevezése</th><th>Létrehozva</th><th>Utolsó módosítás</th><th>Felülvizsgálás</th></tr>
							
							</tbody>
						</table>
						
						<table  class="table table-bordred table-striped" id="mytable">
						
						</table>
						
						<script>
							function getVBT(vbt_id){
								console.log(vbt_id);
								$.ajax(
								{
									url: "get_vbtbyid.php",
									type:'POST',
									dataType: 'json',
									data: {vbt_id},
									
									success:function(){
										console.log("Sikeres küldés");
									}
								});
									
							}
						</script>
						
					</div>
				</form>	
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
			<!-- Itt volt a monitoring-->
				<label class="col-sm-6 control-label">Felülvizsgálat típusa:</label>
				<select class="form-control" id="felulvizsgalat_tipus" name="felulvizsgalat_tipus">
					<option value="0" id="0">Éves belső felülvizsgálat</option>
				</select>
				<br>
				<label class="col-sm-6 control-label">Mire terjed ki?</label>
				<select class="form-control" id="felulvizsgalat_terjedelme" name="felulvizsgalat_terjedelme">
					<option value="0" id="0">A vízellátó rendszerben történt változások értékelése és azok hatása a vízbiztonsági tervben értékelt veszélyekre</option>
				</select>
				<br>
				<label class="col-sm-6 control-label">A felülvizsgálatban részt vevők:</label>
				<input class="form-control" type="text" id="felulvizsgalat_resztvevok" name="felulvizsgalat_resztvevok" value="">
				<br>
				<label class="col-sm-6 control-label">Történt-e jelentős műszaki változás</label>
				<select class="form-control" id="felulvizsgalat_muszaki" name="felulvizsgalat_muszaki">
					<option value="0" id="0">Igen</option>
					<option value="1" id="1">Nem</option>
				</select>
				<br>
				<label class="col-sm-6 control-label">Műszaki változás leírása</label>
				<br>
				<input class="form-control" type="text" id="felulvizsgalat_leiras" name="felulvizsgalat_leiras" value="">
				<br>
				<label class="col-sm-3 control-label">Volt-e rendkívüli esemény</label>
				<select class="form-control" id="felulvizsgalat_rendkivuli" name="felulvizsgalat_rendkivuli">
					<option value="0" id="0">Igen</option>
					<option value="1" id="1">Nem</option>
				</select>
				<br>
				<label class="col-sm-6 control-label">Egyéb a VBT szemponjából releváns változás?</label>
				<br>
				<input class="form-control" type="text" id="felulvizsgalat_vbt_valtozas" name="felulvizsgalat_vbt_valtozas" value="">
				<br>
				<label class="col-sm-6 control-label">A vízbiztonsági tervet szükséges volt-e módosítani</label>
				<select class="form-control" id="felulvizsgalat_modosit" name="felulvizsgalat_modosit">
					<option value="0" id="0">Igen</option>
					<option value="1" id="1">Nem</option>
				</select>
				<br>
				<button type="button" onclick="" class="btn btn-primary">Generálás</button>
			</div>
		</div>
	
	</div> <!-- container zaro-->
</body>
</html>