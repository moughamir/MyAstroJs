
<?php
$text = $_POST['text'];
$text = explode("\r\n",$text);
$i = 1;
foreach($text as $t){
	$t = trim($t);
	if(!empty($t) && !preg_match('#^\s+$#',$t)){
		$val = trim(preg_replace('#^(\s)?\[SEER\]:#','',$t));
		echo 'INSERT INTO `tchat_messages`(`id`, `id_content`, `type`, `text`, `order`, `delta`) 
		VALUES (NULL,'.$_POST['id_content'].',"content","'.$val.'",'.$i.',NULL); <br />';
		$i++;
	}
}

?>
<form action="" method="post">
group : 
<input type='text' name='id_content' /> <br />
<textarea name="text" rows='15' cols='150'>
	
</textarea>
<br />
<input type="submit" value="go" />
</form>