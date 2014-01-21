<?php 
require_once "vcub.php"; 
require_once "getInfoLivre.php";
require_once "simple_html_dom.php";
include_once('getdatas/getMeteo.php');
include_once('getdatas/getActus.php');
include_once('getdatas/getTram.php');
include_once('getdatas/cbToUrl.php');
include_once('getdatas/getInfoLivre.php');
include_once('getdatas/getNbLivres.php');
include_once('getdatas/getTabLivres.php');
include_once('getdatas/getTime.php');
include_once('getdatas/getZone.php');

		$id=2;
		list ($title, $author, $src) = getInfoLivre($id, $html);
		$VCub = setVCub();
		
$heure = date('H:i');

$meteos=get_meteo();

if ($meteos!=""){
		list ($tempAjd, $meteoAjd, 
			$jour1, $temp1, $meteo1, 
			$jour2, $temp2, $meteo2, 
			$jour3, $temp3, $meteo3, 
			$jour4, $temp4, $meteo4, 
			$jour5, $temp5, $meteo5) 
		= $meteos;
}
else{
	list ($tempAjd, $meteoAjd, 
			$jour1, $temp1, $meteo1, 
			$jour2, $temp2, $meteo2, 
			$jour3, $temp3, $meteo3, 
			$jour4, $temp4, $meteo4, 
			$jour5, $temp5, $meteo5)= array("indisponible","indisponible", "indisponible", "?", "#","indisponible", "?", "","indisponible", "?", "","indisponible", "?", "","indisponible", "?", "");
}



$actus = get_actu();
foreach($actus as $cle => $actu)
{
    $actus[$cle]['titre'] = $actu['titre'];
    $actus[$cle]['article'] = $actu['info'];
}

$trams=get_tram();
list ($arretPC, $arretBC) = $trams;

?>