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
            <legend><h1>ÜZEMELTETŐ alapadatainak megadása</h1></legend>
			</div>
			
			
 
		<div class="panel-body form-horizontal payment-form" id ="ajaxDiv">...</div>
        <!-- panel preview -->
		<form action="insert_uzemeltet_alap.php" method="POST">
        <div class="col-sm-9">
		
		    <h4>Új üzemeltető adatai:</h4>
			
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="uzemeltet_nev" class="col-sm-3 control-label">Üzemeltető neve:</label>
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

