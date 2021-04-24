<?php
// connexion à la base de donnees
function connexionPDO(string $base,string $host,string $utilisateur,$pass){
    try{
        $bdd = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $utilisateur, $pass);
        return $bdd;
    }
    catch(PDOException $e)
    {
        echo "Echec de la connexion",$e->getMessage();//si on n'arrive pas à se connecter
        return FALSE;
        exit();
    }
}

function requeteLogin($bdd,$table,$mail,$mdp){
    $requete = "SELECT * FROM $table where mail = '$mail'";
    $result = $bdd->prepare($requete);
    $result->bindParam(":mail", $mail);
    $result -> execute();
    return $result;
}

