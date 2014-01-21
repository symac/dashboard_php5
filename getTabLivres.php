<?php 

require_once "getInfoLivre.php";
require_once "getNbLivres.php";
require_once("getZone.php");	
require_once("cbToUrl.php");	


set_time_limit(300);
global $html;

function getTabLivres() {

	global $nbLivres;
	$nbLivres = getNbLivres();


	for ($i=1; $i<=$nbLivres; $i++){
		echo ('debut ligne ' . $i . ' : nblivres : ' . $nbLivres . "<br>");
		$arraytest[] = getInfoLivre($i);
		$content = $arraytest[$i-1][0];
		if ($content=="vide"){
			echo ("vide  <br>");
			$nbLivres = $nbLivres + 1 ;	
		} 	
		else {
			$array[] = getInfoLivre($i);
		}												
		echo ("fin ligne " . $i . " : nblivres : " . $nbLivres . "<br>");	
	}

	return $array;
}

$array_affichage[] = getTabLivres() ;

var_dump($array_affichage[0]);


?>	