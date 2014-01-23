<?php
	if(!empty($_POST['na'])){

	$actu=$_POST['na'];
	}
	else{
		$actu=0;
	}
	include ("getActus.php");
?>

<div class="actualite">Actualités</div>
<div id="cadre_blanc_actu0" class="cadre_blanc_actu">
	<div id="actu0" class="actu"><h3><?php echo get_actu($actu)['titre']; ?></h3><p class="pactu"><?php echo get_actu($actu)['info']; ?></p></div>
</div>
<div id="traitactu0" class="traitactu"></div>
<div id="cadre_blanc_actu1" class="cadre_blanc_actu">
	<div id="actu1" class="actu"><h3><?php echo get_actu($actu+1)['titre']; ?></h3><p class="pactu"><?php echo get_actu($actu+1)['info']; ?></p></div>
</div>
