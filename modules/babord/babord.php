<?php 
include_once("getInfoLivre.php") ;
include_once ('simple_html_dom.php');
include_once('getTabLivres.php');

	$livres = getTabLivres(1);

	for ($i=0 ; $i<=3 ; $i++){
		$titre[]=$livres[$i][0];
		$auteur[]=$livres[$i][1];
		$src_image[]=$livres[$i][2]; 
	}
?>
<div class="nouveaux">Nouveaux arrivages</div>
<div class="cadre_blanc_babord1">
	<div class="grand_livre"><img class="imgbook" src="<?php echo ($src_image[0]); ?>" alt="cambouis"/></div>
	<div class="grand_titre"><?php echo utf8_encode($titre[0]); ?></div>
	<div class="grand_auteur"><?php echo utf8_encode($auteur[0]); ?></div>
</div>
<div class="cadre_blanc_babord2">
	<div class="livre" id="livre1">
		<div class="visuel1"><img src="<?php echo ($src_image[1]); ?>" alt="Les héritiers d enkidiev"/></div>
		<div class="titre1"><?php echo utf8_encode($titre[1]); ?></div>
		<div class="auteur1"><?php echo utf8_encode($auteur[1]); ?></div>
	</div>
	<div class="livre" id="livre2">
		<div class="visuel2"><img src="<?php echo ($src_image[2]); ?>" alt="Cinq jours"/></div>
		<div class="titre2"><?php echo utf8_encode($titre[2]); ?></div>
		<div class="auteur2"><?php echo utf8_encode($auteur[2]); ?></div>
	</div>
	<div class="livre" id="livre3">
		<div class="visuel3"><img src="<?php echo ($src_image[3]); ?>" alt="Une envie de vérité"/></div>
		<div class="titre3"><?php echo utf8_encode($titre[3]); ?></div>
		<div class="auteur3"><?php echo utf8_encode($auteur[3]); ?></div>
	</div>
</div>