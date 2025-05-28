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
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <script src="JS/modernizr-2.8.3.min.js"></script>
		<script src="JS/plugins.js"></script>
		<script src="JS/main.js"></script>

</head>
<body>
	<div class="container" id="halozat_keret">
		<div class="row">
				<div class="col-lg-12">
				<legend><h1>Hálózat alapadatai</h1></legend>
				<fieldset>
				<h3>Van-e a hálózaton víztározás?</h3>
						<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" id="radiobtn28" name="viztaroz_radio" value="1">
								<label class="form-check-label" for="radiobtn28" style="font-size: 1.5em">Igen, van</label>
							</div>
						<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" id="radiobtn29" name="viztaroz_radio" value="2">
								<label class="form-check-label" for="radiobtn29" style="font-size: 1.5em">Nem, nincs tározás</label>
				
						</div>
						
						<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Víztározók száma:</label>
									<div class="col-10">
										<input type="number" class="form-control" id="tarozok_szama" name="tarozok_szama" >
									</div>
								</div>
				</fieldset>
				</div> 
	
	</div>
	
	<div class="row">
				<div class="col-lg-12">
				
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vízhálózat hossza (km):</label>
									<div class="col-10">
										<input type="number" class="form-control" id="halozat_hossza" name="halozat_hossza" >
									</div>
								</div>
					
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vízhálózat átlagos kora (év):</label>
									<div class="col-10">
										<input type="number" class="form-control" id="halozat_kora" name="halozat_kora" >
									</div>
								</div>
								
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vízhálózat anyagai:</label>
									<div class="col-10">
										<input type="text" class="form-control" id="anyagai" name="anyagai" >
									</div>
								</div>
								
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Van-e ólomvezetékl a hálózaton?</label>
									<div class="col-10">
											<select class="form-control" id="olomvezetek" name="olomvezetek">
												<option value="Igen, van."></option>
												<option value="Nem, nincs">Nem, nincs </option>
											<select>
										
									</div>
								</div>
								
								
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Tervezett rekonstrukció:</label>
									<div class="col-10">
											<input type="date" class="form-control" id="rekonstrukcio" name="rekonstrukcio" >
										
									</div>
								</div>
								
								
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Fertőtlenítés gyakorisága: (hét/hónap)</label>
									<div class="col-2">
											<input type="number" class="form-control" id="gyakorisag1" name="gyakorisag1" >
										
									</div>
									<div class="col-5 ">
											<select class="form-control" id="gyakorisag2" name="gyakorisag2">
												<option value="1">Hét</option>
												<option value="2">Hónap</option>
											<select>
										
									</div>
								</div>
								
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Alkalmazott fertőtlenítőszer:</label>
									<div class="col-10">
											<input type="text" class="form-control" id="fertotlenitoszer" name="fertotlenitoszer" >
										
									</div>
								</div>
								
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Csőtörés esetén a helyreállítást....</label>
									<div class="col-10">
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="radiobtn30" name="csotores" value="1">
												<label class="form-check-label" for="radiobtn30" style="font-size: 1.5em">külső cég végzi</label>
											</div>
											<div class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" id="radiobtn31" name="csotores" value="2">
													<label class="form-check-label" for="radiobtn31" style="font-size: 1.5em">saját karbantartó csoport végzi.</label>
									
											</div>
											<label class="col-2 " style="font-size: 1.5em">Szabályzó dokumentum:</label>
											<input type="text" class="form-control" id="szab_dok" name="szab_dok" >
											
											<div class="form-group">
												<div class="col-sm-12 text-right">
												<hr style="border:1px dashed #dddddd;">
													<button type="button" class="btn btn-primary button-block">
														<span class="glyphicon glyphicon-plus"></span> Mentés!
													</button>
												</div>
											</div>
										
									</div>
								</div>
				
				</div>
	</div>
	
	<div class="form-group row">
									<label class="col-2 " style="font-size: 1.5em">Víztározók adatai:</label>
									<form action="" method="POST">
										<div class="table-responsive" >
												<table class="table table-bordred table-striped">
													<tbody>
													 <tr><th width="25"><input type="checkbox" id="checkall"/></th><th>Hálózat hossza (m)</th><th>Átlagos kora</th><th>Anyagai</th><th>Van ólomvezeték a hálózaton?</th><th>Tervezett rekonstrukció:</th><th>Fertőtlenítés gyakorisága:</th><th>Fertőtlenítőszer:</th><th>Külső cég állít helyre?</th><th>Szabályzó dokumentum</th><th>Szerkeszt</th><th>Töröl</th></tr>
													<?php
													//header('Content-Type: text/html; charset=utf-8'); 
														  include("config.php");
														  //session_start();
													
														   $sql_text= 'SELECT * FROM halozat';
														   if (mysqli_connect_errno()) {
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
															}
														   $result=mysqli_query($db, $sql_text);
														
															$json = array();
														  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
															
															  $json[] = $row;
															  
														  }
														 /* var_dump($json);*/
														  
														  
														 /* echo json_encode($json);*/
														  /* free result set */
														mysqli_free_result($result);
														mysqli_close($db);
														
														
														foreach($json as $id => $item) {
																echo '<tr>
																<td width="25">
																<input type="checkbox" id="checkall"></td>
																<td>'.$item["hossza"].'</td>
																<td>'.$item["atlagos_kora"].'</td>
																<td>'.$item["anyagai"].'</td>
																<td>'.$item["olomvezetek"].'</td>
																<td>'.$item["terv_rekonst"].'</td>
																<td>'.$item["fertotlenit_gyakorisag"].'</td>
																<td>'.$item["fertotlenitoszer"].'</td>
																<td>'.$item["kulso_karbantart"].'</td>
																<td>'.$item["szab_dok"].'</td>
																<td><button type="button" id="id" class="btn btn-warning btn-xs update">Megnyit</button></td>
																<td><button type="button" id="id" class="btn btn-danger btn-xs delete">Töröl</button></td>
																</tr>';
															}
													
												  
												 
													?>
													</tbody>
												</table>
										</div>
										</form>
									
	</div>
	
</div>	

</body>
</html>