<?php 
include ("getActus.php");

$actus = get_actu();
foreach($actus as $cle => $actu)
{
    $actus[$cle]['titre'] = $actu['titre'];
    $actus[$cle]['article'] = $actu['info'];
}

?>



					<div class="actualite">Actualités</div>
					<?php for($i=0; $i<=1; $i++){ ?>
						<div id="cadre_blanc_actu<?php echo $i; ?>" class="cadre_blanc_actu">
							<div id="actu<?php echo $i; ?>" class="actu"><h3><?php echo $actus[$i]['titre']; ?></h3><p><?php echo $actus[$i]['info']; ?></p></div>
						</div>
						<div id="traitactu<?php echo $i; ?>" class="traitactu"></div>
					<?php } ?>
					<!--<div class="bulle_actu"><img src="style/images/sprite_3bulle.png" alt="bulle"/></div> -->