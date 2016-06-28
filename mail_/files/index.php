<a href="https://docs.google.com/spreadsheet/ccc?key=0AlMpl6UcEWHNdGNMVjJ2YjZJNlk5N215VU00M1dwOEE&usp=sharing">
	Doc Google avec les relations : N&deg; de question <=> Question
</a>

<?php
echo '<ul>';
if($dossier = opendir('./'))
{
	while(false !== ($fichier = readdir($dossier)))
	{
		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
		{
			$nb_fichier++; // On incrémente le compteur de 1
			echo '<li><a href="./' . $fichier . '">' . $fichier . '</a></li>';
		}
	}
}
?>