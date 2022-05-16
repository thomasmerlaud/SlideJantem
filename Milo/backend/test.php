<?php

// exec('C:\MAMP\htdocs\SlideJantem\Milo\backend\creator8.exe' ,$output);
exec('C:\MAMP\htdocs\SlideJantem\Milo\backend\solveur.exe' ,$output);

// foreach ($output as $key => $value) {
//     echo $value;
//     // echo $value;
// }

echo $output[0];
?>