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
		<div class="container" id="fogyaszto_keret">
		<div class="row">
			<div class="col-lg-12">
			<legend><h1>Ellenőrzési pontok</h1></legend>
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Mintavltel helye:</label>
									<div class="col-10">
										<select class="form-control" id="monit_helye" name="monit_helye">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											$sql_text= 'SELECT * FROM monitoring_helye';
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
													echo '<option value="'.$item["UID"].'">'.$item["kod"].'-'.$item["megnevezes"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Mintavétel ideje:</label>
									<div class="col-10">
										<input type="date" class="form-control" id="mintavetel_ideje" name="mintavetel_ideje" >
									</div>
								</div>
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Vizsgált paraméter:</label>
									<div class="col-10">
										<select class="form-control" id="monit_helye" name="monit_helye">
										<?php
										header('Content-Type: text/html; charset=utf-8');
											include("config.php");
											$sql_text= 'SELECT * FROM vizsgalati_param';
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
													echo '<option value="'.$item["UID"].'">'.$item["kod"].'</option>';
																
																
															}
									
											?>
												
											</select>
									</div>
								</div>
					<div class="form-group row">
								<label class="col-2 " style="font-size: 1.5em">Mért érték:  (NTU)</label>
									<div class="col-10">
										<input type="text" class="form-control" id="mert_ertek" name="mert_erteka" >
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
			
			</div>
			
			</div>
	</div>

</body>
</html>