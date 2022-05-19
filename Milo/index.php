<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
  </head>
  <body>
    <?php
      if(isset($_GET['result'])){
        if($_GET['result'] == 1){
          echo "<p style='color:white;'>Possible en ".$_GET['count']." coups.</php>";
        }
        else{
          echo "<p style='color:white;'>Map impossible</php>";
        }
      }
    ?>
    <div class="button">  
        <div class="push_button restart" onClick="reset();"> Restart </div>
        <div class="push_button cancel" onClick="lastplay();"> Cancel</div>
    </div>
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
  <!-- <div class="help">https://codepen.io/ludmila-tretyakova/pen/yrNPMQ</div> -->
</body>
</html>