<?php

$html = file_get_contents('http://babordplus.univ-bordeaux.fr/notice.php?q=pour%20les%20nuls&spec_expand=1&sort_define=&sort_order=&rows=&start=1'); //get the html returned from the following url
$babord_doc = new DOMDocument();
$babord_doc2 = new DOMDocument();
$html = preg_replace('#<!--.*?-->#s', '', $html); // HTML (<!--tralala-->)
$html = preg_replace('#/\*.*?\*/#s', '', $html); // PHP (/*tralala*/)
$html = preg_replace('#//.*$#m', '', $html); // C (// tralala)
$html = preg_replace('`#[^!].*$`m', '', $html); // Perl  (#tralala)
$html = preg_replace('#<%--.*?--%>#s', '', $html); // ASP 


libxml_use_internal_errors(TRUE); //disable libxml errors


if(!empty($html)){ //if any html is actually returned

	$babord_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	$babord_xpath = new DOMXPath($babord_doc);
	$babord_row = $babord_xpath->query('//Temperature');
	
	echo "Titre :";
	
	if($babord_row->length > 0){
		foreach($babord_row as $row){
			echo $row->nodeValue;
		}
	}
	
	echo "<br>";

	$i=0;  
	$babord_row = $babord_xpath->query('//dd');
	
	echo "Auteur : ";
	
	if($babord_row->length > 0){
		foreach($babord_row as $row){
			if($i<1){
				echo str_replace('Â', '', $row->nodeValue);
				$i++;
			}
		}
	}
	
	echo "<br>";

	echo "Type : ";
	
	$i = 7;
	if($babord_row->length > 0){
		foreach($babord_row as $row){
			if($i<8){
				echo $row->nodeValue;
				$i++;
			}
		}
	}

	

}

?>