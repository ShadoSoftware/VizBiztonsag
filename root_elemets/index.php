<?php session_start();?>

<!DOCTYPE html>
<html lang="hu">
	<head>
	<meta charset="utf-8">
	<title>VibiR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--CSS linkek-->
		<link rel="stylesheet" href="./CSS/bootstrap.min.css">
		<link rel="stylesheet" href="./CSS/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		
		
		<link rel="stylesheet" href="./CSS/main.css">
        <link rel="stylesheet" href="./CSS/login.css">
		
		<style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
		</style>
	<!-- Scriptek-->
	
	
	<script src="./JS/modernizr-2.8.3.min.js"></script>
	<script src="./JS/plugins.js"></script>
    <script src="./JS/main.js"></script>
	
	
	
	</head>


	<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
		
	<!--NAVIGACIOS TERULET -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="vibir.hu/index.php"><img src="IMG/logo-feher1.png" alt="Vízbiztonság Információs Rendszer" id="logo" data-height-percentage="57" /></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <form class=" navbar-form navbar-right" role="form">
				  
				   <!-- <a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Belépés</a>-->
					<!--<a href="#" class="btn btn-primary btn-lg" role="button"  onclick="show_login()">Belépés</a>-->
					
					 
					<button class="btn btn-default btn-lg vezerlo custom-control-inline" id="alapadatok" onclick="alapadat_load()">Alapadatok</button>
					<button class="btn btn-default btn-lg vezerlo custom-control-inline" id="kock_azon" onclick="kockazat_azonositas_load()">Kockázat azonosítás</button>
					<button class="btn btn-default btn-lg vezerlo " id="ellenorzopont" onclick="ellenorzopont_load()">Ellenőrzési pontok</button>
					<button class="btn btn-default btn-lg vezerlo " id="felulvizsgalat" onclick="felulvizsgalat_load()">Felulvizsgálatok</button> 
					
					<!--<a href="#" id="alapadatok" class="btn btn-primary btn-lg vezerlo" role="button" onclick="alapadat_load()">Alapadatok</a>
					<a href="#" id="kock_azon" class="btn btn-primary btn-lg vezerlo" role="button" onclick="kockazat_azonositas_load()">Kockázat azonosítás</a>
					<a href="#" id="ellenorzopont" class="btn btn-primary btn-lg vezerlo" role="button" onclick="ellenorzopont_load()">Ellenőrzési pontok</a>
					<a href="#" id="felulvizsgalat" class="btn btn-primary btn-lg vezerlo" role="button" onclick="felulvizsgalat_load()">Felulvizsgálatok</a>-->
					
					<!--<button class="btn btn-default btn-lg" id="belep" onclick="show_login()">Belépés</button>-->
					<!--<button class="btn btn-default btn-lg" id="belep" onclick="document.getElementById('loginmodal').style.display='block'">Belépés</button>-->
					<!--<a href="#" id="tesztbelep" class="btn btn-default btn-lg" role="button" onclick="load_vbt_form()">Teszt</a>-->
					<!-- END # BOOTSNIP INFO -->
				  </form>
				</div><!--/.navbar-collapse -->
			</div>
		</nav>
	
	<!--NAVIGACIOS TERULET -->
	
	
	
	<!--IFRAME a tartalomnak-->
		<div class="container" id="input_div" >
			<!--<iframe scrolling="yes" frameborder="0" id="main_iframe" name="mainframe" src="index_open.html">
			</iframe>-->
			<div id ="main_iframe" role="dialog">
				<form class="modal-content animate" action="test2.php"  method="POST">   
				<div class="imgcontainer">
				  <span onclick="document.getElementById('main_iframe').style.display='none'" class="close" title="Close Modal">&times;</span>
				  <img src="IMG/logo2.png" alt="Avatar" class="avatar">
				</div>
				

				<div class="container">
				
				<div class="form-group row">
								<label class="col-5 " for="username" style="font-size: 1.5em">Felhasználónév:</label>
									<div class="col-7">
										<input type="text" class="form-control" id="username" name="username" placeholder="Felhasználónév beírása" required>
									</div>
				</div>
				
				<div class="form-group row">
								<label class="col-2 " for="password" style="font-size: 1.5em">Jelszó:</label>
									<div class="col-10">
										<input type="password" class="form-control" id="password" name="password" placeholder="Jelszó beírása" required>
									</div>
				</div>
				
				 <!-- <p><label for="uname"><b>Felhasználónév</b></label>
				  <input type="text" placeholder="Felhasználónév beírása" name="username" id="username" required></p>

				  <p><label for="psw"><b>Jelszó</b></label>
				  <input type="password" placeholder="Jelszó megadása" name="password" id="password" required></p>
					
				  <button class="btn btn-primary btn-lg "type="submit">Belépés</button>-->
				  
				  <div class="row">
								<div class="col-lg-12">
									<hr style="border:1px dashed #dddddd;">
									<button type="submit" class="btn btn-primary btn-lg btn-block" >Belépés &raquo;</button>
								</div>                
							</div>
				  <label>
					<input type="checkbox" checked="checked" name="remember"> Jegyezzen meg!
				  </label>
				</div>
				<div class="row">
								<div class="col-lg-12">
									<hr style="border:1px dashed #dddddd;">
									<button type="button" class="btn btn-primary btn-lg btn-block" onclick="document.getElementById('main_iframe').style.display='none'">Mégsem &raquo;</button>
								</div>                
							</div>
				
				
				
				<!--<div class="container" style="background-color:rgb(30,150,150)">
					<button type="button" onclick="document.getElementById('loginmodal').style.display='none'" class="cancelbtn">Mégsem</button>
					<span class="psw"> <a href="#">Elfelejtette a jelszavát?</a></span>
				</div>-->
			</form>
			</div>
		</div>
	<!-- IFRAME A TARTALOMNAK VEGE-->
	
	
	<!-- footer-->
		<div class="footer">
        <footer>
          <p>&copy; Scarabeus Kft. 2018</p>
        </footer>
      </div>
	
	<!--footer vege-->
	
	<!--bootstrap min jquery.slim scriptek-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	
	
	</body>


</html>

		<!--LOGIN modalis ablak 
		<div id="loginmodal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  
				
  
  
			  <form class="modal-content animate" action="test2.php"  method="POST">
				<div class="imgcontainer">
				  <span onclick="document.getElementById('loginmodal').style.display='none'" class="close" title="Close Modal">&times;</span>
				  <img src="img/logo2.png" alt="Avatar" class="avatar">
				</div>

				<div class="container">
				  <p><label for="uname"><b>Felhasználónév</b></label>
				  <input type="text" placeholder="Felhasználónév beírása" name="username" id="username" required></p>

				  <p><label for="psw"><b>Jelszó</b></label>
				  <input type="password" placeholder="Jelszó megadása" name="password" id="password" required></p>
					
				  <button class="btn btn-primary btn-lg "type="submit">Belépés</button>
				  <label>
					<input type="checkbox" checked="checked" name="remember"> Jegyezzen meg!
				  </label>
				</div>
				<div class="container" style="background-color:rgb(30,150,150)">
					<button type="button" onclick="document.getElementById('loginmodal').style.display='none'" class="cancelbtn">Mégsem</button>
					<span class="psw"> <a href="#">Elfelejtette a jelszavát?</a></span>
				</div>
			</form>
		
		
		</div>
		
	
	
	
	