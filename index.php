<?php 	require_once "vcub.php"; 
		require_once "simple_html_dom.php";
		?>
<!DOCTYPE html>
<html>
    <head>
    	<?php include("indexAction.php"); ?>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />			<!-- Appel style css -->
        <link rel="stylesheet" href="style/font.css" />				<!-- Appel font css -->
        <title>Board</title>
    </head>
    <body>
    	<span id="sideleft">
	    	<!-- Module horloge -->
			<div id="horloge" class="module noir">										
				<div class="inner_horloge">								<!-- Container horloge -->
					<div class="date">Mardi 21 Janvier</div>
					<div class="heure"><?php echo $heure;?></div>
				</div>
			</div>

			<!-- Module TBC -->
			<div id="tbc" class="module">
				<div class="logo_tbc"><img src="style/images/logo_tbc.png" alt="logo_tbc"/></div>
				<div class="traittbc1"></div>
				<div class="tram">tram<img src="style/images/icone_tram_b.png" alt="icone_tram_b"/>état</div>
				<div class="voyant_tram"><img src="style/images/sprite_voyant.png" alt="icone voyant"/>Normal</div>
				<div class="nexttram">Prochains passages</div>		<!-- tram -->
				<div class="dest1">Vers Destination 1:</div>
				<div class="time1_1">3<span>min</span></div>
				<div class="time1_2">8<span>min</span></div>
				<div class="dest2">Vers Destination 2:</div>
				<div class="time2_1">5<span>min</span></div>
				<div class="time2_2">10<span>min</span></div>
				<div class="traittbc2"></div>
				<div class="bus">Bus<img src="style/images/icone_bus_10.png" alt="icone tram b"/>état</div>		<!-- bus -->
				<div class="voyant_bus"><img src="style/images/sprite_voyant.png" alt="icone voyant"/>En retard</div>
				<div class="nextbus">Prochains passages</div>
				<div class="arret1">Arrêt Pessac:</div>
				<div class="horaire1"><?php echo $arretPC; ?></div>
				<div class="arret2">Arrêt Bx:</div>
				<div class="horaire2"><?php echo $arretBC; ?></div>
				<div class="traittbc3"></div>
				<div class="vcub">Vélos vcub restants:</div>				<!-- vcub -->
				<div class="nb_vcub"><?php echo $VCub; ?></div>
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
				<div id="diaporama">
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
						<div class="livre1">
							<div class="visuel1"><img src="style/images/heritier.jpg" alt"Les héritiers d'enkidiev"/></div>
							<div class="titre1">Les héritiers d'enkidiev</div>
							<div class="auteur1">Anne Robillard</div>
						</div>
						<div class="livre2">
							<div class="visuel2"><img src="style/images/jours.jpg" alt"Cinq jours"/></div>
							<div class="titre2">Cinq jours</div>
							<div class="auteur2">Douglas Kennedy</div>
						</div>
						<div class="livre3">
							<div class="visuel3"><img src="style/images/verite.jpg" alt"Une envie de vérité"/></div>
							<div class="titre3">Une envie de vérité</div>
							<div class="auteur3">Cécilia Attias</div>
						</div>
					</div>
				</div>
				<!-- Module météo -->
				<div id="meteo" class="module">
					<div class="ville">Bordeaux</div>
					<div class="phrase">Belles éclaircies</div>
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
