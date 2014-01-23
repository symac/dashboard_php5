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
	$.post( "modules/tbc/tbc.php", function( returnedtbc ) {
		$( "#tbc" ).html( returnedtbc );
	});
	setInterval(function(){
		$( "#tbc" ).remove;
		$.post( "modules/tbc/tbc.php", function( returnedtbc ) {
			$( "#tbc" ).html( returnedtbc );
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