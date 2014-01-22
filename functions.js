$(document).ready(function(){
	setInterval(function(){
		$('div.actu').slideUp("slow");
		$('div.actu').slideDown("slow");

	},30000);

	setInterval(function(){
		$('div.actu').slideUp("slow");
		$('div.actu').slideDown("slow");

	},30000);


var datastring = 'objet='+objet+'&nom='+nom+'&email='+email+'&message='+message;


$.ajax({
	type:"POST",
	url:"getdatas/getInfoLivre.php",
	data: datastring,

	success: function() {  
	    $('#formcont').html("<div id='message'></div>");  
	    $('#message').html("<h3>C'est parti !</h3>")  
	    .append("<p>Je vous répondrais très prochainement, à bientôt !</p>")  
	    .hide()  
	    .fadeIn(1500);  
	  }  
});

});