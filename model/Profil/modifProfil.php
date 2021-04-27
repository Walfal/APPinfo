<?php 
$verif=null;

if(isset($_POST['submit'])){

    if(!empty($_POST['mail']) && !empty($_POST['password'])){
        $mail = $_POST['mail'];
        $mail= strip_tags($mail);
        $mail = htmlentities($mail);
        $mail = htmlspecialchars($mail);
        $password = strip_tags($_POST['password']);
        $password = htmlentities($password);
        $password = htmlspecialchars($password);
        //requete à la BDD
        $result = requeteLogin($BDD,$table,$mail);
        $data = $result ->fetchAll();
        //verification du mot de passe
        $verif = verifierMotDePasse($mail,$password,$data,$result);////recuperation du matricule
        
    } else {
        $verif = 'Entrez des informations';
    }
}