<?php
  require_once("simple_html_dom.php");
  $html = file_get_html('http://babordplus.univ-bordeaux.fr/notice.php?q=pour%20les%20nuls&spec_expand=1&sort_define=&sort_order=&rows=&start=8&ct=bx3_ws');
  
  $title = getZone("h1[class=book_title]");
  $creator = getZone("dd[class=auteur_principal]");
  $collection = $html->find('img');
  $src = "";
  
  print($title)."\n";
  echo '</br>';
  print($creator)."\n";
  echo '</br>';
  
  $i=0;
  
  foreach($collection as $image){
				if($i=4){
					$src = $image->getAttribute('src');
					$pos = strpos($src, 'vignette');
					if ($pos !== false) {
						$src = 'http://babordplus.univ-bordeaux.fr/'.$src.'';
						echo '</br>';
						echo '<img src="'.$src.'" border="0" />';
					}
				}
				$i++;
  }

  
  
  
  function getZone($search)
  {
    global $html;
    if ($html->find($search))
    {
      return trim($html->find($search, 0)->plaintext);
    }
    else
    {
      return "";
    }
  }
  
?>
