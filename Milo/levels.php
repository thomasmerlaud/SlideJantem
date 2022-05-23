<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Levels</title>
    <link rel="stylesheet" href="styleLevels.css">
    <script src="js/script.js"></script>
</head>



<body class="backlevels">

    <?php 
        include "nuage.php";
        include "icone.php";
    ?>

<div class = "tableau">
        <div class = "levels"> 
            <button onclick="out('../Milo/game.php?map=1')" class="big-button">1</button>
            <button onclick="out('../Milo/game.php?map=2')" class="big-button">2</button>
            <button onclick="out('../Milo/game.php?map=3')" class="big-button">3</button>
            <button onclick="out('../Milo/game.php?map=4')" class="big-button">4</button>
            <button onclick="out('../Milo/game.php?map=5')" class="big-button">5</button>
            <br>
            <button class="big-button">6</button>
            <button class="big-button">7</button>
            
        </div>
    </div>


</body>
</html>
