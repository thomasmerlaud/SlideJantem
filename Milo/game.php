<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Slide Jantem</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/game.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
      <?php 
        include "nuage.php";
        ?>
    <!-- <div class="button">   -->
    <div class="game">
      <div class="push_button restart" onClick="reset();"> Restart </div>
      <div class="push_button cancel" onClick="lastplay();"> Cancel</div>
      <!-- </div> -->
      <div class="move">Move</div>
      <div class="score"></div>
      <div class="frame">
        <div class="header">
            <!-- <div class="help">Key: ← → ↑ ↓</div> -->
        </div>
        <div class="board"></div>
        <div class="footer">
            <div class="info"></div>
        </div>
      </div>
      <div class="loadbar">
          <strong class="bar" style='height:0%;'></strong>
      </div>

      <div id="finish" class="">
        <!-- <img class="img" src="img/sprite-22-1.png" alt="LevelComplete"> -->
        <div class="lvl">Level Completed !</div>
        <div class="menu home" onClick="menu();">Home</div>
        <div class="menu next" onClick="nextlevel();">Next</div>
      </div>
    </div>
    <div class="top">
      <?php include "icone.php";?>
    </div>

  <!-- <div class="help">https://codepen.io/ludmila-tretyakova/pen/yrNPMQ</div> -->
</body>
</html>