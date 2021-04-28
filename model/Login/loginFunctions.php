<?php
//Se connecter 
//les paramètres sont PDO


//verification du mot de passe
function verifierMotDePasse($mail,$password,array $data,$result){
    
    if($result -> rowCount() > 0){
        //cas où le mot de passe n'est pas crypté   
        if($password === $data[0]["mot de passe"]){
            $_SESSION['mail'] = $data[0]["mail"];
            $_SESSION['matricule'] = $data[0]["matricule"];
            $erreur = null;
            return $data[0]["matricule"];//recuperation du matricule
        }
        //cas ou le message est crypté
        /*if(password_verify($password,$data[0]["motDePasse"])){
        
            //debut de session
            session_start();
            $_SESSION['mail'] =$data[0]["prenom"]; 
            $erreur = null;
            return $data[0]["matricule"];
        
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
        //header('Location: ../../../../view/login/login.php');
        exit();
    }
}