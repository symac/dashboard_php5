<?php

require_once("simple_html_dom.php");
require_once("getZone.php");	
require_once("cbToUrl.php");	

global $html;

function getInfoLivre($id, $html)
{
	$cnx = mysql_connect( "db4free.net", "raspberry", "raspberry" );

	$db = mysql_select_db( "biblio_db" );

	$sql = 'SELECT * FROM code_barre WHERE id='.$id.'';

	$requete = mysql_query( $sql, $cnx ) or die( "ERREUR MYSQL num�ro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$result = mysql_fetch_object( $requete );


	//$html = file_get_html('http://babordplus.univ-bordeaux.fr/notice.php?q=cab:(3SCD0002500)&ct=bx3_ws');		//version avec saisie brute de l'URL
	$html = file_get_html(cbToUrl($result->cb));																//Version pour la r�cup�ration en base de donne�s
	$title = getZone("h1[class=book_title]",$html);
	$title = utf8_decode($title);																				// utf8_decode pour g�rer les caract�res sp�ciaux


	$creator = getZone("dd[class=auteur_principal]",$html);														// g�re le cas o� le nom de la classe est "auteur_principal"
	if (empty($creator)){		
		$creator = getZone("dd[class=stat_rebond_auteur]",$html);												// g�re le cas o� le nom de la classe est "stat_rebond_auteur"
	}
	$creator = utf8_decode($creator);
	$collection = $html->find('img');																			//R�cup�re toutes les images pr�sentes dans la page (icones + couverture)

	/*print($title)."\n";
	echo '</br>';
	print($creator)."\n";
	echo '</br>';*/
																				
	$src = "";																									//Initialisation

	foreach($collection as $image){																				//Boucle pour faire d�rouler les images obtenues avec le find																							//Condition permettant de s�lectionner uniquement la couverture (et �viter les 4 icones)
		$src = $image->getAttribute('src');																		
		$pos = strpos($src, 'vignette');																		//Verifie la position de vignette dans la source de l'image, permet de verifier qu'il s'agit de la couverture
		if ($pos !== false) {																					
			$src = 'http://babordplus.univ-bordeaux.fr/'.$src.'';												//reconstitution de l'URL
			/*echo '</br>';
			echo '<img src="'.$src.'" border="0" />';*/
		}
		else{
			$src ="";
		}
	}
return $infosLivre = array($title, $creator, $src);
}

?>
