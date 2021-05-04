<?php
if(isset($_POST['matricule'])) {
	
	$matricule = checkInput($_POST['matricule']);
	$matricule2 = checkInput($_POST['matricule2']);
    $nom = checkInput($_POST['nom']);
    $prenom = checkInput($_POST['prenom']);
    $sexe = checkInput($_POST['sexe']);
    $mail = checkInput($_POST['mail']);
    $num_ss = checkInput($_POST['num_ss']);
    $adresseRue = checkInput($_POST['adresseRue']);
    $adresseVille = checkInput($_POST['adresseVille']);
    $codePostal = checkInput($_POST['codePostal']);
    $telephone = checkInput($_POST['telephone']);
    $poids = checkInput($_POST['poids']);
    $taille = checkInput($_POST['taille']);
    $dateDeNaissance = checkInput($_POST['dateDeNaissance']);
    $motDePasse = checkInput($_POST['motDePasse']);
    $role = checkInput($_POST['role']);
    $photo = 0;
    $medecin = checkInput($_POST['medecin']);


    $statement = $BDD -> prepare("UPDATE Personne SET matricule=?, nom=?, prenom=?, sexe=?, mail=?, `numero de securite social`=?, `adresse`=?, `ville`=?, `code postal`=?, telephone=?, poids=?, taille=?, `date de naissance`=?, `mot de passe`=?, role=?, photo=?, medecin=? WHERE matricule = ?");
    $statement -> execute(array($matricule2, $nom, $prenom, $sexe, $mail, $num_ss, $adresseRue, $adresseVille, $codePostal, $telephone, $poids, $taille, $dateDeNaissance, $motDePasse, $role, $photo, $medecin, $matricule));
    //$statement = $BDD -> prepare("UPDATE Personne SET matricule=?, nom=?, prenom=?, sexe=?, mail=?, `numero de securite social`=?, adresse=?, `ville`=?, `code postal`=?, telephone=?, poids=?, taille=?, `date de naissance`=?, `mot de passe`=?, role=?, photo=?, medecin=? WHERE matricule = ?");
    //$statement -> execute(array($matricule, $nom, $prenom, $sexe, $mail, $num_ss, $adresseRue, $adresseVille, $codePostal, $telephone, $poids, $taille, $dateDeNaissance, $motDePasse, $role, $photo, $medecin, $matricule));
    header("location: ../../view/profil/profilPatients.php");

}