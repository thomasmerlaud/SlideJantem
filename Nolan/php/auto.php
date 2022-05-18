<?php

if(isset($_GET["dim"])){
		
	$dim = $_GET['dim'];
	exec ( "CreatorAuto.exe $dim $dim" ,$output);
}
?>