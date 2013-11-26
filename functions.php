<?php

function getMeteo(){
	$meteodoc = new DOMDocument();
	$meteodoc->load('http://weather.yahooapis.com/forecastrss?w=580778&u=c');

	$channel = $meteodoc->getElementsByTagName("channel");

	foreach($channel as $chnl)
		{

		$item = $chnl->getElementsByTagName("item");
		foreach($item as $itemgotten)
		{
			
			$describe = $itemgotten->getElementsByTagName("description");
			
			$description = $describe->item(0)->nodeValue;
			
			echo $description;
		}
	}
}
?>
