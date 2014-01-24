$(document).ready(function(){
	var blbl=0;
	setInterval(function(){
		$( ".cadre_blanc_actu" ).animate({top:"-=233"},1500, function(){	
			$( "#actualites" ).remove;	
			$.post( "modules/actualite/actualite.php", {na: blbl}, function( returned ) {
				$( "#actualites" ).html( returned );
			});
		});
		
		if(blbl>=9){
			blbl=0;
		}
		else{
			blbl++;
		}
		return false;
	},10000);
});

$(document).ready(function(){
	$.post( "modules/tbc/tram.php", function( returnedtbc ) {
		$( "#tram" ).html( returnedtbc );
	});
	setInterval(function(){
		$( "#tram" ).remove;
		$.post( "modules/tbc/tram.php", function( returnedtbc ) {
			$( "#tram" ).html( returnedtbc );
		});
		return false;
	},60000);
});

$(document).ready(function(){
	$.post( "modules/tbc/vcub.php", function( returnedtbc ) {
		$( "#vcub" ).html( returnedtbc );
	});
	setInterval(function(){
		$( "#vcub" ).remove;
		$.post( "modules/tbc/vcub.php", function( returnedtbc ) {
			$( "#vcub" ).html( returnedtbc );
		});
		return false;
	},60000);
});

$(document).ready(function(){
	$.post( "modules/meteo/meteo.php", function( returnedmeteo ) {
		$( "#meteo" ).html( returnedmeteo );
	});
	setInterval(function(){
		$( "#meteo" ).remove;
		$.post( "modules/meteo/meteo.php", function( returnedmeteo ) {
			$( "#meteo" ).html( returnedmeteo );
		});
		return false;
	},120000);
});

$(document).ready(function(){

	$.post( "modules/babord/getTabLivres.php", function( returned ) {
			$( "#babord" ).html( returned );
			var compt=1;
			$.post( "modules/babord/babord.php", {na: compt}, function( returned ) {
					$( "#babord" ).html( returned );
			});
			compt++;
			setInterval(function(){
				$( "#actualites" ).remove;
				$.post( "modules/babord/babord.php", {na: compt}, function( returned ) {
					$( "#babord" ).html( returned );
				});
				if(compt>=9){
					compt=1;
				}
				else{
					compt++;
				}
				return false;
			},15000);
	});

	setInterval(function(){
		$.post( "modules/babord/getTabLivres.php", function( returned ) {
			$( "#babord" ).html( returned );
			var compt=1;
			$.post( "modules/babord/babord.php", {na: compt}, function( returned ) {
					$( "#babord" ).html( returned );
			});
			compt++;
			setInterval(function(){
				$( "#actualites" ).remove;
				$.post( "modules/babord/babord.php", {na: compt}, function( returned ) {
					$( "#babord" ).html( returned );
				});
				if(compt>=9){
					compt=1;
				}
				else{
					compt++;
				}
				return false;
	},15000);
		});
		return false;
	},86400000);
});
