<?php
function setMeteo(){

	$meteodoc = new DOMDocument();
	$meteodoc->load('http://weather.yahooapis.com/forecastrss?w=580778&u=c');
	$xpath = new DOMXpath($meteodoc);
	$xpath->registerNamespace("yweather", "http://xml.weather.yahoo.com/ns/rss/1.0");

		/* requetes dans namespace condition*/
	$qcondition = "//yweather:condition";
	$condition = $xpath->query($qcondition, $meteodoc);

			/* requetes dans namespace forecast*/
	$qforecast = "//yweather:forecast";
	$forecast = $xpath->query($qforecast, $meteodoc);

	function febo($c){
		switch($c){
			case 31:
			case 32:
			case 33:
			case 34:
			case 36:
				return "Fait beau ! ";
				break;
			case 28:
			case 30:
			case 44:	
				return "y'a du nuage et du soleil !";
				break;
			case 13:
			case 14:
			case 29:
				return "ya que des nuages ...";
				break;
			case 26:
			case 27:
				return "y'a du gros nuage !";
				break;
			case 1:
			case 2:
			case 9:
			case 10:
			case 11:
			case 12:
			case 39:
			case 40:
			case 45:
				return "ça pleut !";
				break;
			case 5:
			case 7:
			case 8:
			case 15:
			case 16:
			case 18:
			case 46:
			case 43:
			case 42:
			case 41:
				return "ça neige !";
				break;
			case 0:
			case 3:
			case 4:
			case 17:
			case 35:
			case 37:
			case 38:
			case 47:
				return "y'a d'l'oraaage ! haa !";
				break;
			case 19:
			case 20:
			case 21:
			case 22:
				return "j'y vois rien !";
				break;
			case 23:
			case 24:
				return "y'a trop d'vent !";
				break;
			case 25:
			return "ça caille !";
				break;
			}
		}

foreach($condition as $resultc) {
		$datatemp = $resultc->getAttribute('temp');
		$datacodej = $resultc->getAttribute('code');
		$weazerd = febo($datacodej);
		echo "Aujourd'hui, il fait ".$datatemp." °C</br>".$weazerd."</br>";
	}
	


	function translateDay($j){
		switch($j){
			case "Mon":
		    return "Lundi";
		        break;
			case "Tue":
		    return "Mardi";
		        break;
			case "Wen":
		    return "Mercredi";
		        break;
		    case "Thu":
		    return "Jeudi";
		        break;
			case "Fri":
		    return "Vendredi";
		        break;
		    case "Sat":
		    return "Samedi";
		        break;
		    case "Sun":
		    return "Dimanche";
		        break;
		}
	}
	
	

	foreach($forecast as $resultf) {
		//Récupe les données
		$dataday = $resultf->getAttribute('day');
		$datalow = $resultf->getAttribute('low');
		$datahigh = $resultf->getAttribute('high');
		$datacode = $resultf->getAttribute('code');

		//traite les données
		$weazer = febo($datacode);
		$moyTemp = ($datalow+$datahigh)/2;
		$jour = translateDay($dataday);
		$semaine = "</br>".$jour.", ".$weazer." Il fera ".$moyTemp." °C";
		echo $semaine;
	}
}
?>