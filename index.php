<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Test</title>
    </head>

    <body>
<?php require_once "functions.php"; ?>
<?php require_once "webscraping.php"; ?>

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
    </body>
</html>

