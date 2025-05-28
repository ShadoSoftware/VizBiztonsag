<?php session_start();?>
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
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

        <script src="JS/modernizr-2.8.3.min.js"></script>
		<script src="JS/plugins.js"></script>
		<script src="JS/main.js"></script>
		
		    
			
			<div class="container">
			<div class="row">
				
				
				
			<div class="container">
			<legend><h2>Új adatok felvitele</h2></legend>
			<p><i>Lehetőség van új adatok felvitelére a lekérdezés előtt:</i></p>
			<br>
				<div class="btn-group btn-group-justified">
					<a href="#" class="btn btn-primary" 
					<button type="button" class="btn btn-info" onclick="load_uzemeltet_alap()">
					<span class="glyphicon glyphicon-plus"></span> Új Üzemeltető létrehozása
					</button></a>
					
					<a href="#" class="btn btn-primary"
					<button type="button" class="btn btn-info" onclick="load_vizellato_alap()">
					<span class="glyphicon glyphicon-plus"></span> Új Vízellátó rendszer létrehozása
					</button></a>
					
					<a href="#" class="btn btn-primary"
					<button type="button" class="btn btn-info" onclick="load_new_vbt()">
					<span class="glyphicon glyphicon-plus"></span> Új Vízbiztonsági terv létrehozása
					</button></a>
				</div>
			</div>


			
			<BR>
			<BR>
			<BR>
			<BR>
			
			<div class="container" >
			<div class="row">
						<div class="col-lg-12">
						<form  action="select.php" method="POST" >
							<body>
		<!-- Vizbazis viznyeres alapadat-->
		<div class="container" >
			<div class="row">
						<div class="col-lg-12">
						
							<legend><h2>Válassz a lista készítéshez</h2></legend>
							<p><i>Az alábbi listafajtákból választhatsz:</i></p>
							<br>
							
										 <div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" onclick="load_lista_3as()" id="jelentes_3as">
											<label class="form-check-label" for="jelentes_3as" style="font-size: 1.5em">Üzemeltetőhöz tartoző VBT-K és vízellátó rendszerek lekérése</label>
										</div>
										
										<br>
										
										 <div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" onclick="load_lista_csaknev()" id="jelentes_csaknev">
											<label class="form-check-label" for="jelentes_csaknev" style="font-size: 1.5em">Összes rögzített üzemeltető adatainak lekérése</label>
										</div>
										
										<br>
										
										 <div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" onclick="load_lista_vvbt()" id="jelentes_vvbt">
											<label class="form-check-label" for="jelentes_vvbt" style="font-size: 1.5em">Üzemeltetőhöz tartozó VBT-k lekérése</label>
										</div>
										
										<br>
										
										<!--
										<div>
										<a href="#" class="btn btn-primary"
										<button type="button" class="btn btn-info" onclick="load_lista_3as()">
										<span class="glyphicon glyphicon-pushpin"></span> Üzemeltetőhöz tartoző VBT-K és vízellátó rendszerek lekérése </button></a>
										</div>
										
										<br>
										
										<div>
										<a href="#" class="btn btn-primary"
										<button type="button" class="btn btn-info" onclick="load_lista_csaknev()">
										<span class="glyphicon glyphicon-pushpin"></span> Összes rögzített üzemeltető adatainak lekérése </button></a>
										</div>
										-->
						</form>	
						</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			
			

	
	</div>
    </div>    

	

</head>
</html>


