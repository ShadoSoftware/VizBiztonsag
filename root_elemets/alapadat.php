<!DOCTYPE html>
<html lang="hu">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        
        <link href='https://fonts.googleapis.com/css?family=Angkor' rel='stylesheet'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
				margin-top:50px;
            }
			#menu_keret{display:block;}
			#uzemeltet_keret{display:none;}
			#vizellato_keret{display:none;}
			#vizbazis_keret{display:none;}
			#felszini1{display:none;}
			#tovabb2{display:none;}
        </style>
		

		
		
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        
       <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js">

        <script src="JS/modernizr-2.8.3.min.js"></script>

</head>
<body>
		<div class="container" id="menu_keret">
			<div class="row">
			<div class="col-lg-12">
				<legend>Alapadatok kezelése</legend>
			</div>
			<!-- panel preview -->
			<div class="row">
                <div class="col-lg-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="mutat1()">Üzemeltető adatai &raquo;</button>
                </div>                
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="mutat2()">Vízellátó rendszer adatai</button>
                </div>                
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="mutat3()">Vízbázis, víznyerés alapadatok</button>
                </div>                
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Vízkezelés alapadatok</button>
                </div>                
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Hálózat, tározás alapadatok</button>
                </div>                
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Fogyasztó alapadatok</button>
                </div>                
            </div>
			
			
			</div>
		</div>
		
		<!-- Vizbazis viznyeres alapadat-->
		<div class="container" id="vizbazis_keret">
			<div class="row">
			<div class="col-lg-12">
    		
    		
    					<!--<a class="btn btn-primary btn-sm active" data-toggle="happy" data-title="Y">Felszíni vizet igénybevevő vízbázis</a>
    					<a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="N">Felszín alatti vízkészletet igénybevevő vízbázis</a>-->
						
						 <div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" id="radiobtn1" name="felszini" value="1">
								<label class="form-check-label" for="radiobtn" style="font-size: 1.5em">Felszíni vizet igénybevevő vízbázis</label>
							</div>
						<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" id="radiobtn2" name="felszini" value="2">
								<label class="form-check-label" for="radiobtn" style="font-size: 1.5em">Felszín alatti vízkészletet igénybevevő vízbázis</label>
							</div>
								<p><label class="form-check-label" style="font-size: 1.5em">Vízbázis elnevezése</label>
								<input type="text" class="custom-control-input" id="vizbazis_neve" name="vizbazis_neve" ></p>
								
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<hr style="border:1px dashed #dddddd;">
									<button type="button" class="btn btn-primary btn-lg btn-block" id="tovabb1" onclick="mutat4()">Tovább &raquo;</button>
								</div>                
							</div>
    				
			</div>
			
        	<div class="row" id="felszini1">
				<div class="col-lg-12">
    		
    		
						 <div class="custom-control custom-radio">
								
								<label class="form-check-label"  style="font-size: 1.5em">Igénybe vett vízbázis:</label>
								
								
									<select class="form-control">
									  <option style="font-size: 1.5em">vízfolyás </option>
									  <option style="font-size: 1.5em">tó</option>
									  <option style="font-size: 1.5em">természetes tározó</option>
									  <option style="font-size: 1.5em">mesterséges tározó</option>
									</select>
						</div>
						<div class="row">
								
								
								<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vízbázis megnevezése</label>
									<div class="col-10">
										<input type="text" class="form-control" id="vizbazis_neve" name="vizbazis_neve" >
									</div>
								</div>
								
								<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vízgyűjtő terület</label>
									<div class="col-10">
										<input type="text" class="form-control" id="vizgyujto_neve" name="vizgyujto_neve" >
									</div>
								</div>
								
								<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Engedélyezett vízkivétel</label>
									<div class="col-10">
										<input type="text" class="form-control" id="vizkivetel" name="vizkivetel" >
									</div>
								</div>
								
								<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vízbázis leírása</label>
									<div class="col-10">
										<textarea cols="80" rows="10" class="form-control" id="vizbazis_leiras" name="vizbazis_leiras" ></textarea>
									</div>
								</div>
								
								
							</div>                
						</div>	
								<div class="custom-control custom-radio">
								
								<label class="form-check-label"  style="font-size: 1.5em">Felszíni vízkivétel módja:</label>
								
								
									<select class="form-control col-12" >
									  <option style="font-size: 1.5em">szívófejes vízkivétel </option>
									  <option style="font-size: 1.5em">aknás vízkivétel</option>
									  <option style="font-size: 1.5em">völgyzárógátas vízkivétel</option>
									  <option style="font-size: 1.5em">szűrőgátas vízkivétel</option>
									</select>
								</div>
								
								<div class="row">
									<div class="form-group row">
										<label class="col-2 " style="font-size: 1.5em">Vízkivételi művek száma:</label>
										<div class="col-10">
											<input type="text" class="form-control" id="vizki_szama" name="vizki_szama" value="0">
										</div>
										<div class="row">
												<div class="col-lg-3">
													<hr style="border:1px dashed #dddddd;">
													<button type="button" class="btn btn-primary btn-lg btn-block" id="vizki_mu" onclick="document.getElementById('vizkivetelmu_add').style.display='block'">Vízkivételi mű felvétele &raquo;</button>
												</div>                
										</div>
										
									</div>
									<div class="form-group row">
									<label class="col-2 " style="font-size: 1.5em">Vízkivételi művek listája:</label>
									<form action="" method="POST">
										<div class="table-responsive" >
												<table class="table table-bordred table-striped">
													<tbody>
													 <tr><th width="25"><input type="checkbox" id="checkall"/></th><th>VK. műtárgy neve</th><th>Azonosítója</th><th>Létesítés ideje</th><th>Üzemvitele</th><th>Állapota</th><th>Hozama</th><th>VK előírások</th><th>Jellemzői</th><th>Fizikai védelme</th><th>Tevékenységa vgyt-n</th></tr>
													<?php
														  include("config.php");
														  //session_start();
															
															
															//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
														   $sql_text= 'SELECT * FROM mutargy';
														   if (mysqli_connect_errno()) {
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
															}
														   $result=mysqli_query($db, $sql_text);
														
														 
														  

														  
															$json = array();
														  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
															
															  $json[] = $row;
															  /*echo $row["letrehozva"];*/
															  
																
														  }
														 /* var_dump($json);*/
														  
														  
														 /* echo json_encode($json);*/
														  /* free result set */
														mysqli_free_result($result);
														mysqli_close($db);
														
														
														foreach($json as $id => $item) {
																echo '<tr><td width="25"><input type="checkbox" id="checkall"/><td><td>'.$item["neve"].'</td><td>'.$item["azonosito"].'</td><td>'.$item["letesit"].'</td><td>'.$item["uzemvitel"].'</td><td>'.$item["allapot"].'</td><td>'.$item["hozam"].'</td><td>'.$item["eloiras"].'</td><td>'.$item["jellemzo"].'</td><td>'.$item["vedelem"].'</td><td>'.$item["tevekenyseg"].'</td><td>'.$item["kozeg_kockazat"].'</td><td><button type="button" id="id" class="btn btn-warning btn-xs update">Megnyit</button></td><td><button type="button" id="id" class="btn btn-danger btn-xs delete">Töröl</button></td></tr>';
															}
													
												  
												 
													?>
													</tbody>
												</table>
										</div>
										</form>
									
									</div>
						
				</div>
							
							<div class="row">
								<div class="col-lg-12">
									<hr style="border:1px dashed #dddddd;">
									<button type="button" class="btn btn-primary btn-lg btn-block" id="tovabb2" onclick="mutat5()">Tovább &raquo;</button>
								</div>                
							</div>
    				
			</div> <!--felszini vege-->
			
			
			
			
			
			<div class="row">
                <div class="col-lg-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="menumutat1()">Mentés!</button>
                </div>                
            </div>
			
			
			
		</div>
		
		<!--vizbazis, viznyeres vege -->
		
		
		
		
		
<div class="container" id="uzemeltet_keret">
	<div class="row">
        <div class="col-sm-12">
            <legend>ÜZEMELTETŐ alapadatainak megadása</legend>
        </div>
        <!-- panel preview -->
		<form action="insert.php" method="POST">
        <div class="col-sm-9">
            <h4>Üzemelető adatai:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="uzemeltet" class="col-sm-3 control-label">Üzemeltető neve:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="uzemeltet_nev" name="uzemeltet_nev">
                        </div>
                    </div>
                    <div class="form-group">
						
                        <label for="uzemeltet_irsz" class="col-sm-3 control-label">Irányítószám:</label>
                        <div class="col-sm-9">
                            <input type="number" size="4" class="form-control" id="ir_szam" name="ir_szam">
                        </div>
                    </div> 
                    <div class="form-group">
					    <label for="telepules" class="col-sm-3 control-label">Település</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telepules" name="telepules">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="kozter_nev" class="col-sm-3 control-label">Közterület neve</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kozter_nev" name="kozter_nev">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kozter_jelleg" class="col-sm-3 control-label">Közterület jellege</label>
                        <div class="col-sm-9">
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
						
                    </div> 
					<div class="form-group">
					    <label for="hazszam" class="col-sm-3 control-label">Házszám</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="hazszam" name="hazszam">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="kapcsolat_szemely" class="col-sm-3 control-label">Kapcsolattartó neve:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kapcsolat_szemely" name="kapcsolat_szemely">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="kapcsolat_elerheto" class="col-sm-3 control-label">Elérhetősége</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kapcsolat_elerheto" name="kapcsolat_elerheto">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="jovahagyo_neve" class="col-sm-3 control-label">Jóváhagyó személy:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jovahagy_neve" name="jovahagy_neve">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="jovahagy_beoszt" class="col-sm-3 control-label">Beosztása</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jovahagy_beoszt" name="jovahagy_beoszt">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-default " onclick="menumutat1()">
                                <span class="glyphicon glyphicon-plus"></span> Rögzít</button>
                        </div>
                    </div>
                </div>
            </div>    
			</form>        
        </div> <!-- / panel preview -->
	</div>
</div>	
		
<div class="container" id="vizellato_keret">
	<div class="row">	
        <div class="col-sm-9">
            <h4>Vízellátó rendszer adatai:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="vizellat_nev" class="col-sm-3 control-label">Vízellátó rendszer neve:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vizellat_nev" name="vizellat_nev">
                        </div>
                    </div>
                    <div class="form-group">
						
                        <label for="vizellat_irsz" class="col-sm-3 control-label">Irányítószám:</label>
                        <div class="col-sm-9">
                            <input type="number" size="4" class="form-control" id="vizellat_ir_szam" name="vizellat_ir_szam">
                        </div>
                    </div> 
                    <div class="form-group">
					    <label for="vizellat_telepules" class="col-sm-3 control-label">Település</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vizellat_telepules" name="vizellat_telepules">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="vizellat_kozter_nev" class="col-sm-3 control-label">Közterület neve</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vizellat_kozter_nev" name="vizellat_kozter_nev">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vizellat_kozter_jelleg" class="col-sm-3 control-label">Közterület jellege</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="vizellat_kozter_jelleg" name="vizellat_kozter_jelleg">
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
						
                    </div> 
					<div class="form-group">
					    <label for="vizellat_hazszam" class="col-sm-3 control-label">Házszám</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vizellat_hazszam" name="vizellat_hazszam">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="vizszolg_jelleg" class="col-sm-3 control-label">Vízszolgáltatás jellege:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="vizszolg_jelleg" name="vizszolg_jelleg">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="ellatott_letszam" class="col-sm-3 control-label">Ellátott személyek száma:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="ellatott_letszam" name="ellatott_letszam">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="eves_atlag_ivoviz" class="col-sm-3 control-label">Éves átlagos ivóvíz szolgáltatás:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="eves_atlag_ivoviz" name="eves_atlag_ivoviz">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="eves_atlag_egyeb" class="col-sm-3 control-label">Egyéb gazdasági célú:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="eves_atlag_egyeb" name="eves_atlag_egyeb">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="uzemeltet_eng_szam" class="col-sm-3 control-label">Üzemeltetési engedély száma:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="uzemeltet_eng_szam" name="uzemeltet_eng_szam">
                        </div>
                    </div>
					<div class="form-group">
                        <label for="eng_kelte" class="col-sm-3 control-label">Üzem. engedély kelte:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="eng_kelte" name="eng_kelte">
                        </div>
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
                        Vízbázis
                        <div class="material-switch pull-right">
                            <input id="vizbazis_kezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="vizbazis_kezel" class="label-default"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Víznyerés
                        <div class="material-switch pull-right">
                            <input id="viznyeres_kezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="viznyeres_kezel" class="label-primary"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Vízkezelés
                        <div class="material-switch pull-right">
                            <input id="vizkezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="vizkezel" class="label-default"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Elosztóhálózat
                        <div class="material-switch pull-right">
                            <input id="halozat_kezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="halozat_kezel" class="label-info"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Víztározás
                        <div class="material-switch pull-right">
                            <input id="viztaroz_kezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="viztaroz_kezel" class="label-info"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Fogyasztói pontok
                        <div class="material-switch pull-right">
                            <input id="fogyaszto_kezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="fogyaszto_kezel" class="label-danger"></label>
                        </div>
                    </li>
					<li class="list-group-item">
                        Vízátvétel
                        <div class="material-switch pull-right">
                            <input id="vizatvetel_kezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="vizatvetel_kezel" class="label-success"></label>
                        </div>
                    </li>
					<li class="list-group-item">
                        Vízátadás 
                        <div class="material-switch pull-right">
                            <input id="vizatad_kezel" name="someSwitchOption001" type="checkbox"/>
                            <label for="vizatad_kezel" class="label-danger"></label>
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
                    <div class="form-group">
                        <label for="date_uzem_jova" class="col-sm-3 control-label">VBT jóváhagyás üzemeltető által:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date_uzem_jova" name="date_uzem_jova">
                        </div>
                    </div>   
					 <div class="form-group">
                        <label for="OKK_szakv_kiadas" class="col-sm-3 control-label">VBT jóváhagyás üzemeltető által:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="OKK_szakv_kiadas" name="OKK_szakv_kiadas">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-default ">
                                <span class="glyphicon glyphicon-plus"></span> További vízellátó rendszert ad hozzá?
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block" onclick="menumutat1()">Mentés!</button>
                </div>                
            </div>
        </div>
	</div>
</div>
<script>
			function mutat1(){
				document.getElementById('uzemeltet_keret').style.display='block';
				document.getElementById('menu_keret').style.display='none';
				
			}
			function mutat2(){
				document.getElementById('menu_keret').style.display='none';
				document.getElementById('vizellato_keret').style.display='block';
				
			}
			function mutat3(){
				document.getElementById('menu_keret').style.display='none';
				document.getElementById('vizbazis_keret').style.display='block';
				
			}
			function mutat4(){
				document.getElementById('menu_keret').style.display='none';
				document.getElementById('vizbazis_keret').style.display='block';
				document.getElementById('felszini1').style.display='block';
				document.getElementById('tovabb1').style.display='none';
				document.getElementById('tovabb2').style.display='block';
				
			}
			function menumutat1(){
				
				document.getElementById('uzemeltet_keret').style.display='none';
				document.getElementById('menu_keret').style.display='block';
				document.getElementById('vizellato_keret').style.display='none';
				document.getElementById('vizbazis_keret').style.display='none';
				document.getElementById('tovabb2').style.display='none';
			}
			
			function vizki_mu_add(){
				
				
				
			}
			</script>		
		
		

</body>
</html>




<!--VIZKI_mu_ADD modalis ablak -->
		<div id="vizkivetelmu_add" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  
				
  
  
			  <form class="modal-content animate" action=""  method="POST">
				<div class="container">
				<div class="form-group row">
				  <!--<span onclick="document.getElementById('vizkivetelmu_add').style.display='none'" class="close" title="Close Modal">&times; Bezár</span>-->
				  <button type="close" onclick="document.getElementById('vizkivetelmu_add').style.display='none'" value="Bezár">Bezár</button>
				</div>
				</div>

				<div class="container">
				<div class="row">
					<div class="form-group row">
								<label for="kut_name" class="col-2 " style="font-size: 1.5em"><b>Vizkivételi műtárgy megnevezése</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="kut_name" placeholder="megnevezés" name="kut_name" >
									</div>
					</div>
					<div class="form-group row">
								<label for="kut_azon" class="col-2 " style="font-size: 1.5em"><b>Azonosítója</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="kut_azon" placeholder="azonosító" name="kut_azon" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="letesit_date" class="col-2 " style="font-size: 1.5em"><b>Létesítés ideje</b></label>
									<div class="col-10">
										<input type="date" class="form-control"  id="letesit_date" placeholder="2018.10.21." name="letesit_date" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="uzemvitel" class="col-2 " style="font-size: 1.5em"><b>Üzemvitele</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="uzemvitel" placeholder="Üzemvitel" name="uzemvitel" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="allapot" class="col-2 " style="font-size: 1.5em"><b>Állapota</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="allapot" placeholder="Állapota:" name="allapot" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="kut_hozam" class="col-2 " style="font-size: 1.5em"><b>Hozama</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="kut_hozam" placeholder="Állapota:" name="kut_hozam" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="eloiras" class="col-2 " style="font-size: 1.5em"><b>Vízkivételi előírás(ok):</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="eloiras" placeholder="Előírás?:" name="eloiras" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="kut_jellemzok" class="col-2 " style="font-size: 1.5em"><b>Állapota</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="kut_jellemzok" placeholder="Alapvető jellemzők:" name="kut_jellemzok" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="fiz_ved" class="col-2 " style="font-size: 1.5em"><b>Vízbázis fizikai védelme:</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="fiz_ved" placeholder="fizikai védelem: kerítés stb.:" name="fiz_ved" >
									</div>
					</div>
					
					<div class="form-group row">
								<label for="tev_kornyeken" class="col-2 " style="font-size: 1.5em"><b>Tevékenység a vízgyűjtő területen</b></label>
									<div class="col-10">
										<input type="text" class="form-control"  id="tev_kornyeken" placeholder="Állapota:" name="tev_kornyeken" >
									</div>
					</div>
				
				 
				  
				  				  
				  
					
				  <button class="btn btn-primary btn-block " type="submit">Rögzít</button>
				  
				</div>
				
				</div>
			</form>
			
		</div>
	<!--INSERT from modal script -->
		<?php
			   //include("config.php");
			   //session_start();
			   //$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			   
			   if($_SERVER["REQUEST_METHOD"] == "POST") {
				  
				  
				  $kut_name = $_POST['kut_name'];
				  $kut_azon = $_POST['kut_azon']; 
				  $letesit_date = $_POST['letesit_date'];
				  $uzemvitel = $_POST['uzemvitel'];
				  $kut_hozam = $_POST['kut_hozam'];
				  $eloiras = $_POST['eloiras'];
				  $jellemzo = $_POST['kut_jellemzok'];
				  $fiz_ved = $_POST['fiz_ved'];
				  $tev_kornyeken = $_POST['tev_kornyeken'];
				  
				  $kut_name="kut neve";
				  
				  
				  
				  $sql="INSERT INTO mutargy(neve, azonosito, letesit, uzemvitel, allapot, hozam, eloiras, jellemzo, vedelem, tevekenyseg) VALUES (`$kut_name`,`$kut_azon`,`$letesit_date`,`$uzemvitel`,`$kut_hozam`,`$eloiras`,`$jellemzo`,`$fiz_ved`,`$tev_kornyeken`)";
				  $result = mysqli_query($db,$sql);
				  if (!$result) {
						printf("Error: %s\n", mysqli_error($db));
						exit();
					}
					
				$sql="SELECT * FROM mutargy";
				$result=mysqli_query($db, $sql);
				
				  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				  //$active = $row['active'];
				  
				  $count = mysqli_num_rows($result);
				  
				  // If result matched $myusername and $mypassword, table row must be 1 row
					
				  if($count != 0) {
					 echo "<script>document.getelementById('vizki_szama').value=\"".$count."\";</script>";
					 
					 
				  }else {
					 $error = "....";
				  }
			   }
			   mysqli_close($db);
			?>
	
	<!-- INSERT from modal script vége-->
	<!--VIZKI_mu_ADD modalis ablak -->
	