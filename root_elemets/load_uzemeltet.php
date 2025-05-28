<?php
					header('Content-Type: text/html; charset=utf-8');
					include("config.php");
					//$uzemeltet_uid = $_COOKIE['uzemeltet_uid'];		
						// Retrieve data from Query String
					//	print_r($_GET);
					if(isset($_GET['uz_nev_'])){$uz_nev=$_GET['uz_nev_'];}
					//echo $uz_nev;
					/*$ir_szam = $_GET['ir_szam'];
					$telepules=$_GET['telepules'];
					$kozter_nev=$_GET['kozter_nev'];
					$kozter_jelleg=$_GET['kozter_jelleg'];
					$hazszam=$_GET['hazszam'];
					$kapcsolat_szemely=$_GET['kapcsolat_szemely'];
					$kapcsolat_elerheto=$_GET['kapcsolat_elerheto'];
					$jovahagy_neve=$_GET['jovahagy_neve'];
					$jovahagy_beoszt=$_GET['jovahagy_beoszt'];*/
					
					
						
					// Escape User Input to help prevent SQL Injection
					$uz_nev = mysqli_real_escape_string($db,$uz_nev);
					/*$ir_szam = mysql_real_escape_string($ir_szam);
					$telepules = mysql_real_escape_string($telepules);
					$kozter_nev = mysql_real_escape_string($kozter_nev);
					$kozter_jelleg = mysql_real_escape_string($wpm);
					$hazszam = mysql_real_escape_string($kozter_jelleg);
					$kapcsolat_szemely = mysql_real_escape_string($kapcsolat_szemely);
					$kapcsolat_elerheto = mysql_real_escape_string($kapcsolat_elerheto);
					$jovahagy_neve = mysql_real_escape_string($jovahagy_neve);
					$jovahagy_beoszt = mysql_real_escape_string($jovahagy_beoszt);*/
					



					
					$sql_text= 'SELECT * FROM uzemeltet_alap';
					if (mysqli_connect_errno()) {
												printf("Connect failed: %s\n", mysqli_connect_error());
												exit();
												}
								$chset=mysqli_query($db,"SET CHARACTER SET 'utf8'");
								$chset2=mysqli_query($db,"SET SESSION collation_connection ='utf8_general_ci'");
							    $result=mysqli_query($db, $sql_text);
														
								$json = array();
							  while($row = mysqli_fetch_array($result)) { //mysqli_fetch_row($result)
														
										  $json[] = $row;
															  
								  }
							 //var_dump($json);
								mysqli_free_result($result);
								mysqli_close($db);
								$display_string='';
								foreach($json as $id => $item) {
									
									if($item["uzemelteto_neve"]==$uz_nev){
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Üzemeltető neve:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["uzemelteto_neve"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Irányítószám:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["uzemelteto_IRSZ"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Település neve:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["uzemelteto_telepulesnev"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Közterület neve:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["uzemelteto_kozter_nev"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Közterület jellege:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["uzemelteto_kozter_jelleg"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Házszám:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["uzemelteto_hsz"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Kapcsolattartó neve neve:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["kapcs_tarto_nev"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Kapcsolattartó elérhetősége:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["kapcs_tart_telefon"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Jóváhagyó:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["jovahagy_szemely_nev"].'"">
													</div>
												</div>';
									$display_string.='<div class="panel-body form-horizontal payment-form">
												<div class="form-group">
													<label for="uzemeltet_nev" class="col-sm-3 control-label">Beosztása:</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="'.$item["jovahagy_szemely_beosztas"].'"">
													</div>
												</div>';
									}
							
									//echo '<option value="'.$item["ID"].'">'.$item["uzemelteto_neve"].'</option>';
									//echo '<script type=text/javascript> document.getElementById("uzemeltet_nev").text='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("ir_szam").value='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("telepules").text='.$item[uzemelteto_neve];									
									//echo '<script type=text/javascript> document.getElementById("kozter_nev").text='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("kozter_jelleg").text='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("hazszam").value='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("kapcsolat_szemely").text='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("kapcsolat_elerheto").text='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("jovahagy_neve").text='.$item[uzemelteto_neve];
									//echo '<script type=text/javascript> document.getElementById("jovahagy_beoszt").text='.$item[uzemelteto_neve];
														
								}
			
			
			
				?>
				
				
				
				
				
			<!--	<div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="uzemeltet_nev" class="col-sm-3 control-label">Üzemeltető neve:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
						
                        <label for="uzemeltet_irsz" class="col-sm-3 control-label">Irányítószám:</label>
                        <div class="col-sm-9">
                            <input type="number" size="4" class="form-control" value="">
                        </div>
                    </div> 
                    <div class="form-group">
					    <label for="telepules" class="col-sm-3 control-label">Település</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="kozter_nev" class="col-sm-3 control-label">Közterület neve</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kozter_jelleg" class="col-sm-3 control-label">Közterület jellege</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
						
                    </div> 
					<div class="form-group">
					    <label for="hazszam" class="col-sm-3 control-label">Házszám</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="kapcsolat_szemely" class="col-sm-3 control-label">Kapcsolattartó neve:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="kapcsolat_elerheto" class="col-sm-3 control-label">Elérhetősége</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="jovahagyo_neve" class="col-sm-3 control-label">Jóváhagyó személy:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
					<div class="form-group">
					    <label for="jovahagy_beoszt" class="col-sm-3 control-label">Beosztása</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                        </div>
                    </div>
                                
                </div>-->