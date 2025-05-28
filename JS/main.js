function show_login(){
    
    document.getElementById("loginmodal").style.display="block";
}




//Főmenük-----------------------------------------------------------

function load_content_kezdo(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='open.php' width='1400px' height='1100px'></object>";
	document.getElementById('li_kezdo').className="active";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_alapadat(){
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='alapadat.php'width='1400px' height='1100px'></object>";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	var lathato=document.getElementById('almenu').style.display;
	
	if(lathato =="none"){
		
		document.getElementById('almenu').style.display='block';
		
				
	}else{
		document.getElementById('almenu').style.display='none';
	
	}
	
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_aktualis(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vbt_main.php' width='1400px' height='1100px'></object>";
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="active";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}


function load_content_alapadat2(){
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='alapadat.php'width='1400px' height='1100px'></object>";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	var lathato=document.getElementById('almenu5').style.display;
	if(lathato =="none"){
		
		document.getElementById('almenu5').style.display='block';
		
				
	}else{
		document.getElementById('almenu5').style.display='none';
	
	}
	
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_kockazat1(){
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	var lathato=document.getElementById('almenu2').style.display;
	if(lathato =="none"){
		
		document.getElementById('almenu2').style.display='block';
			
	}else{
		document.getElementById('almenu2').style.display='none';
	}
	
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_kulcskockazat(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='meghat_kock.php'width='1400px' height='1100px'></object>";
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="active";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_ellenorzespont(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='ellenorzespont_alap.php' width='1400px' height='1100px'></object>";
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="active";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_vizsgalatok(){
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	var lathato=document.getElementById('almenu8').style.display;
	if(lathato =="none"){
		
		document.getElementById('almenu8').style.display='block';
		
				
	}else{
		document.getElementById('almenu8').style.display='none';
	}
	
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_felulvizsgalat(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='felulvizsgalat.php' width='1400px' height='1100px'></object>";
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="active";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_vbt_kezeles(){
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='alapadat.php'width='1400px' height='1100px'></object>";
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	var lathato=document.getElementById('almenu6').style.display;
	if(lathato =="none"){
		document.getElementById('almenu6').style.display='block';
	}else{
		document.getElementById('almenu6').style.display='none';
	}
	
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_jelentes(){
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	var lathato=document.getElementById('almenu3').style.display;
	if(lathato =="none"){
		
		document.getElementById('almenu3').style.display='block';
			
	}else{
		document.getElementById('almenu3').style.display='none';
	}
	
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";
	
}

function load_content_sugo(){
	
	document.getElementById('almenu').style.display='none';
	document.getElementById('almenu2').style.display='none';
	document.getElementById('almenu3').style.display='none';
	//document.getElementById('almenu4').style.display='none';
	document.getElementById('almenu5').style.display='none';
	document.getElementById('almenu6').style.display='none';
	document.getElementById('almenu7').style.display='none';
	document.getElementById('almenu8').style.display='none';
	
	var lathato=document.getElementById('almenu7').style.display;
	if(lathato =="none"){
		
		document.getElementById('almenu7').style.display='block';
			
	}else{
		document.getElementById('almenu7').style.display='none';
	}
	
	document.getElementById('li_kezdo').className="";
	document.getElementById('li_alapadat').className="";
	document.getElementById('li_aktualis').className="";
	document.getElementById('li_alapadat2').className="";
	document.getElementById('li_kockazat_alapadat').className="";
	document.getElementById('li_kulcskockazat_alapadat').className="";
	document.getElementById('li_ellenorzesi_pontok').className="";
	document.getElementById('li_ellenorzes_monitoring').className="";
	document.getElementById('li_felulvizsgalatok').className="";
	document.getElementById('li_vbt_kezeles').className="";
	document.getElementById('li_jelentesek').className="";
	document.getElementById('li_sugo').className="";
	document.getElementById('li_logout').className="";
	
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	document.getElementById('sli_listak').className="";
	document.getElementById('sli_sugo_jog').className="";
	document.getElementById('sli_sugo_modszer').className="";

}


//Főmenük vége----------------------------------------------------

//Almenük---------------------------------------------------------

function load_content_uzemeltet(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='uzemeltet_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_uzemeltet').className="active";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	
}

function load_content_uzemeltet_szerk(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='uzemeltet_alap_szerk.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="active";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="";
	
}	
	
function load_content_vizellato(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='vizellato_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="active";
	document.getElementById('sli_vizellato_szerk').className="";
	
}

function load_content_vizellato_szerk(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizellato_alap_szerk.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_uzemeltet').className="";
	document.getElementById('sli_uzemeltet_szerk').className="";
	document.getElementById('sli_vizellato').className="";
	document.getElementById('sli_vizellato_szerk').className="active";
	
}


function load_content_vizbazis(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='vizbazis_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="active";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	
}

function load_content_vizatvetel(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='vizatvetel_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="active";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
		
} 

function load_content_vizkezeles(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='vizkezeles_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="active";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	
}

function load_content_halozat(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='halozat_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="active";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	
}

function load_content_fogyaszto(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='fogyaszto_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="active";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	
}

function load_content_vizbazis_szerk(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizbazis_alap_szerk.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="active";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	
}	

	
function load_content_vizatvetel_szerk(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizatvetel_alap_szerk.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="active";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
	
}


function load_content_vizkezeles_szerk(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizkezeles_alap_szerk.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="active";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="";
}
	

function load_content_halozat_szerk(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='halozat_alap_szerk.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="active";
	document.getElementById('sli_fogyaszto_szerk').className="";
	
}
	

function load_content_fogyaszto_szerk(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='fogyaszto_alap_szerk.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis').className="";
	document.getElementById('sli_vizatvetel').className="";
	document.getElementById('sli_vizkezel').className="";
	document.getElementById('sli_halozat').className="";
	document.getElementById('sli_fogyaszto').className="";
	document.getElementById('sli_vizbazis_szerk').className="";
	document.getElementById('sli_vizatvetel_szerk').className="";
	document.getElementById('sli_vizkezel_szerk').className="";
	document.getElementById('sli_halozat_szerk').className="";
	document.getElementById('sli_fogyaszto_szerk').className="active";
	
}



function load_content_vizbazis_kock(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='kockazon_vizbazis.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis_kock').className="active";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	
}
	
function load_content_vizkezel_kock(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='kockazon_vizkezel.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="active";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="";
	
}
	
function load_content_halozat_kock(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='kockazon_halozat.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="active";
	document.getElementById('sli_fogyaszto_kock').className="";
	
}

function load_content_fogyaszto_kock(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='kockazon_fogyaszto.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizbazis_kock').className="";
	document.getElementById('sli_vizkezel_kock').className="";
	document.getElementById('sli_halozat_kock').className="";
	document.getElementById('sli_fogyaszto_kock').className="active";
	
}

function load_content_vizsgalati_pont_letrehozas(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizsgalati_pont_letrehozas.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizsgalat_rogzites').className="active";
	document.getElementById('sli_vizsgalat_listaz').className="";
	
}

function load_content_vizsgalati_eredmeny_rogzites(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizsgalati_eredmeny_rogzites.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="active";
	
}

function load_content_vizsgalat_rogzites(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizsgalat_rogzites.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizsgalat_rogzites').className="active";
	document.getElementById('sli_vizsgalat_listaz').className="";
	
}

function load_content_vizsgalat_listaz(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='vizsgalat_listazas.php' width='1400px' height='1100px'></object>";
	document.getElementById('sli_vizsgalat_rogzites').className="";
	document.getElementById('sli_vizsgalat_listaz').className="active";
	
}




function load_content_jovahagy(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='jovahagy_uzemeltet.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_uzem_jovahagy').className="active";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="";
	
}

function load_content_NKK(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='jovahagy_nkk.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="active";
	document.getElementById('sli_listak_archiv').className="";
	
}

function load_content_listak_archiv(){
	
	document.getElementById('js-content').innerHTML="<object type='text/html' data='lista_archiv.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_uzem_jovahagy').className="";
	document.getElementById('sli_nkk_jovahagy').className="";
	document.getElementById('sli_listak_archiv').className="active";
	
}


function load_content_listak(){
	
	document.getElementById('js-content').innerHTML="<object type='text/thml' data='jelentes_alap.php'width='1400px' height='1100px'></object>";
	document.getElementById('sli_listak').className="active";
	
}


function load_content_jogszabaly(){
	
	window.open("https://vibir.hu/jogszabalyok/");
	
}

function load_content_modszer(){
	
	window.open("http://vszucs.hu/projlab/DOC/Kockazatbecsles_modszertan_vibir.pdf", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
	
}
//Almenük vége----------------------------------------------------


function load_vbt_form(){
	
    document.getElementById("main_iframe").src="vbt_main.php";
	document.getElementById("alapadatok").style.display="block";
	document.getElementById("kock_azon").style.display="block";
	document.getElementById("felulvizsgalat").style.display="block";
	 
}


function alapadat_load(){
	
	document.getElementById("main_iframe").src="alapadat.php";
	
}

function kockazat_azonositas_load(){
	
	document.getElementById("main_iframe").src="kock_azon.php";	
	
}

function ellenorzopont_load(){
	
	document.getElementById("main_iframe").src="ellenorzopontok.php";
	
}

function felulvizsgalat_load(){
	
	document.getElementById("main_iframe").src="felulvizgalat.php";
}

function load_new_vbt(){
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='new_vbt.php' width='1400px' height='1100px'></object>";
	window.location.href = "new_vbt.php";
	
}

/*Uzemelteto alapadatok betoltese*/
function load_uzemeltet(){
	
	var uz_nev=document.getElementById("uzemeltet_valaszt").value;
	console.log(uz_nev);
	
}

/*Barbi formjaihoz*/
function load_uzemeltet_alap(){
	
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='uzemeltet_alap.php' width='1400px' height='1100px'></object>";
	window.location.href = "uzemeltet_alap.php";
}

function load_vizellato_alap(){
	
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='vizellato_alap.php' width='1400px' height='1100px'></object>";
	window.location.href = "vizellato_alap.php";
}

function load_lista_vvbt(){
	
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='jelentes_vvbt.php' width='1400px' height='1100px'></object>";
	window.location.href = "jelentes_vvbt.php";
}

function load_lista_csaknev(){
	
	
	//document.getElementById('js-content').innerHTML="<object type='text/thml' data='jelentes_csaknev.php' width='1400px' height='1100px'></object>";
	window.location.href = "jelentes_csaknev.php";
}
	