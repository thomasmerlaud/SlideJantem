<?php

if(isset($_GET["dim"])){
		
	$dim = $_GET['dim'];
	$nbFichiers = -2;
    $repertoire = opendir("../automaps/");

    while ($fichier = readdir($repertoire))
    {
        $nbFichiers += 1;
    }

	
	exec ( "CreatorAuto.exe $dim $nbFichiers" ,$output);
}

?>