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
	<div class="container" id="fogyaszto_keret">
		<div class="row">
			<div class="col-lg-12">
			<legend><h1>Ellátott fogyasztók adatai</h1></legend>
			<form action="insert_fogyaszto.php"   method="POST">
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Ellátott fogyasztók száma:</label>
									<div class="col-10">
										<input type="number" class="form-control" id="fogyasztok_szama" name="fogyasztok_szama" >
									</div>
								</div>
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Megjegyzés:</label>
									<div class="col-10">
										<textarea class="form-control" id="fogyasztok_megjegyz1" name="fogyasztok_megjegyz1" maxlength="50"></textarea>
									</div>
								</div>
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Ivóvízminőségre különösen érzékeny fogyasztó:</label>
									<div class="col-10">
										<select class="form-control" id="erzekeny" name="erzekeny">
												<option value="Igen, van">Igen, van.</option>
												<option value="Nem, nincs">Nem, nincs </option>
											</select>
									</div>
								</div>
								
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Megjegyzés:</label>
									<div class="col-10">
										<textarea class="form-control" id="fogyasztok_megjegyz2" name="fogyasztok_megjegyz2" maxlength="500" rows="12"></textarea>
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