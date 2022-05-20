<!DOCTYPE html>
<html lang="en">

<a class="Bmaison" href="accueil.php"></a>
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
                    <a href="supprimer.html" class="supprimer"> Supprimer compte </a>
                </div>
            </div>
        </div>
    </div>


    <style>

        
/* icones en haut */
/* .Bmaison{
  cursor: url('image/B2.ico'), pointer;
  display:inline-block;
  background:url(image/maisonH.png); 
  width : 50px;
  height : 50px;
  margin-left : 80%;
  margin-top : 5px;
 } */

 .Bprofil{
  cursor: url('image/B2.ico'), pointer;
  display: inline-block;
   background:url(image/profil.png); 
  width : 60px;
  height : 55px;
  margin-left: 25px;
}

 .Bsetting{
  cursor: url('image/B2.ico'), pointer;
  display: inline-block;
   background:url(image/p2.png); 
  width : 60px;
  height : 60px;
  margin-left: 15px;
  margin-right : 5px;
 }


.popup {
  margin: 50px auto;
  padding: 20px;
  width: 40%;
  background-size: 100%;
  position: relative;
  transition: all 400ms ease-in-out;
  border-radius:5px;
  background-color: rgb(245, 229, 139);
  border: 12px solid rgb(133, 119, 42);
  text-align:center;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
  font-size : 50px;
}
.popup .content {
  max-height: 90%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .popup{
    width: 80%;
  }
}
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 1.4s;
  visibility: hidden;
  opacity: 0;
  z-index : 1;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

#player-container #play-pause {
  cursor: url('image/B2.ico'), pointer;
  text-indent: -999999px;
  height:40px;
  width: 40px;
  padding: 12px 18px;
  background-image: url(image/logoff.png);
  background-repeat: no-repeat!important;
  background-position: center;

}

.play {
  background-image: url(image/logoff.png);
}
.pause {
   background-image: url(image/logon.png)!important;
}



  /*boutton supprimer compte et donnees*/

  .button{
    font-family: 'Montserrat', sans-serif
  }
  
  
  .supprimer{
    cursor: url('image/B2.ico'), pointer;
    position:relative;
    width:60%;
    color:#FFF;
    display:inline-block;
    text-decoration:none;
    margin:0 auto;
    border-radius:0px;
    font-family:'Rubik One', sans-serif;
    border:solid 1px #b48c5d;
    background:#b48c5d;
    text-align:center;
    padding:8px 0px;
    font-size: 16px;
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
    -webkit-box-shadow: 0px 9px 0px #8a6840;
    -moz-box-shadow: 0px 9px 0px #8a6840;
    box-shadow: 9px 9px 0px #8a6840;
    margin: 10px;
  }
  
  .supprimer:hover{  
  -webkit-box-shadow: 0px 2px 0px #8a6840;
  -moz-box-shadow: 0px 2px 0px #8a6840;
  box-shadow: 2px 2px 0px #8a6840;
  position:relative;
  top:7px;
  }
  
  </style>