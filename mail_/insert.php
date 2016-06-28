<?php
 include('../include/tools.php');

$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

$res = $bdd->get_results('SELECT * FROM form_astro_genre');

foreach($res as $r){
	$content = htmlentities(str_replace('&#8217;','\'',fixEncoding($r->texte)));
	$bdd->update('form_astro_genre',array('texte' => $content), array('id' => $r->id));
	$bdd->print_error();
}

function fixEncoding($in_str)
{
  $cur_encoding = mb_detect_encoding($in_str) ;
  if($cur_encoding == "UTF-8" && mb_check_encoding($in_str,"UTF-8"))
    return $in_str;
  else
    return utf8_encode($in_str);
} // fixEncoding
?>