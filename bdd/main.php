<?php

// function adduser(){
    $username = 'mylow';
    require("connectDB.php");
    $request ="INSERT INTO `game` (`username`) VALUES ($username);";
    $resultat =mysqli_query($connexion,$request); //Executer la requete
    // header('location:../ajouterNote.php');
    if(!$resultat){
        echo $resultat;
    // }
}

// adduser();

?>