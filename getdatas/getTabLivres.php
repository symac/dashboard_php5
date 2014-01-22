<?php 

require_once "getInfoLivre.php";
require_once "getNbLivres.php";
require_once("getZone.php");	
require_once("cbToUrl.php");	


set_time_limit(300);
global $html;


function getTabLivres($compteur) {
	global $iMax;
	$iMax = $compteur + 4 ;


	for ($i=$compteur ; $i<$iMax ; $i++){
		$arraytest[] = getInfoLivre($i);
		$content = $arraytest[$i-$compteur][0];
		if ($content=="vide"){
			$iMax = $iMax + 1 ;	
		} 	
		else {
			$array[] = getInfoLivre($i);
		}												
	}

	return $array;
}


?>	