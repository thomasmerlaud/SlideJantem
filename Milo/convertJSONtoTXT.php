<?php
# Chemin vers fichier texte
$file ="file/file.txt";
# Ouverture en mode écriture
$fileopen=(fopen("$file",'a'));
# Ecriture de "Début du fichier" dansle fichier texte
fwrite($fileopen,"Début du fichier");
# On ferme le fichier proprement
fclose($fileopen);
?>