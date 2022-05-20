<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil Slide Jantem</title>
    <link rel="stylesheet" href="../code/jantemcode/styleIndex.css">
    <style>
    .backindex{
        background: no-repeat center center fixed; 
        text-align: center;
        background-size: cover;
        background-image: url('../code/jantemcode/image/1.gif');
        z-index: 10;
    }

    .loader {
        position: fixed;
        width: 100%;
        height: 100%;
        opacity: 0;
        animation: cloudtransparency 3s 1;
        z-index: 0;
    }

    /* .cloud-0 {
        position: absolute;
        z-index: 19;
        width: 100%;
        height: 100%;
        top: 1%;
        left: 5%;
        animation: cloudleft2 3s 1;
    }
    .cloud-1 {
        background: transparent url(https://manager.qualifio.com/library/externalbe_0/images/2020/clouds/cloud1-2.png) no-repeat 0 0;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 20;
        top: 9%;
        left: -1%;
        animation: cloudleft 3s 1;
    }
    .cloud-2 {
        background: transparent url(https://manager.qualifio.com/library/externalbe_0/images/2020/clouds/cloud2-2.png) no-repeat 0 0;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 21;
        top: 28%;
        right: -21%;
        animation: cloudright2 3s 1;
    }
    .cloud-3 {
        background: transparent url(https://manager.qualifio.com/library/externalbe_0/images/2020/clouds/cloud3-2.png) no-repeat 0 0;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 22;
        top: 64%;
        /* left: -250%; 
        animation: cloudleft 3s 1;
    }
    .cloud-4 {
        background: transparent url(https://manager.qualifio.com/library/externalbe_0/images/2020/clouds/cloud4-2.png) no-repeat 0 0;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 23;
        top: 40%;
        /* right: -250%; 
        animation: cloudright2 3s 1;
    }
    .cloud-5 {
        background: transparent url(https://manager.qualifio.com/library/externalbe_0/images/2020/clouds/cloud5-2.png) no-repeat 0 0;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 24;
        top: 0%;
        left: 58%;
        animation: cloudleft 3s 1;
    }
    .cloud-6 {
        background: transparent url(https://manager.qualifio.com/library/externalbe_0/images/2020/clouds/cloud6-2.png) no-repeat 0 0;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 25;
        top: 10%;
        /* left: -250%; 
        animation: cloudleft2 3s 1;
    }
    .cloud-7 {
        background: transparent url(https://manager.qualifio.com/library/externalbe_0/images/2020/clouds/cloud1-2.png) no-repeat 0 0;
        width: 100%;
        height: 100%;   
        position: absolute;
        z-index: 25;
        right: 54%; 
        animation: cloudright 3s 1;
    }
    @keyframes cloudleft {
        0% {
            left: 8%;
        }
        100% {
            left: -100%;
        }
    }
    @keyframes cloudright {
        0% {
            right: 8%;
        }
        100% {
            right: -100%;
        }
    }
    @keyframes cloudright2 {
        0% {
            right: 28%;
        }
        100% {
            right: -100%;
        }
    }
    @keyframes cloudleft2 {
        0% {
            left: 28%;
        }
        100% {
            left: -100%;
        }
    }
    @keyframes cloudtransparency {
        0% {
            opacity: 1;
            z-index: 10000;
        }
        50% {
            opacity: 1;
            z-index: 0;
        }
        99% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    } */
    </style>
    <script src="script.js"></script>
</head>





<body class="backindex">

    <div class="loader">
        <div class="cloud cloud-0">&nbsp;</div>
        <div class="cloud cloud-1">&nbsp;</div>
        <div class="cloud cloud-2">&nbsp;</div>
        <div class="cloud cloud-3">&nbsp;</div>
        <div class="cloud cloud-4">&nbsp;</div>
        <div class="cloud cloud-5">&nbsp;</div>
        <div class="cloud cloud-6">&nbsp;</div>
        <div class="cloud cloud-7">&nbsp;</div>
    </div>

    <div class="logo">
        <img src="../code/jantemcode/image/oui.png" alt="">
    </div>


    <form class="login" method="" action="">
        <input type="text" name="login" id="login" placeholder="Player Name" />
    </form>

    <div class="button">
        <a href="play.html" class="push_buttonP"> PLAY </a>
        <br>
        <a href="records.html" class="push_buttonR"> RECORDS </a>
        <a href="store.html" class="push_buttonS"> STORE </a>
    </div>

</body>

</html>