<?php

$cnx = mysql_connect( "localhost", "root", "" );

$db = mysql_select_db( "biblio" );

$ajout = $_POST["codebarre"] ;

$id=2;

$sql = "INSERT INTO code_barre(cb) VALUES('.$ajout.') ";

$requete = mysql_query( $sql, $cnx ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );

if($requete)
{
	echo("L'insertion a été correctement effectuée") ;
}
else
{
	echo("L'insertion à échouée") ;
}

?>