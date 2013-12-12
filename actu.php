<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Test</title>
    </head>

<?php

	
	$actudoc = new DOMDocument();
	$actudoc->load('http://www.u-bordeaux3.fr/_plugins/web/www/fr/filter/org.ametys.web.new.www.RSS/rss.xml');
	$item = $actudoc->getElementsByTagName("item");
	foreach($item as $it) {
		echo "<div><ul>";
		foreach($it->childNodes as $i=>$post){
			echo "<li>";
			if($post->nodeName =="title"){
				echo $post->nodeValue;
			}
			if($post->nodeName =="description"){
				echo $post->nodeValue;
			}
			echo "</li>";
		}
		echo "</ul></br></br></br></br></br></br></div>";
	}

?>

</html>

<!-- $titre = $it->getElementsByTagName("title");
		$description = $it->getElementsByTagName("description");
		echo $titre."</br>".$description."</br>"; -->