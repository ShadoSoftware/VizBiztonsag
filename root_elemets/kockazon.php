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
			<legend><h1>Kockázatok azonosítása</h1></legend>
<form action="" method="POST">			
			
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vízellátási egység:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="vizellat_egyseg" name="vizellat_egyseg">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											$sql_text= 'SELECT * FROM vizellatas_egyseg';
											if (mysqli_connect_errno()) {
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
															}
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
									
									
										<select class="form-control" id="vizellat_egyseg" name="vizellat_egyseg">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM veszely_tipus';
											if (mysqli_connect_errno()) {
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
															}
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
									</div>
								</div>


			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Veszély specifikációja:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="vizkezel_spec" name="vizkezel_spec">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM vizkezel_specifikacio';
											if (mysqli_connect_errno()) {
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
															}
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
								
			<div class="form-group row">
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


			<div class="form-group row">
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
									
									
										<select class="form-control" id="veszely_oka" name="veszely_oka">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM veszely_oka';
											if (mysqli_connect_errno()) {
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
															}
														   $result=mysqli_query($db, $sql_text);
														
															$json = array();
														  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
															
															  $json[] = $row;
															  
														  }
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ID"].'">'.$item["vesz_ok"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>


			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Veszély következménye:</label>
									<div class="col-10">
									
									
										<select class="form-control" id="veszely_kovetkezmeny" name="veszely_kovetkezmeny">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											//include("session.php");
											$sql_text= 'SELECT * FROM veszely_kovetkezmeny';
											if (mysqli_connect_errno()) {
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
															}
														   $result=mysqli_query($db, $sql_text);
														
															$json = array();
														  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
															
															  $json[] = $row;
															  
														  }
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ID"].'">'.$item["kovetkezmeny"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>	


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
														   $result=mysqli_query($db, $sql_text);
														
															$json = array();
														  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
															
															  $json[] = $row;
															  
														  }
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ID"].'">'.$item["megnevez"].'</option>';
																
																
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
														   $result=mysqli_query($db, $sql_text);
														
															$json = array();
														  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
															
															  $json[] = $row;
															  
														  }
														  //var_dump($json);
											mysqli_free_result($result);
											mysqli_close($db);
											foreach($json as $id => $item) {
													echo '<option value="'.$item["ID"].'">'.$item["megnev"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>
								
								
			
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Kockázati értéke:</label>
									<div class="col-10">
										<input type="number" class="form-control" id="kockazati_ertek" name="kockazati_ertek" >
									</div>
								</div>
			
			
			<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Meghatározó kockázat?</label>
									<div class="col-10">
										<input type="text" class="form-control" id="meghatarozo" name="meghatarozo" >
									</div>
								</div>
			
			<div class="form-group">
									<div class="col-sm-12 text-right">
									<hr style="border:1px dashed #dddddd;">
										<button type="submit" class="btn btn-primary button-block">
											<span class="glyphicon glyphicon-plus"></span> Mentés!
										</button>
									</div>
								</div>
			
			
			
			</form>
			</div>
		</div>
		</div>


</body>
</html>