<?php
//Se connecter 
//les paramètres sont PDO


//verification du mot de passe
function verifierMotDePasse($mail,$mdp,array $data,$result){
    
    if($result -> rowCount() > 0){
     //cas où le mot de passe n'est pas crypté   
    if($mdp === $data[0]["mdp"]){
        //debut de session
        
        session_start();
        $_SESSION['mail'] = $mail;
        //redirection
        //header('Location: ../../accueilAdmin/accueilAdmin.php');
        header('Location: ../../services/services.php');
        $bdd =null; //peut etre pas
        $erreur = null;
        
        return $erreur;
    }
    //cas ou le message est crypté
    /*if(password_verify($mdp,$data[0]["mdp"])){
        
        //debut de session
        session_start();
        $_SESSION['mail'] = $mail;
        //redirection
        header('Location: ../../accueilAdmin/accueilAdmin.php');

        $bdd =null; //peut etre pas
        $erreur = null;
        return $erreur;
        
    }*/
    }
    
    $erreur = 'Identifiants incorrects';
    return $erreur;
  
}


//verifier si l'uilisateur est connecté 
function est_connecte():bool{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['mail']);
}
//si l'utilisateur n'est pas connecte le rediriger sur la page login a utilser lors de l'acces au compte
function forcer_utilisateur_connecte(){
    if (!est_connecte()) {
        header('Location: ../login/login.php');
        exit();
    }
}