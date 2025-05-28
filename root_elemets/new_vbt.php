<?php session_start(); ?>
<html lang="hu">
<head>
		<meta charset="utf-8">
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
		<script src="//code.jquery.com/jquery-1.11.1.min.js">

        <script src="JS/modernizr-2.8.3.min.js"></script>
		<script src="JS/main.js"></script>
		

</head>
<body>
	<div class="container" id="uzemeltet_keret">
	<div class="row">
        <div class="col-sm-12">
            <legend><h1>Új vízbiztonsági terv készítése</h1></legend>
			</div>
			
			
			
		<div class="panel-body form-horizontal payment-form" id ="ajaxDiv">.</div>
        <!-- panel preview -->
		<form action="insert_vbt.php" method="POST">
        <div class="col-sm-9">
		
		    <h4>Új VBT adatai:</h4>
			
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="vbt_nev" class="col-sm-3 control-label">VBT elnevezése:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vbt_nev" name="vbt_nev">
                        </div>
                    </div>
                    <div class="form-group">
						
                        <label for="uzemeltet_valaszt" class="col-sm-3 control-label">Üzemeltető:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="uzemeltet_valaszt" name="uzemeltet_valaszt">
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
				  {url: "get_valasztott_uzemelteto.php", 
				  type:'POST',
				  dataType: 'json',
				  data: {valasztott_uzemelteto:valasztott_Uzemelteto
							
						},
				  
					success:function(response){

								var len = response.length;
								console.log(response);
								$("#vizellato_valaszt").empty();
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
					
					
					
					</script>
					<div class="form-group">
						
                        <label for="vizellato_valaszt" class="col-sm-3 control-label">Vízellátó rendszer:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="vizellato_valaszt" name="vizellato_valaszt">
							<option>Válasszon vízellátó rendszert!</option>
							<?php
							header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											
											$sql_text= 'SELECT * FROM vizellat_alap';
											
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
													echo '<option  value="'.$item["ID"].'">'.$item["vizellato_rendszer_neve"].'</option>';
																
																
															}
							?>
							
							</select>
                        </div>
                    </div> 
					
					<script>
					document.getElementById("vizellato_valaszt").addEventListener("change",readVizellato);
					document.getElementById("vizellato_valaszt").addEventListener("click",readVizellato);
						function readVizellato(){
							var value=$('#vizellato_valaszt :selected').val();
							console.log("ez a selectről kiolvasott value mező");
							console.log(value);
							var object=document.getElementById('vizellato_valaszt');
							console.log("vizellato ID-ja:");
							console.log(object.value);
							
							//var object = document.forms[0].veszely_azon;
							var index = object.selectedIndex;
							var value =  object.options[index].value;
							var content = object.options[index].text;
							console.log("itt a content valtozo erteke:");
							console.log(content);
							var valasztott_Vizellato = value; 
							console.log("vizellato azonosito");
							console.log(valasztott_Vizellato);
							document.getElementById("vizellato_valaszt2").value=object.options[index].text;
						}
					
					</script>
					<!--vbt hatálya, engedélyek-->
					
					
		<div style="display:none">			
		<input type="number" id="uzemeltet_id" name="uzemeltet_id" value="">
		<input type="text" id="uzemeltet_valaszt2" name="uzemeltet_valaszt2" value="">
		<input type="text" id="vizellato_valaszt2" name="vizellato_valaszt2" value="">		
		</div>			
				
					<div class="form-group">
						<div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">VBT hatálya kiterjed:</div>
            
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                        Vízbázis, víznyerés
                        <div class="material-switch pull-right">
                            <input id="vbt_hataly_vizbazis" name="vbt_hataly_vizbazis" type="checkbox"/>
                            <label for="vbt_hataly_vizbazis" class="label-default"></label>
                        </div>
                    </li>
                    
                    <li class="list-group-item">
                        Vízkezelés
                        <div class="material-switch pull-right">
                            <input id="vbt_hataly_vizkezeles" name="vbt_hataly_vizkezeles" type="checkbox"/>
                            <label for="vbt_hataly_vizkezeles" class="label-default"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Hálózat
                        <div class="material-switch pull-right">
                            <input id="vbt_hataly_halozat" name="vbt_hataly_halozat" type="checkbox"/>
                            <label for="vbt_hataly_halozat" class="label-info"></label>
                        </div>
                    </li>
					<li class="list-group-item">
                        Fogyasztói pontok
                        <div class="material-switch pull-right">
                            <input id="vbt_hataly_fogyaszto" name="vbt_hataly_fogyaszto" type="checkbox"/>
                            <label for="vbt_hataly_fogyaszto" class="label-danger"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Víztározás
                        <div class="material-switch pull-right">
                            <input id="vbt_hataly_tarozas" name="vbt_hataly_tarozas" type="checkbox"/>
                            <label for="vbt_hataly_tarozas" class="label-info"></label>
                        </div>
                    </li>
                    
					<li class="list-group-item">
                        Vízátvétel
                        <div class="material-switch pull-right">
                            <input id="vbt_hataly_atvetel" name="vbt_hataly_atvetel" type="checkbox"/>
                            <label for="vbt_hataly_atvetel" class="label-success"></label>
                        </div>
                    </li>
					<li class="list-group-item">
                        Vízátadás 
                        <div class="material-switch pull-right">
                            <input id="vbt_hataly_atadas" name="vbt_hataly_atadas" type="checkbox"/>
                            <label for="vbt_hataly_atadas" class="label-danger"></label>
                        </div>
                    </li>
                </ul>
            </div>            
        </div>
    </div>
					</div>
					
					
					
					<div class="form-group">
					    <label for="kulso_szakerto" class="col-sm-3 control-label">Bevont külső szakértő:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kulso_szakerto" name="kulso_szakerto">
                        </div>
                    </div>
					
					
                   <!--<div class="form-group">
                        <label for="date_uzem_jova" class="col-sm-3 control-label">VBT jóváhagyás üzemeltető által:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date_uzem_jova" name="date_uzem_jova">
                        </div>
                    </div>
				   
				   
				   <div class="form-group">
                        <label for="OKK_szakv_kiadas" class="col-sm-3 control-label">OKK jóváhagyás dátuma:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="OKK_szakv_kiadas" name="OKK_szakv_kiadas">
                        </div>
                    </div>-->
                  <!--mentés-->  
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-primary button-block" >
                                <span class="glyphicon glyphicon-plus"></span> Rögzít</button>
                        </div>
                    </div>
                </div>
            </div>    
			       
        </div> <!-- / panel preview -->
		</form> 
	</div>
</div>	



</body>
</html>

