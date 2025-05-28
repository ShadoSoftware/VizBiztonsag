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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./JS/modernizr-2.8.3.min.js"></script>
		<script src="./JS/main.js"></script>
    </head>
    <body>
    
<!-- bootstrapsnipet dinamic llist-->
<div class="col-sm-12">
<h4>Üzemeltető választása:</h4>
			
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="uzemeltet_valaszt" class="col-sm-3 control-label">Kiválasztott üzemeltető:</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="uzemeltet_valaszt" name="uzemeltet_valaszt">
			<?php
										header('Content-Type: text/html; charset=utf-8');
										include("config.php");
											
											$sql_text= 'SELECT * FROM uzemeltet_alap';
											
											if (mysqli_connect_errno()) 
											{
																printf("Connect failed: %s\n", mysqli_connect_error());
																exit();
											}
															$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
															$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
															$chset4=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
															$result=mysqli_query($db, $sql_text);
															$result2 = mysqli_query($db,$sql_text2);
															$result4 = mysqli_query($db,$sql_text4);
															
														
															$json = array();
														  
														  while($row = mysqli_fetch_array($result)) 
														  {
															$json[] = $row;
														  }
														 
											
											mysqli_free_result($result);
											
											foreach($json as $id => $item) 
											{
											echo '<option value="'.$item["ID"].'">'.$item["uzemelteto_neve"].'</option>';
																										
											}
									
			?>
					</select>
                </div>
            </div>
		</div>
	</div> 
</div>
	
	
	
	<script>
	document.getElementById("uzemeltet_valaszt").addEventListener("change", readUzemeltetValaszt);
	function readUzemeltetValaszt(){
							var selected=$('#uzemeltet_valaszt :selected').val();							
							console.log('kivalasztott uzemelteto'+selected);
							var object=document.getElementById('uzemeltet_valaszt');
									
									console.log('Value értéke: '+object.value);
									
									var index = object.selectedIndex;
									console.log('Index értéke: '+index);
									var selected_value =  object.options[index].value;
									console.log("Uzemelteto id-ja:");
									console.log(selected_value);
									var content = object.options[index].text;
									console.log('Content értéke: '+content);
							 $.ajax({
                                            url: "lista_archiv_keszit.php",
                                            type: "POST",
                                            data: { uzemID: selected_value,
													uzemelteto_Neve: content},
                                            success: function(data)
                                            { 
												//var uzemeltetoNeve=data;
												//var uzemelteto_ID=data;
												//console.log(uzemeltetoNeve+" sikeresen beolvasva");
												document.getElementById("mytable").innerHTML=data;
												document.getElementById("mytable").style.display="block";
												
                                            },
                                            error: function(data) {
                                            }
                                        });
							
							}
												
	
	</script>
	
	
	
	
	
	
	
	
	
	
	<div class="row" >
		
        
        <div class="col-lg-12" >
        <h4>Archivált vízbiztonsági tervek listája</h4>
		<form action="" method="POST">
        <div class="table-responsive" >

                
              <table  class="table table-bordred table-striped" id="mytable">
                   
				   <tbody >
				   <!--<tr><th width="25"></th><th>VBT elnevezése</th><th>Üzemeltető megnevezése</th><th>Vízellátó rendszer megnevezése</th><th>Létrehozva</th><th>Utolsó módosítás</th><th>Visszaállítás!</th></tr>-->
				   
				</tbody></table>
			</div>	

			<!--<div class="table-responsive" >

					
				  <table  class="table table-bordred table-striped" id="mytable">
					   
					   
					   
				</tbody></table>-->
			<!--</div>  --> 
               <!--    <?php
									   
				  // $uzem_neve=$_SESSION["uzemelteto_neve"];
				  // $sql_text1= 'SELECT * FROM vbt  WHERE `archiv`=1 ORDER BY modositva DESC';
				  // $sql_text2= "SELECT * FROM vbt  WHERE `archiv`=1 AND `vizmu_neve`='$uzem_neve'  ORDER BY modositva DESC";
                   //if (mysqli_connect_errno()) {
					//	printf("Connect failed: %s\n", mysqli_connect_error());
						//exit();
					//}
					//$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
					//$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
					//$chset4=mysqli_query($db,"SET CHARACTER SET 'utf8'");
					//if (isset($_SESSION["uzemelteto_neve"])){
						//echo "<script>console.log('van uzemelteto')</script>";
						//echo $_SESSION["uzemelteto_neve"];
					//$sql_text=$sql_text2;
					//}else{
				//		$sql_text=$sql_text1;
					//}
					
					
					//$result=mysqli_query($db, $sql_text);
				
				    //$json = array();
					//while($row = mysqli_fetch_array($result)) 
					//{ 
					//$json[] = $row;
				//	}
				 /* var_dump($json);*/
				  
				  
				 /* echo json_encode($json);*/
				  /* free result set */
				//mysqli_free_result($result);
				//mysqli_close($db);
				
				
				//foreach($json as $id => $item) {
					//	$date1=strtotime($item["letrehozva"]);
					//	$datum1=date('Y-m-d',$date1);
				//		$date2=strtotime($item["modositva"]);
					//	$datum2=date('Y-m-d',$date2);
						//echo '<tr id="row_id_'.$item["ID"].'"><td width="25"><input type="checkbox" id="checkall"></td><td>'.$item["vbt_elnevezes"].'</td><td>'.$item["vizmu_neve"].'</td><td>'.$item["vizellato_megnevezes"].'</td><td>'.$datum1.'</td><td>'.$datum2.'</td><td><button type="button" id="'.$item["ID"].'" class="btn btn-danger btn-xs delete" onclick="aktival('.$item["ID"].')">Visszaállít</button></td></tr>';
					//}
			
		  
		 
  ?> -->
	
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

          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="név">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="valami">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="valami szöveg"></textarea>
    
        
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
	
	
	<script>
	function aktival(x){
		
		console.log(x);
		var id=x;
		$.ajax(
				  {url: "visszaallit_vbt.php", //visszaalit_vbt.php kell, abban a flag 1-rol 0 lesz
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
    </body>
</html>
