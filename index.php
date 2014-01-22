
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

    </head>
    <body>
    	<span id="sideleft">
	    	<!-- Module horloge -->
			<div id="horloge" class="module noir">										

			</div>

			<!-- Module TBC -->
			<div id="tbc" class="module">

			</div>
		</span>
		<span id="sideright">
			<div id="top">
				<!-- Module actualités -->
				<div id="actualites" class="module blanc">
					<?php include("modules/actualite/actualite.php"); ?>
				</div>
				<!-- Module diaporama -->
				<div id="diaporama" class="module">

				</div>
			</div>
			<span id="bottom">
				<!-- Module babord -->
				<div id="babord" class="module">

				</div>
				<!-- Module météo -->
				<div id="meteo" class="module">
				</div>
			</span>
		</span>
    </body>
</html>
