<?php require_once("modules/tbc/vcub.php"); 
require_once("modules/tbc/getTram.php");

$VCub = setVCub();		
$heure = date('H:i');
$trams=get_tram();
list ($arretPC, $arretBC) = $trams;

?>

				<div class="logo_tbc"><img src="style/images/logo_tbc.png" alt="logo_tbc"/></div>
				<div class="trait"></div>
				<!--<div id="bus" class="blocktbc">
					<p class="bus">bus<img src="style/images/icone_bus_10.png" alt="icone_bus_10"/>état<img class="bus" src="style/images/sprite_voyant.png" alt="icone voyant"/>Normal</p>
					<p class="nextBus">Prochains passages</p>		
					
					<div class="destination">
						<p class="dest">Vers Destination 1:</p>
						<p class="time">3<span>min</span></p>
						<p class="time">8<span>min</span></p>
					</div>
					<div class="destination">
						<p class="dest">Vers Destination 2:</p>
						<p class="time">5<span>min</span></p>
						<p class="time">10<span>min</span></p>
					</div>
				</div>-->
				<!-- tram -->
				<div id="tram" class="blocktbc">
					<div class="tram">Tram<img src="style/images/icone_tram_b.png" alt="icone tram b"/></div>		<!-- tram -->
					<!--<div class="voyant_tram"><img src="style/images/sprite_voyant.png" alt="icone voyant"/>En retard</div>-->
					<div class="nextTram">Prochains passages :</div>
					<div class="arret1">Arrêt Montaigne</br>vers Pessac</div>
					<div class="horaire1"><?php echo $arretPC; ?></div>
					<div class="arret2">Arrêt Montaigne</br>vers Bordeaux</div>
					<div class="horaire2"><?php echo $arretBC; ?></div>
					<div class="vcub">Vcub restants :</div>				<!-- vcub -->
					<div class="nb_vcub"><?php echo $VCub; ?></div>
				</div>

				<div class="cadre_blanc_tbc">								<!-- info -->
					<div class="info_tbc">Iaculissed hendrerit nisi non fermentum.Mauris tempor dapibus mi sed iaculisSed hendrerit fermentum.</div>
				</div>
				<!-- <div class="bulle_tbc"><img src="style/images/sprite_2bulle.png" alt="bulle"/></div> -->