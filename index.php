<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Test</title>
    </head>

    <body>
<?php 	require_once "meteo.php";
 		require_once "tram.php"; 
		require_once "vcub.php"; ?>

		<div class="horloge">
			<div class="rectangleHorloge"></div>
		</div>
		
		<div class="actualites">
			<div class="rectangleActualites"></div>
		</div>
		
		<div class="diaporama">
			<div class="rectangleDiaporama"></div>
		</div>
		
		<div class="tbc">
			<div class="rectangleTbc"></div>
		</div>
		
		<div class="babord">
			<div class="rectangleBabord">

			</div>
		</div>
		
		<div class="meteo">
			<div class="rectangleMeteo">
				<h2>Meteo Bordeaux </H2>
				<?php setMeteo(); ?>
			</div>
		</div>
		<div class="tram">
			<div class="rectangleTram">
				<h2>Tram </H2>
				<?php setTram(); ?>
			</div>
		</div>
		<div class="vcub">
			<div class="rectangleVcub">
				<h2>VCub</H2>
				<?php setVcub(); ?>
			</div>
		</div>
    </body>
</html>

