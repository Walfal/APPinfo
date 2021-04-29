<?php
//Se connecter 
//les paramètres sont PDO


//verification du mot de passe
function verifierMotDePasse($mail, $password, $result){
    if(sizeof($result) > 0){
        //cas où le mot de passe n'est pas crypté   
        if($password === $result["mot de passe"]){
            $_SESSION['mail'] = $result["mail"];
            $_SESSION['matricule'] = $result["matricule"];
            $erreur = null;
            return $result["matricule"];//recuperation du matricule
        }
        //cas ou le message est crypté
        /*if(password_verify($password,$result["mot de passe"])){
        
            //debut de session
            session_start();
            $_SESSION['mail'] = $result["mail"]; 
            $erreur = null;
            return $result["matricule"];
        
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
    return isset($_SESSION['mail']);
}
//si l'utilisateur n'est pas connecte le rediriger sur la page login a utilser lors de l'acces au compte 
function forcer_utilisateur_connecte(){
    if (!est_connecte()) {
        //header('Location: ../../../../view/login/login.php');
        exit();
    }
}