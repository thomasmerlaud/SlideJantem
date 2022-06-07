<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Record</title>
    <link rel="stylesheet" href="css/styleRecords.css">
    <script src="js/script.js"></script>
</head>

<body class="backrecords">

    <?php 
        include "nuage.php";
        include "icone.php";
    ?>

    <div class = "tableauRecords">

    <div class="parent">
        <div class="div1"> RANKING </div>
        <div class="div2"> SCORE </div>
        <div class="div3"> PLAYER NAME </div>
        
        <?php
        if(!isset($_SESSION["ID"])){
            include("../bdd/main.php");
        }
        $rank = ranking();
        $len = count($rank); 
        ?>

        <div class="div4">  
        <?php
        for ($i = 0; $i < $len; $i++) {
            echo $rank[$i][0]."<br>";
        }
        ?>
        </div>
        <div class="div5"> 
        <?php
        for ($i = 0; $i < $len; $i++) {
            echo $rank[$i][1]."<br>";
        }
        ?>
        </div>
        <div class="div6"> 
        <?php
        for ($i = 0; $i < $len; $i++) {
            echo $rank[$i][2]."<br>";
        }
        ?>
        </div>
    </div>

    </div>

</body>
</html>