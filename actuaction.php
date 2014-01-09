<?php
include_once('getActus.php');
$actus = get_actu();

foreach($actus as $cle => $actu)
{
    $actus[$cle]['titre'] = $actu['titre'];
    $actus[$cle]['article'] = $actu['info'];
}

?>