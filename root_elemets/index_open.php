<?php session_start()?>

<html class="no-js" lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        
        <link href='https://fonts.googleapis.com/css?family=Angkor' rel='stylesheet'>
        <link rel="stylesheet" href="./CSS/bootstrap.min.css">
       <!-- <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>-->
        <link rel="stylesheet" href="./CSS/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./CSS/main.css">
        <script src="JS/modernizr-2.8.3.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="./JS/main.js"></script>
    </head>
    <body>

	<div class="mainwrapper">
    <aside class="main_sidebar" id="js-navigation">
        <ul>
			<li id="li_kezdo" class=""><i class="fa fa-home"></i><a href="#" onclick="load_content_kezdo()">Kezdőlap</a></li>
			
			<li id="li_alapadat" class=""><i class="fa fa-cubes"></i><a href="#" onclick="load_content_alapadat()">Alapadatok rögzítése, módosítása</a>
					<div id="almenu" style="display:none">
					<ul >
					<li id="sli_uzemeltet" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_uzemeltet()">Üzemeltető alapadatok rögzítése</a></li>
					<li id="sli_uzemeltet_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_uzemeltet_szerk()">Üzemeltető alapadatok módosítása</a></li>
					<li id="sli_vizellato" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizellato()">Vízellató rendszer alapadatok</a></li>
					<li id="sli_vizellato_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizellato_szerk()">Vízellató rendszer alapadatok módosítása</a></li>
					<!--<li id="sli_vizbazis" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizbazis()">Vízbázis, víznyerés alapadatok</a></li>
					<li id="sli_vizatvetel" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizatvetel()">Vízátvétel alapadatok</a></li>
					<li id="sli_vizkezel" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizkezeles()">Vízkezelés alapadatok</a></li>
					<li id="sli_halozat" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_halozat()">Hálózat, tározás alapadatok</a></li>
					<li id="sli_fogyaszto" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_fogyaszto()">Fogyasztó alapadatok</a></li>-->
					
					
					
					</ul>
					</div>
			
			
			</li>
			
			<li id="li_aktualis" class=""><i class="fa fa-bell"></i><a href="#" onclick="load_content_aktualis()">Vízbiztonsági tervek</a></li>
			
			<li id="li_alapadat2" class=""><i class="fa fa-cubes"></i><a href="#" onclick="load_content_alapadat2()">Üzemeltetés alapadatok rögzítése, módosítása</a>
					<div id="almenu5" style="display:none">
					<ul >
					<!--<li id="sli_uzemeltet" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_uzemeltet()">Üzemeltető alapadatok</a></li>
					<li id="sli_vizellato" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizellato()">Vízellató rendszer alapadatok</a></li>-->
					<li id="sli_vizbazis" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizbazis()">Vízbázis, víznyerés alapadatok</a></li>
					<li id="sli_vizatvetel" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizatvetel()">Vízátvétel alapadatok</a></li>
					<li id="sli_vizkezel" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizkezeles()">Vízkezelés alapadatok</a></li>
					<li id="sli_halozat" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_halozat()">Hálózat, tározás alapadatok</a></li>
					<li id="sli_fogyaszto" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_fogyaszto()">Fogyasztó alapadatok</a></li>
					<li id="sli_vizbazis_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizbazis_szerk()">Vízbázis, víznyerés alapadatok módosítása</a></li>
					<li id="sli_vizatvetel_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizatvetel_szerk()">Vízátvétel alapadatok módosítása</a></li>
					<li id="sli_vizkezel_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizkezeles_szerk()">Vízkezelés alapadatok módosítása</a></li>
					<li id="sli_halozat_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_halozat_szerk()">Hálózat, tározás alapadatok módosítása</a></li>
					<li id="sli_fogyaszto_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_fogyaszto_szerk()">Fogyasztó alapadatok módosítása</a></li>
					
					
					</ul>
					</div>
			
			
			</li>
			
			<!--<li id="li_alapadat_szerk" class=""><i class="fa fa-edit"></i><a href="#" onclick="load_content_alapadat_szerk()">Alapadatok módosítása</a>
					<div id="almenu4" style="display:none">
					<ul >
					 <li id="sli_uzemeltet_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_uzemeltet_szerk()">Üzemeltető alapadatok módosítása</a></li>
					<li id="sli_vizellato_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizellato_szerk()">Vízellató rendszer alapadatok módosítása</a></li>
					<li id="sli_vizbazis_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizbazis_szerk()">Vízbázis, víznyerés alapadatok módosítása</a></li>
					<li id="sli_vizatvetel_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizatvetel_szerk()">Vízátvétel alapadatok módosítása</a></li>
					<li id="sli_vizkezel_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizkezeles_szerk()">Vízkezelés alapadatok módosítása</a></li>
					<li id="sli_halozat_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_halozat_szerk()">Hálózat, tározás alapadatok módosítása</a></li>
					<li id="sli_fogyaszto_szerk" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_fogyaszto_szerk()">Fogyasztó alapadatok módosítása</a></li>
					
					
	
					</ul>
					</div>		
			</li>-->
			
			<li id="li_kockazat_alapadat" class=""><i class="fa fa-eye"></i><a href="#" onclick="load_content_kockazat1()">Kockázat azonosítás</a>
					<div id="almenu2" style="display:none">
					<ul >
					<li id="sli_vizbazis_kock" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizbazis_kock()">Vízbázis, víznyerés kockázatai</a></li>
					<li id="sli_vizkezel_kock" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizkezel_kock()">Vízkezelés kockázatai</a></li>
					<li id="sli_halozat_kock" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_halozat_kock()">Hálózat kockázatai</a></li>
					<li id="sli_fogyaszto_kock" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_fogyaszto_kock()">Fogyasztói pontok kockázatai</a></li>
					
					</ul>
					</div>
			
			</li>
			
			
            <li id="li_kulcskockazat_alapadat" class=""><i class="fa fa-key"></i><a href="#" onclick="load_content_kulcskockazat()">Meghatározó kockázatok</a></li>
			
			<li id="li_ellenorzesi_pontok" class=""><i class="fa fa-exclamation-triangle" ></i><a href="#" onclick="load_content_ellenorzespont()">Monitoring, javító intézkedések</a></li>
            
			<!-- *** -->
			<li id="li_ellenorzes_monitoring" class=""><i class="fa fa-exclamation-triangle"></i><a href="#" onclick="load_content_vizsgalatok()">Vizsgálatok</a>
	
					<div id="almenu8" style="display:none">
					<ul >
					<li id="sli_vizsgalat_rogzites" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizsgalati_pont_letrehozas()">Vizsgálati pont létrehozása</a></li>
					<li id="sli_vizsgalat_listaz" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_vizsgalati_eredmeny_rogzites()">Vizsgálati eredmények rögzítése</a></li>
					</ul>
					</div>
			
			</li>
			
			
			
			<li id="li_felulvizsgalatok" class=""><i class="fa fa-refresh"></i><a href="#" onclick="load_content_felulvizsgalat()">Felülvizsgálatok</a></li>
            
			<li id="li_vbt_kezeles" class=""><i class="fa fa-file-text"></i><a href="#" onclick="load_content_vbt_kezeles()">VBT kezelés, jóváhagyás</a>
					
					<div id="almenu6" style="display:none">
					<ul >
					<li id="sli_uzem_jovahagy" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_jovahagy()">VBT üzemeltetői jóváhagyás, verziókezelés</a></li>
					<li id="sli_nkk_jovahagy" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_NKK()">VBT NKK általijóváhagyása</a></li>
					<li id="sli_listak_archiv" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_listak_archiv()">Archivált VBT-k</a></li>
					</ul>
					</div>
			
			</li>
			
			
			
			
			<li id="li_jelentesek" class=""><i class="fa fa-file-text"></i><a href="#" onclick="load_content_jelentes()">Jelentések</a>
					
					<div id="almenu3" style="display:none">
					<ul >
					<li id="sli_listak" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_listak()">Listák</a></li>
					
					</ul>
					</div>
			
			</li>
			
			<li id="li_sugo" class=""><i class="fa fa-file-text"></i><a href="#" onclick="load_content_sugo()">Segítség, támogatás</a>
					
					<!--<div id="almenu7" style="display:none">-->
					<div id="almenu7" style="display:none">
					<ul >
					<li id="sli_sugo_jog" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_jogszabaly()">Jogszabályi háttér</a></li>
					<li id="sli_sugo_modszer" class=""><i class="fa fa-square-o"></i><a href="#" onclick="load_content_modszer()">Módszertani útmutató</a></li>
					
					</ul>
					</div>
			
			</li> 
			
			<li id="li_logout" class=""><i class="fa fa-sign-out" aria-hidden="true"></i><a href="logout.php" >Kilépés</a></li>
            <!--<li><i class="fa fa-crosshairs"></i><a href="#">crosshairs</a></li>
            <li><i class="fa fa-deaf"></i><a href="#">deaf</a></li>
            <li><i class="fa fa-desktop"></i><a href="#">desktop</a></li>
            <li><i class="fa fa-dot-circle-o"></i><a href="#">dot</a></li>
            -->
        </ul>
    </aside>
    <div class="main" id="js-content">
        
   <!--valtozo tartalom betotese-->
         
     

 
       
	</div>
 
 

 
</div>
<!--valtozo tartalom betotese-->
 

<!--valtozo tartalom betoltes vege-->
    </body>
</html>
