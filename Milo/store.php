<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Store</title>
    <link rel="stylesheet" href="css/styleStore.css">
    <script src="js/script.js"></script>
    <style>
        .carou {
        padding: 20px;
        perspective: 1000px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: absolute;
        width: 88%;
        height: 21%;
        }
        .carou > * {
        flex: 0 0 auto;
        }
        .carou figure {
        margin: 0;
        width: 400px;
        height: 100px;
        transform-style: preserve-3d;
        transition: transform 0.5s;
        transform-origin: 50% 50% -482.8427124746px;
        }
        .carou figure img {
        width: 100%;
        box-sizing: border-box;
        padding: 0 50px;
        opacity: 0.9;
        /* background: #0000004a; */
        height: 100%;
        }
        .carou figure img:not(:first-of-type) {
        position: absolute;
        left: 0;
        top: 0;
        transform-origin: 50% 50% -482.8427124746px;
        }
        .carou figure img:nth-child(2) {
        transform: rotateY(0.7853981634rad);
        }
        .carou figure img:nth-child(3) {
        transform: rotateY(1.5707963268rad);
        }
        .carou figure img:nth-child(4) {
        transform: rotateY(2.3561944902rad);
        }
        .carou figure img:nth-child(5) {
        transform: rotateY(3.1415926536rad);
        }
        .carou figure img:nth-child(6) {
        transform: rotateY(3.926990817rad);
        }
        .carou figure img:nth-child(7) {
        transform: rotateY(4.7123889804rad);
        }
        .carou figure img:nth-child(8) {
        transform: rotateY(5.4977871438rad);
        }
        .carou nav {
        display: flex;
        justify-content: center;
        margin: 20px 0 0;
        }
        .carou nav button {
        flex: 0 0 auto;
        margin: 0 5px;
        cursor: pointer;
        color: #333;
        background: none;
        border: 1px solid;
        letter-spacing: 1px;
        padding: 5px 10px;
        }
    </style>
</head>

<div class="content_title">
    <div class="content__container">
        <p class="content__container__text"> your skin and your paint colour </p>
        <ul class="content__container__list">
            <li class="content__container__list__item">Select  </li>
            <li class="content__container__list__item">Buy  </li>
            <li class="content__container__list__item">Select  </li>
            <li class="content__container__list__item">Buy  </li>
        </ul>
    </div>
</div>

<body class="backstore">

    <?php 
        include "nuage.php";
        include "icone.php";
    ?>
    

    <div class = "back">
        <div id="car1" class="carou">
            <figure>
                <img src="image/jantem.png" alt="">
                <img src="image/jantem.png" alt="">
                <img src="image/jantem.png" alt="">
                <img src="image/jantem.png" alt="">
                <img src="image/jantem.png" alt="">
                <img src="image/jantem.png" alt="">
                <img src="image/jantem.png" alt="">
                <img src="image/jantem.png" alt="">
            </figure>
            <nav>
                <button class="nav prev">Prev</button>
                <button class="nav next">Next</button>
            </nav>
        </div>
    </div> 

    

    <div class = "back2">
        <div id="car2" class="carou">
            <figure class="figuree">
                <img src="image/blue.png" alt="">
                <img src="image/green.png" alt="">
                <img src="image/orange.png" alt="">
                <img src="image/pink.png" alt="">
                <img src="image/purple.png" alt="">
                <img src="image/red.png" alt="">
                <img src="image/yellow.png" alt="">
                <img src="image/yellow.png" alt="">
            </figure>
            <nav class="navv">
                <button class="nav prev">Prev</button>
                <button class="nav next">Next</button>
            </nav>
        </div>
    </div>

    <?php
    if(isset($_SESSION["ID"])){
        echo "<button onclick=\"save()\" class = \"buttonS\"> Save </button>";
    }
    else{
        echo "<button onclick=\"document.location.href='accueil.php'\" class = \"buttonS\"> Login </button>";
    }?>
</body>

<script>
    var
    carousel = document.getElementById('car1'),
    figure = carousel.querySelector('figure'),
    nav = carousel.querySelector('nav'),
    numImages = figure.childElementCount,
    theta = 2 * Math.PI / numImages,
    currImage = 0;


    nav.addEventListener('click', onClick, true);

    function onClick(e) {
    e.stopPropagation();

    var t = e.target;
    if (t.tagName.toUpperCase() != 'BUTTON')
    return;

    if (t.classList.contains('next')) {
        currImage++;
    } else
    {
        currImage--;
    }
    figure.style.transform = `rotateY(${currImage * -theta}rad)`;
    }
</script>
<script>
    var
    carousell = document.getElementById('car2'),
    figuree = carousell.querySelector('figure'),
    navv = carousell.querySelector('nav'),
    numImagess = figuree.childElementCount,
    thetaa = 2 * Math.PI / numImagess,
    currImagee = 0;


    navv.addEventListener('click', onClick, true);

    function onClick(e) {
    e.stopPropagation();

    var tt = e.target;
    if (tt.tagName.toUpperCase() != 'BUTTON')
    return;

    if (tt.classList.contains('next')) {
        currImagee++;
    } else
    {
        currImagee--;
    }

    figuree.style.transform = `rotateY(${currImagee * -thetaa}rad)`;
    }
</script>
<script>
function save(){
  document.location.href="../bdd/skin.php?player="+currImage+"&trail="+currImagee+""; 
}
</script>

</html>


<!-- TOUT LES 625 pts TU DEBLOQUES -->