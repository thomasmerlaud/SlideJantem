<?php
    session_start();
    $id = ($_SESSION["ID"]);
    $score = $_GET["score"];
    $idmap = $_GET["map"];
    // $id = $_GET["user"];

    $map = "map".$idmap;

    $request ="UPDATE game SET $map = $score WHERE ID=$id";
    require("connectDB.php");
    $resultat = mysqli_query($connexion,$request); //Executer la requete
    


    $request ="SELECT * FROM game WHERE ID=$id";  //EXCEPT (ID,username)
    require("connectDB.php");
    $resultat = mysqli_query($connexion,$request); //Executer la requete
    $nbmap = 1;
    $somme = 0;
    while($row = mysqli_fetch_assoc($resultat)){
        for ($i=1; $i < 21; $i++) {
            $map = "map".$i;
            $somme += $row[$map];
            ++$nbmap;
        }
    }
    // echo $somme;
    $request ="UPDATE game SET score = $somme WHERE ID=$id";
    $resultat = mysqli_query($connexion,$request); //Executer la requete
?>