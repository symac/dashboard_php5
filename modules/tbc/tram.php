<?php include("getTram.php");
	
$heure = date('H:i');
$trams=get_tram();
list ($arretPC, $arretBC) = $trams;

?>

<div class="logo_tbc"><img src="style/images/logo_tbc.png" alt="logo_tbc"/></div>
<div class="trait"></div>
<div class="tram">Tram<img src="style/images/icone_tram_b.png" alt="icone tram b"/></div>		<!-- tram -->
<!--<div class="voyant_tram"><img src="style/images/sprite_voyant.png" alt="icone voyant"/>En retard</div>-->
<div class="nextTram">Prochains passages :</div>
<div class="arret1">Arrêt Montaigne</br>vers Pessac</div>
<div class="horaire1"><?php echo $arretPC; ?></div>
<div class="arret2">Arrêt Montaigne</br>vers Bordeaux</div>
<div class="horaire2"><?php echo $arretBC; ?></div>