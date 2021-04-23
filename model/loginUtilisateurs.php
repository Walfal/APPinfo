<?php
//POur effectuer la connexion

// on inclut le fichier modèle contenant les appels à la BDD
require_once 'connexionBDD.php';
require_once 'loginFunctions.php';

$verif=null;

if(isset($_POST['submit'])){
//---------------connexion BDD----------------------//
$table = 'personne';
$base = 'sensair';
$host = 'localhost';
$pass = '';
$utilisateur = 'root';
$bdd = connexionPDO($base,$host,$utilisateur,$pass);//connexion à la base de données


if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
    $mail = $_POST['mail'];
    $mail= strip_tags($mail);
    $mail = htmlentities($mail);
    $mail = htmlspecialchars($mail);
    $mdp = strip_tags($_POST['mdp']);
    $mdp = htmlentities($mdp);
    $mdp = htmlspecialchars($mdp);
    //requete à la BDD
    $result = requeteLogin($bdd,$table,$mail,$mdp);
    $data = $result ->fetchAll();
    //verification du mot de passe
    $verif = verifierMotDePasse($mail,$mdp,$data,$result);
    
    
}else{
    $verif = 'Veuillez entre des informations';
}
}
//redirection sur la page accueil si on est dejà connecté
if(est_connecte()){//faire la distinction ici entre l 'admin et l'utilisateur
    header('Location: ../accueilAdmin/accueilAdmin.php');
    exit();
}



