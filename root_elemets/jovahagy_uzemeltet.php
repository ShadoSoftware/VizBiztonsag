<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="hu">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        
        <link href='https://fonts.googleapis.com/css?family=Angkor' rel='stylesheet'>
        <link rel="stylesheet" href="./CSS//bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
       <!-- <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
				margin-top:50px;
            }
        </style>-->
		 <style>
				label, input { display:block; }
				input.date { margin-bottom:12px; width:95%; padding: .4em; }
				fieldset { padding:0; border:0; margin-top:25px; }
				h1 { font-size: 1.2em; margin: .6em 0; }
				div#users-contain { width: 350px; margin: 20px 0; }
				div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
				div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
				.ui-dialog .ui-state-error { padding: .3em; }
				.validateTips { border: 1px solid transparent; padding: 0.3em; }
		</style>
        <link rel="stylesheet" href="./CSS//bootstrap-theme.min.css">
        <link rel="stylesheet" href="./CSS/main.css">
		<link rel="stylesheet" href="./CSS/login.css">
        
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="./JS/modernizr-2.8.3.min.js"></script>
		<script src="./JS/main.js"></script>
		<script>
			
				<!-- datum beallitasa modalis ablakkal-->

				$( function() {
					var dialog, form,
					 datum = $( "#datum" ),
					 
					allFields = $( [] ).add( datum ),
					  valid = true;
					 function addDatum() {
						
					   //allFields.removeClass( "ui-state-error" );
				 
					 /* valid = valid && checkLength( name, "username", 3, 16 );
					  valid = valid && checkLength( email, "email", 6, 80 );
					  valid = valid && checkLength( password, "password", 5, 16 );
				 
					  valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
					  valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
					  valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" ); */
				 
					  if ( valid ) {
						  
						  var datum=document.getElementById("datum");
						 //jovahagy1(datum);
						
						
						
						dialog.dialog( "close" );
					  }
					  return valid;
					} 
				 
					dialog = $( "#dialog-form" ).dialog({
					  autoOpen: true,
					  height: 400,
					  width: 350,
					  modal: true,
					  buttons: {
						"Mentés": jovahagy1,
						"Mégsem": function() {
						  dialog.dialog( "close" );
						}
					  },
					  close: function() {
						form[ 0 ].reset();
						allFields.removeClass( "ui-state-error" );
					  }
					});
				 
					form = dialog.find( "form" ).on( "submit", function( event ) {
					  event.preventDefault();
					  addDatum();
					});
				 
					$( "#id" ).button().on( "click", function() {
					  dialog.dialog( "open" );
					});
				  } );
		</script>
    </head>
    <body id="jovahagyasra"> 
	
    <div id="dialog-form" title="Üzemeltetői jóváhagyás">
				
 
			  <form>
				<fieldset>
				  <label for="datum">Dátum:</label>
				  <input type="date" name="datum" id="datum"  class="text ui-widget-content ui-corner-all">
				  
				  <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
				</fieldset>
			  </form>
	</div>
<!-- bootstrapsnipet dinamic llist-->

    <div class="container">
	
	<div class="row">
		
       
        <div class="col-lg-12">
        
		<form action="" method="POST">
		<h1>VBT jóváhagyása üzemeltői hatáskörben</h1>
		
 
        <div class="table-responsive" >

                
              <table id="mytable" class="table table-bordred table-striped">
                   <tbody>
				   
				   <tr><th width="25"></th><th>VBT elnevezése</th><th>Üzemeltető megnevezése</th><th>Vízellátó rendszer megnevezése</th><th>Létrehozva</th><th>Utolsó módosítás</th><th>Jóváhagyás</th></tr>
				   
				   
                  <?php
				  include("config.php");
				  //session_start();
					
					
					//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                   $sql_text= 'SELECT * FROM vbt WHERE jovahagy_uzemelteto IS NULL ORDER BY modositva ASC';
                   if (mysqli_connect_errno()) {
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}
					$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
					$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
				   $result=mysqli_query($db, $sql_text);
				
				 
				  

				  
				    $json = array();
				  while($row = mysqli_fetch_array($result)) { 
					
					  $json[] = $row;
					 
					  
					 	
				  }
				 /* var_dump($json);*/
				  
				  
				 /* echo json_encode($json);*/
				  /* free result set */
				mysqli_free_result($result);
				mysqli_close($db);
				
				
				foreach($json as $id => $item) {
						$date1=strtotime($item["letrehozva"]);
						$datum1=date('Y-m-d',$date1);
						$date2=strtotime($item["modositva"]);
						$datum2=date('Y-m-d',$date2);
						//echo '<tr id="'.$item["ID"].'"><td width="25"><input type="checkbox" id="checkall"></td><td>'.$item["vbt_elnevezes"].'</td><td>'.$item["vizmu_neve"].'</td><td>'.$item["vizellato_megnevezes"].'</td><td>'.$datum1.'</td><td>'.$datum2.'</td><td><button type="button" id="id" class="btn btn-warning btn-xs update" onclick="jovahagy1('.$item["ID"].')">Jóváhagyás!</button></td></tr>'; 
						echo '<tr id="'.$item["ID"].'"><td width="25"><input type="checkbox" id="checkall"></td><td>'.$item["vbt_elnevezes"].'</td><td>'.$item["vizmu_neve"].'</td><td>'.$item["vizellato_megnevezes"].'</td><td>'.$datum1.'</td><td>'.$datum2.'</td><td><button type="submit" id="id" class="btn btn-warning btn-xs update" >Jóváhagyás!</button></td></tr>'; 
					}
			
		  
		 
  ?>
	
        </tbody>
	</table>

		
					
		</div>
		</form>			
		</div>
	</div>
	</div>

<script>




<!-- jovahagyas fuggveny-->
	function jovahagy1(x){
		
		console.log(x);
		var datum= new Date();
		datum=Date.parse(x);
		//alert("Amennyiben üzemeltetőként jóváhagyja a vízbiztonsági tervet, adja meg a jóváhagyás dátumát a következő lépésben.");
		
		//var jovahagy_datum_input;
		//prompt(jovahagy_datum_input);
		//var datum_ma= Date.parse(jovahagy_datum_input);
		

		var id=x;
		$.ajax(
				  {url: "jovahagy1_vbt.php", 
				  type:'POST',
				  dataType: 'json',
				  data: {id: id,
						 datum: datum_ma},
				  
					success:function(response){

								var len = response.length;
								console.log(len);
								var table=document.getElementByIdyId("mytable");
								table.refresh();
									}
							}
				  );
		
	}
		
		</script>

    
    
    
   
	
   
    </body>
</html>
