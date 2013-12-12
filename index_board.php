<?php 	require_once "functions.php";
 		require_once "tram.php"; 
		require_once "vcub.php"; 

		$heure = date('H:i');

		list ($arretPC, $arretBC) = setTram();

		$VCub = setVCub();

		?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_board.css" />					<!-- Appel style css -->
        <link rel="stylesheet" href="font_board/font_board.css" />				<!-- Appel font css -->
        <title>Board</title>
    </head>

    <body>
		<div class="horloge">										<!-- Module horloge -->
			<div class="inner_horloge">								<!-- Container horloge -->
				<div class="date">Mardi 21 Janvier</div>
				<div class="heure"><?php echo $heure;?></div>
			</div>
		</div>
		<div class="actualites">
			<div class="actualite">Actualités</div>
			<div class="cadre_blanc_actu1">
				<div class="actu1">Mauris tempor dapibus mi sed iaculisSed hendrerit ninon fermentum.Mauris tempor dapibus mi sed aculisSed hendrerit nisi non fermentum.</div>
			</div>
			<div class="traitactu1"></div>
			<div class="cadre_blanc_actu2">
				<div class="actu2">Mauris tempor dapibus mi sed iaculisSed hendrerit ninon fermentum.Mauris tempor dapibus mi sed aculisSed hendrerit nisi non fermentum.</div>
			</div>
			<div class="traitactu2"></div>
				<div class="cadre_blanc_actu3">
			<div class="actu3">Mauris tempor dapibus mi sed iaculisSed hendrerit ninon fermentum.Mauris tempor dapibus mi sed iaculisSed hendrerit nisi non fermentum.</div>
			</div>
			<div class="bulle_actu"><img src="images_board/sprite_3bulle.png" alt="bulle"/></div>
		</div>
		<div class="diaporama">
			<div class="logo_univ"><img src="images_board/logo_univ.png" alt="logo université"/></div>
			<div class="diapo1"><img src="images_board/bu.jpg" alt="bu"/></div>
		</div>
		<div class="tbc">
			<div class="logo_tbc"><img src="images_board/logo_tbc.png" alt="logo_tbc"/></div>
			<div class="traittbc1"></div>
			<div class="tram">tram<img src="images_board/icone_tram_b.png" alt="icone_tram_b"/>état</div>
			<div class="voyant_tram"><img src="images_board/sprite_voyant.png" alt="icone voyant"/>Normal</div>
			<div class="nexttram">Prochains passages</div>		<!-- tram -->
			<div class="dest1">Vers Destination 1:</div>
			<div class="time1_1">3<span>min</span></div>
			<div class="time1_2">8<span>min</span></div>
			<div class="dest2">Vers Destination 2:</div>
			<div class="time2_1">5<span>min</span></div>
			<div class="time2_2">10<span>min</span></div>
			<div class="traittbc2"></div>
			<div class="bus">Bus<img src="images_board/icone_bus_10.png" alt="icone tram b"/>état</div>		<!-- bus -->
			<div class="voyant_bus"><img src="images_board/sprite_voyant.png" alt="icone voyant"/>En retard</div>
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
			<div class="bulle_tbc"><img src="images_board/sprite_2bulle.png" alt="bulle"/></div>
		</div>
		<div class="babord">
			<div class="nouveaux">Nouveaux arrivages</div>
			<div class="cadre_blanc_babord1">
				<div class="ombre_grand_livre"><img src="images_board/ombre_livre.png" alt="ombre"/></div>
				<div class="grand_livre"><img src="images_board/cambouis.jpg" alt="cambouis"/></div>
				<div class="grand_titre">Cambouis</div>
				<div class="grand_auteur">Loan Hill</div>
				<div class="grand_type">Roman</div>
			</div>
			<div class="cadre_blanc_babord2">
				<div class="livre1">
					<div class="visuel1"><img src="images_board/heritier.jpg" alt"Les héritiers d'enkidiev"/></div>
					<div class="titre1">Les héritiers d'enkidiev</div>
					<div class="auteur1">Anne Robillard</div>
				</div>
				<div class="livre2">
					<div class="visuel2"><img src="images_board/jours.jpg" alt"Cinq jours"/></div>
					<div class="titre2">Cinq jours</div>
					<div class="auteur2">Douglas Kennedy</div>
				</div>
				<div class="livre3">
					<div class="visuel3"><img src="images_board/verite.jpg" alt"Une envie de vérité"/></div>
					<div class="titre3">Une envie de vérité</div>
					<div class="auteur3">Cécilia Attias</div>
				</div>
			</div>

		</div>
		<div class="meteo">
			<div class="ville">Bordeaux</div>
			<div class="phrase">Belles éclaircies</div>
			<div class="temps">14°<img src="images_board/couvert.png" alt"couvert"/></div>
			<div class="semaine">
				<ul>
					<li>lundi</li>
					<li>mardi</li>
					<li>mercredi</li>
					<li>jeudi</li>
					<li>vendredi</li>
					<li>samedi</li>
				</ul>
			</div>
			<div class="temps_semaine">
				<ul>
					<li>12°<img src="images_board/pluie.png" alt"pluie"/></li>
					<li>13°<img src="images_board/pluie.png" alt"pluie"/></li>
					<li>15°<img src="images_board/couvert.png" alt"couvert"/></li>
					<li>17°<img src="images_board/soleil.png" alt"soleil"/></li>
					<li>14°<img src="images_board/couvert.png" alt"couvert"/></li>
					<li>15°<img src="images_board/couvert.png" alt"couvert"/></li>
				</ul>
			</div>
		</div>
    </body>
</html>