$(document).ready(function(){


	/*ajax actualités*/
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


/*TBC*/
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



/*meteo*/
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
