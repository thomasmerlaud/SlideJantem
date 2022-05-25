<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Levels</title>
    <link rel="stylesheet" href="css/styleLevels.css">
    <script src="js/script.js"></script>
</head>



<body class="backlevels">

    <?php 
        include "nuage.php";
        include "icone.php";
    ?>
<div class="container">
    <span>Creations</span>
            
</div>
<div class = "tableau">
        <div class = "levels"> 
            <?php
            function countFiles()
            {
                $nbFichiers = 0;
                $repertoire = opendir("php/automaps/");
            
                while ($fichier = readdir($repertoire))
                {
                    $nbFichiers += 1;
                }
            
                return (int) $nbFichiers-2;
            }
            $nbFichiers = countFiles();
            for ($i = 1; $i < $nbFichiers; $i++) {
                echo"<button onclick="."out('../Milo/game.php?map=".$i."')"." class='big-button'>$i</button>";
            }
        ?>
        </div>
    </div>


</body>
</html>
