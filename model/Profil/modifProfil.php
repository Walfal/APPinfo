<?php 
$verif=null;

if(isset($_POST['submit'])){

    if(!empty($_POST['matricule']) && !empty($_POST['password'])){
        $matricule = $_POST['matricule'];
        $matricule= strip_tags($matricule);
        $matricule = htmlentities($matricule);
        $matricule = htmlspecialchars($matricule);
        $password = strip_tags($_POST['password']);
        $password = htmlentities($password);
        $password = htmlspecialchars($password);
        //requete à la BDD
        $result = recuperationDesDonnees($BDD,$table,'''''''''''''''''''''''''''''''''''''$matricule);
        //verification du mot de passe
        $verif = verifierMotDePasse($matricule,$password,$data,$result);////recuperation du matricule
        
    } else {
        $verif = 'Entrez des informations';
    }
}