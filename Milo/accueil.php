<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil Slide Jantem</title>
    <link rel="stylesheet" href="styleAccueil.css">
    <script src="js/script.js"></script>
</head>

<div class="anim">

    <body class="backindex">

        <?php 
            include "nuage.php";
        ?>

        <div class="logo">
            <img src="image/oui.png" alt="">
        </div>

        <a class="Bprofil" href="#profil"></a>
        <a class="Bsetting" href="#popup1"></a>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>SETTINGS</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <audio id="track">
                        <source src="clash.mp3" type="audio/mpeg">
                    </audio>
                    <div id="player-container">
                        <div id="play-pause" class="play">Play</div>
                    </div>
                </div>
            </div>
        </div>

        <div id="profil" class="overlay">
            <div class="popup">
                <h2>Profil</h2>
                <a class="close" href="#">&times;</a>
                <div class="content"> 
                    <div class="button">
                        <a href="supprimer.php" class="supprimer"> Supprimer compte </a>
                    </div>
                </div>
            </div>
        </div>


        <?php
        session_start();
        if(!isset($_SESSION["ID"])){
            echo "<form id='login' class='login' method='post' action='play.php'>
                    <input type='text' name='login' placeholder='Player Name'/>
                </form>";
        }
        else{
            require("../bdd/main.php");
            $username = getUsername($_SESSION["ID"]);
            echo "<div class='logged'>Hey $username !</div>";
        }

        ?>
        <div class="button">
            <a <?php 
            if(!isset($_SESSION["ID"])){ 
                echo "onClick='document.forms['login'].submit();'";
            }
            else{
                echo "onclick=\"out('play.php')\"";
            }?> 
            class="push_buttonP"> PLAY </a>

            
            <br>
            <a class="push_buttonR" onclick="out('records.php')"> RECORDS </a>
            <a class="push_buttonS" onclick="out('store.php')"> STORE </a>
        </div>


</div>
</body>
</div>

</html>