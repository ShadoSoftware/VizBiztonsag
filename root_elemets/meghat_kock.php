<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head >
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
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
        
        
        <script src="./JS/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    
<!-- bootstrapsnipet dinamic llist-->

    <div class="container">
	<div class="row">
		
        
        <div class="col-lg-12">
        <h4>Meghatározó kockázatok</h4>
		<form action="" method="POST">
        <div class="table-responsive" >

                
              <table id="mytable" class="table table-bordred table-striped">
                   <tbody>
				   
				   <tr><th width="25"><!--<input type="checkbox" id="checkall">--></th><th>Vízellátási egység</th><th>Vízkezelés spec.</th><th>Vízkezelés technológiája</th><th>Veszély típusa</th><th>Kockázati értéke</th><th>Javasolt eljárás</th><th>Kapcsolódó monitoring</th><th>Kezelés</th></tr>
				   
				   
                  <?php
				  include("config.php");
				  session_start();
					
					
					$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                   $sql_text= 'SELECT * FROM kockazat_elemzes WHERE kockazat_ertek > 7';
                   if (mysqli_connect_errno()) {
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}
					$chset=mysqli_query($con,"SET CHARACTER SET 'utf8'");
					$chset2=mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
				   $result=mysqli_query($con, $sql_text);
			 
				    $json = array();
				  while($row = mysqli_fetch_array($result)) { 
					
					  $json[] = $row;
					 
					  
					 	
				  }
				 /* var_dump($json);*/
				  
				  
				 /* echo json_encode($json);*/
				  /* free result set */
				mysqli_free_result($result);
				mysqli_close($con);
				
				
				foreach($json as $id => $item) {
						echo '<tr id="'.$item["ID"].'"><td width="25"><input type="checkbox" id="checkall"></td><td>'.$item["vizellat_egyseg_ID"].'</td><td>'.$item["vizkezel_specifikacio_ID"].'</td><td>'.$item["vizkezel_tech_id"].'</td><td>'.$item["veszely_tipus"].'</td><td>'.$item["kockazat_ertek"].'</td><td>'.$item["jav_eljaras"].'</td><td>'.$item["kapcs_monit"].'</td><td><button type="button" id="id" class="btn btn-warning btn-xs update">Megnyit</button></td></tr>';
					}
			
		  
		 
  ?>
	
        </tbody>
	</table>

		<div class="clearfix"></div>
				<ul class="pagination pull-right">
				  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
				</ul>
						
		</div>
		</form>			
		</div>
	</div>
	</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Adatok szerkesztése</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="valaki">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="valaki">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="valaholllll"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Frissítés!</button>
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
	<!--<script>
		$(document).ready(function(){
		$("#mytable #checkall").click(function () {
			if ($("#mytable #checkall").is(':checked')) {
				$("#mytable input[type=checkbox]").each(function () {
					$(this).prop("checked", true);
				});

			} else {
				$("#mytable input[type=checkbox]").each(function () {
					$(this).prop("checked", false);
				});
			}
		});
		
		$("[data-toggle=tooltip]").tooltip();
	});

		
    </script>-->
    
    
   
    </body>
</html>
