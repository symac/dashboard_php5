<?php
$actudoc = new DOMDocument();
$actudoc->load('http://www.u-bordeaux3.fr/_plugins/web/www/fr/filter/org.ametys.web.new.www.RSS/rss.xml');
$item = $actudoc->getElementsByTagName("item");
$incractu=0;
$actutab=array($incractu);
foreach($item as $it) {
	$incrcln=0;
	$titre="";
	$info="";
	foreach($it->childNodes as $i=>$post){
		if($post->nodeName =="title"){
			$titre=$post->nodeValue;
		}
		if($post->nodeName =="description"){
			$info= $post->nodeValue;
		}
		$actutab[$incractu]= array("titre"=>$titre, "info"=>$info);
		$incrcln++;
	}
	$incractu++;
}
$actutab[10]= $actutab[0];
$actutab[11]= $actutab[1];
file_put_contents("cache_file", serialize($actutab));
?>