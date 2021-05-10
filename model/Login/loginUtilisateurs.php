<?php
//Pour effectuer la connexion
// on inclut le fichier modèle contenant les appels à la BDD
require_once 'loginFunctions.php';
require_once '../../model/BDD/connexionBDD.php';

$verif=null;

if(isset($_POST['submit'])){
    
    if(isset($_POST['mail']) && isset($_POST['password'])){
        $mail = $_POST['mail'];
        $mail= strip_tags($mail);
        $mail = htmlentities($mail);
        $mail = htmlspecialchars($mail);

        $password = strip_tags($_POST['password']);
        $password = htmlentities($password);
        $password = htmlspecialchars($password);

        $result = recuperationUneDonnee($BDD, 'Personne', 'mail', $mail);
        $verif = verifierMotDePasse($mail, $password, $result);//recuperation du matricule
        
    } else {
        $verif = 'Entrez des informations';
    }
}
//redirection sur la page compte si on est dejà connecté
if(est_connecte()){//faire la distinction ici entre l 'admin et l'utilisateur
    header('Location: ../profil/compte.php');
    exit();
}



