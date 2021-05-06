<?php
require_once '../../model/Login/loginFunctions.php';

if(isset($_POST['password'])):
    $result = recuperationUneDonnee($BDD, 'Personne', 'matricule', $_SESSION['matricule']);
    $matricule = verifierMotDePasse($_SESSION['matricule'], $_POST['password'], $result); //recuperation du matricule
else:
    $matricule = $_GET['id'];
endif;

if(isset($_POST['nom'])) {

	$matricule2   = !empty($_POST['matricule'])  ? checkInput($_POST['matricule'])  : $personne['matricule'];
    $nom          = !empty($_POST['nom'])        ? checkInput($_POST['nom'])        : $personne['nom'];
    $prenom       = !empty($_POST['prenom'])     ? checkInput($_POST['prenom'])     : $personne['prenom'];
    $sexe         = !empty($_POST['sexe'])       ? checkInput($_POST['sexe'])       : $personne['sexe'];
    $mail         = !empty($_POST['mail'])       ? checkInput($_POST['mail'])       : $personne['mail'];
    $num_ss       = !empty($_POST['num_ss'])     ? checkInput($_POST['num_ss'])     : $personne['numero de securite social'];
    $adresse      = !empty($_POST['adresse'])    ? checkInput($_POST['adresse'])    : $personne['adresse'];
    $ville        = !empty($_POST['ville'])      ? checkInput($_POST['ville'])      : $personne['ville'];
    $codePostal   = !empty($_POST['codePostal']) ? checkInput($_POST['codePostal']) : $personne['code postal'];
    $telephone    = !empty($_POST['telephone'])  ? checkInput($_POST['telephone'])  : $personne['telephone'];
    $poids        = !empty($_POST['poids'])      ? checkInput($_POST['poids'])      : $personne['poids'];
    $taille       = !empty($_POST['taille'])     ? checkInput($_POST['taille'])     : $personne['taille'];
    $naissance    = !empty($_POST['naissance'])  ? checkInput($_POST['naissance'])  : $personne['date de naissance'];
    $password     = !empty($_POST['password'])   ? checkInput($_POST['password'])   : $personne['password'];
    $role         = !empty($_POST['role'])       ? checkInput($_POST['role'])       : $personne['role'];
    $medecin      = !empty($_POST['medecin'])    ? checkInput($_POST['medecin'])    : $personne['medecin'];
    $photo        = 0;

    if(!empty(checkInput($_POST['password2'])) && checkInput($_POST['password2']) === checkInput($_POST['password2bis'])):
    $password = checkInput($_POST['password2']);
    endif;

    $statement = $BDD -> prepare("UPDATE Personne SET matricule=?, nom=?, prenom=?, sexe=?, mail=?, `numero de securite social`=?, adresse=?, ville=?, `code postal`=?, telephone=?, poids=?, taille=?, `date de naissance`=?, password=?, role=?, photo=?, medecin=? WHERE matricule = ?");
    $statement -> execute(array($matricule2, $nom, $prenom, $sexe, $mail, $num_ss, $adresse, $ville, $codePostal, $telephone, $poids, $taille, $naissance, $password, $role, $photo, $medecin, $matricule));
    if (!isset($_POST['password'])):
        header("Location: ../../view/profil/profilPatients.php");
    else:
        header("location: ../../view/profil/compte.php");
    endif;
}