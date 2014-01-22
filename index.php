
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
				<!--<div id="tram" class="blocktbc">
					<p class="tram">tram<img src="style/images/icone_tram_b.png" alt="icone_tram_b"/>état<img class="tram" src="style/images/sprite_voyant.png" alt="icone voyant"/>Normal</p>
					<p class="nexttram">Prochains passages</p>		
					
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
				<div class="trait"></div>
				<!-- tram -->
				<div id="bus" class="blocktbc">
					<div class="bus">Tram<img src="style/images/icone_bus_10.png" alt="icone tram b"/>état</div>		<!-- bus -->
					<!--<div class="voyant_bus"><img src="style/images/sprite_voyant.png" alt="icone voyant"/>En retard</div>-->
					<div class="nextbus">Prochains passages</div>
					<div class="arret1">Arrêt Pessac:</div>
					<div class="horaire1"><?php echo $arretPC; ?></div>
					<div class="arret2">Arrêt Bx:</div>
					<div class="horaire2"><?php echo $arretBC; ?></div>
					<div class="trait"></div>
					<div class="vcub">Vélos vcub restants:</div>				<!-- vcub -->
					<div class="nb_vcub"><?php echo $VCub; ?></div>
				</div>

				<div class="cadre_blanc_tbc">								<!-- info -->
					<div class="info_tbc">Mauris tempor dapibus mi sed iaculissed hendrerit nisi non fermentum.Mauris tempor dapibus mi sed iaculisSed hendrerit fermentum.</div>
				</div>
				<div class="bulle_tbc"><img src="style/images/sprite_2bulle.png" alt="bulle"/></div>
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
					<div class="bulle_actu"><img src="style/images/sprite_3bulle.png" alt="bulle"/></div>
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
						<div class="ombre_grand_livre"><img src="style/images/ombre_livre.png" alt="ombre"/></div>
						<div class="grand_livre"><img class="imgbook" src="<?php echo $src ?>" alt="cambouis"/></div>
						<div class="grand_titre"><?php echo utf8_encode($title) ?></div>
						<div class="grand_auteur"><?php echo utf8_encode($author) ?></div>
					</div>
					<div class="cadre_blanc_babord2">
						<div class="livre" id="livre1">
							<div class="visuel1"><img src="style/images/heritier.jpg" alt"Les héritiers d'enkidiev"/></div>
							<div class="titre1">Les héritiers d'enkidiev</div>
							<div class="auteur1">Anne Robillard</div>
						</div>
						<div class="livre" id="livre2">
							<div class="visuel2"><img src="style/images/jours.jpg" alt"Cinq jours"/></div>
							<div class="titre2">Cinq jours</div>
							<div class="auteur2">Douglas Kennedy</div>
						</div>
						<div class="livre" id="livre3">
							<div class="visuel3"><img src="style/images/verite.jpg" alt"Une envie de vérité"/></div>
							<div class="titre3">Une envie de vérité</div>
							<div class="auteur3">Cécilia Attias</div>
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
