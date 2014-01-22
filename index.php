
<?php require_once "indexAction.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />			<!-- Appel style css -->
        <link rel="stylesheet" href="style/font.css" />				<!-- Appel font css -->
        <title>Board</title>
        <script src="jquery.js"></script>
		<script src="functions.js"></script>
		<script src="heure.js"></script>
    </head>
    <body>
    	<span id="sideleft">
	    	<!-- Module horloge -->
			<div id="horloge" class="module noir">										
				<div class="inner_horloge">								<!-- Container horloge -->
					<div class="date">Mardi 21 Janvier</div>
					<div id="js_heure" class="heure"></div>
				</div>
			</div>

			<!-- Module TBC -->
			<div id="tbc" class="module">
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
			</div>
		</span>
		<span id="sideright">
			<div id="top">
				<!-- Module actualités -->
				<div id="actualites" class="module blanc">
					<div class="actualite">Actualités</div>
					<?php for($i=0; $i<=1; $i++){ ?>
						<div id="cadre_blanc_actu<?php echo $i; ?>" class="cadre_blanc_actu">
							<div id="actu<?php echo $i; ?>" class="actu"><h3><?php echo $actus[$i]['titre']; ?></h3><p><?php echo $actus[$i]['info']; ?></p></div>
						</div>
						<div id="traitactu<?php echo $i; ?>" class="traitactu"></div>
					<?php } ?>
					<!--<div class="bulle_actu"><img src="style/images/sprite_3bulle.png" alt="bulle"/></div> -->
					</div>
				<!-- Module diaporama -->
				<div id="diaporama" class="module">
					<div class="logo_univ"><img src="style/images/logo_univ.png" alt="logo université"/></div>
					<div class="diapo1"><img src="style/images/bu.jpg" alt="bu"/></div>
				</div>
			</div>
			<span id="bottom">
				<!-- Module babord -->
				<div id="babord" class="module">
					<div class="nouveaux">Nouveaux arrivages</div>
					<div class="cadre_blanc_babord1">
						<div class="grand_livre"><img class="imgbook" src="<?php echo ($src_image[0]) ?>" alt="cambouis"/></div>
						<div class="grand_titre"><?php echo utf8_encode($titre[0]) ?></div>
						<div class="grand_auteur"><?php echo utf8_encode($auteur[0]) ?></div>
					</div>
					<div class="cadre_blanc_babord2">
						<div class="livre" id="livre1">
							<div class="visuel1"><img src=<?php echo ($src_image[1]) ?> alt"Les héritiers d'enkidiev"/></div>
							<div class="titre1"><?php echo utf8_encode($titre[1]) ?></div>
							<div class="auteur1"><?php echo utf8_encode($auteur[1]) ?></div>
						</div>
						<div class="livre" id="livre2">
							<div class="visuel2"><img src="<?php echo ($src_image[2]) ?>" alt"Cinq jours"/></div>
							<div class="titre2"><?php echo utf8_encode($titre[2]) ?></div>
							<div class="auteur2"><?php echo utf8_encode($auteur[2]) ?></div>
						</div>
						<div class="livre" id="livre3">
							<div class="visuel3"><img src="<?php echo ($src_image[3]) ?>" alt"Une envie de vérité"/></div>
							<div class="titre3"><?php echo utf8_encode($titre[3]) ?></div>
							<div class="auteur3"><?php echo utf8_encode($auteur[3]) ?></div>
						</div>
					</div>
				</div>
				<!-- Module météo -->
				<div id="meteo" class="module">
					<div class="ville">Bordeaux</div>
					<div class="temps"><?php echo $tempAjd.'°C <img src="style/images/'.htmlentities($meteoAjd).'.png" />'; ?></div>
					<div class="semaine" id="semaine">
						<ul>
							<li><?php echo $jour2; ?></li>
							<li><?php echo $jour3; ?></li>
							<li><?php echo $jour4; ?></li>
							<li><?php echo $jour5; ?></li>
						</ul>
					</div>
					<div class="semaine" id="temps_semaine">
						<ul>
							<li><span> <?php echo $temp2; ?> °C</span></li>
							<li><span> <?php echo $temp3; ?> °C</span></li>
							<li><span> <?php echo $temp4; ?> °C</span></li>
							<li><span> <?php echo $temp5; ?> °C</span></li>
						</ul>
					</div>
					<div class="semaine" id="picto_semaine">
						<ul>
							<li><span> <img src="style/images/<?php echo htmlentities($meteo2);?>.png"/></span></li>
							<li><span> <img src="style/images/<?php echo htmlentities($meteo3);?>.png"/></span></li>
							<li><span> <img src="style/images/<?php echo htmlentities($meteo4);?>.png"/></span></li>
							<li><span> <img src="style/images/<?php echo htmlentities($meteo5);?>.png"/></span></li>
						</ul>
					</div>
				</div>
			</span>
		</span>
    </body>
</html>
