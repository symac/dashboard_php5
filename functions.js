$(document).ready(function(){
	var blbl=0;
	setInterval(function(){
		$( "#actualites" ).remove;
		$.post( "modules/actualite/actualite.php", {na: blbl}, function( returned ) {
			$( "#actualites" ).html( returned );
		});
		if(blbl>=9){
			blbl=0;
		}
		else{
			blbl++;
		}
		return false;
	},5000);
});