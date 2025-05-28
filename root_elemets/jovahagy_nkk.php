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
       <!-- <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
				margin-top:50px;
            }
        </style>-->
        <link rel="stylesheet" href="./CSS//bootstrap-theme.min.css">
        <link rel="stylesheet" href="./CSS/main.css">
		<link rel="stylesheet" href="./CSS/login.css">
        
        
        <script src="./JS/modernizr-2.8.3.min.js"></script>
		<script src="./JS/main.js"></script>
    </head>
    <body>
    
<!-- bootstrapsnipet dinamic llist-->

    <div class="container">
			
	
	
	
	
	
	
	<div class="row">
		
       
        <div class="col-lg-12">
        
		<form action="" method="POST">
		<h2>VBT NKK jóváhagyása</h2>
        <div class="table-responsive" >

                
              <table id="mytable" class="table table-bordred table-striped">
                   <tbody>
				   
				   <tr><th width="25"></th><th>VBT elnevezése</th><th>Üzemeltető megnevezése</th><th>Vízellátó rendszer megnevezése</th><th>Létrehozva</th><th>Utolsó módosítás</th><th>Jóváhagyás</th></tr>
				   
				   
                  <?php
				  include("config.php");
				  //session_start();
					
					
					//$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                   $sql_text= 'SELECT * FROM `vbt` WHERE `jovahagy_uzemelteto` IS NOT NULL AND `okk_szakv_dat` IS NULL AND `archiv`=0 ORDER BY modositva DESC';
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
						echo '<tr id="'.$item["ID"].'"><td width="25"><input type="checkbox" id="checkall"></td><td>'.$item["vbt_elnevezes"].'</td><td>'.$item["vizmu_neve"].'</td><td>'.$item["vizellato_megnevezes"].'</td><td>'.$datum1.'</td><td>'.$datum2.'</td><td><button type="button" id="id" class="btn btn-warning btn-xs update" onclick="jovahagy1('.$item["ID"].')">Jóváhagyás!</button></td></tr>'; 
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
	function jovahagy1(x){
		
		console.log(x);
		alert("NKK szakvéleményben a vízbiztonsági tervet jóváhagyta, adja meg a jóváhagyás dátumát a következő lépésben.");
		
		var jovahagy_datum_input;
		prompt(jovahagy_datum_input);
		
		

		var id=x;
		$.ajax(
				  {url: "jovahagy2_vbt.php", 
				  type:'POST',
				  dataType: 'json',
				  data: {id:id},
				  
					success:function(response){

								var len = response.length;
								console.log(len);

									}
							}
				  );
		
	}
		
		</script>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Adatok szerkesztése</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Bejegyzés törlése</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Törölni szeretné a bejegyzést?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	
   
    </body>
</html>
