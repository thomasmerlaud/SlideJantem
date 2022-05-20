<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil Slide Jantem</title>
    <link rel="stylesheet" href="styleAccueil.css">
    <!-- <link rel="stylesheet" href="styleCloud.css"> -->
    <script src="script.js"></script>
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



        <form class="login" method="" action="">
            <input type="text" name="login" id="login" placeholder="Player Name" />
        </form>

        <div class="button">
            <a href="play.php" class="push_buttonP"> PLAY </a>
            <br>
            <a href="records.php" class="push_buttonR"> RECORDS </a>
            <a href="store.php" class="push_buttonS"> STORE </a>
        </div>


</div>
</body>
</div>

</html>