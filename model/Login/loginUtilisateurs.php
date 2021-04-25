<?php
//Pour effectuer la connexion
// on inclut le fichier modèle contenant les appels à la BDD
require_once '../BDD/connexionBDD.php';
require_once 'loginFunctions.php';

$verif=null;

if(isset($_POST['submit'])){
//---------------connexion BDD----------------------//
$table = 'personne';

if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
    $mail = $_POST['mail'];
    $mail= strip_tags($mail);
    $mail = htmlentities($mail);
    $mail = htmlspecialchars($mail);
    $mdp = strip_tags($_POST['mdp']);
    $mdp = htmlentities($mdp);
    $mdp = htmlspecialchars($mdp);
    //requete à la BDD
    $result = requeteLogin($BDD,$table,$mail,$mdp);
    $data = $result ->fetchAll();
    //verification du mot de passe
    $verif = verifierMotDePasse($mail,$mdp,$data,$result);////recuperation du matricule
     
}else{
    $verif = 'Entrez des informations';
}
}
//redirection sur la page accueil si on est dejà connecté
if(est_connecte()){//faire la distinction ici entre l 'admin et l'utilisateur
    if($verif != 0){//utilisateur
        header('Location: ../accueilUtilisateur/accueilutilisateur.php');
    }else{//admin
        header('Location: ../accueilAdmin/accueilAdmin.php');
    }
    exit();
}



