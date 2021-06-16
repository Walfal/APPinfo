<?php 
if(isset ($_SESSION['langue'])){


if ($_SESSION['langue'] === 'en'){
	$ajouter1 ='Add a new user';
	$matricule1 = 'Number* :';
	$nom1 ='Last name* :';
	$prenom1 ='First name* :';
	$sexe1 ='Gender :' ;
	$homme1 ='Man';
	$femme1 ='Woman';
	$mail1 = 'Mail address* :';
	$NSS1 = 'Social security number* :';
	$adresse1 ='Address (number and way)* :';
	$ville1 ='City* :';
	$codePostal1 = 'Postal code* :';
	$tel1 ='Phone number* :';
	$poids1 ='Weigth* :';
	$taille1 = 'Size* :';
	$dateNaissance1 = 'BirthDay* :';
	$mdp1 = 'Password* :';
	$role1 = 'Role* :';
	$medecin1 = 'Doctor* :';
	$ajouter2 ='+ Add';
	$retour1 ='Back';
	$errLongueur = 'Please enter a password with at least 8 characters';
	$errChiffre = 'Please enter a password with at least a number';
	$errMaj = 'Please enter a password with at least an uppercase character';
}
}
else{
	$ajouter1 ='Ajouter un utilisateur';
	$matricule1 ='Matricule*';
	$nom1 ='Nom* :';
	$prenom1 ='Prénom* :';
	$sexe1 ='Sexe :' ;
	$homme1 ='Homme';
	$femme1 ='Femme';
	$mail1 = 'Mail* :';
	$NSS1 = '  Numéro de sécurité social* :';
	$adresse1 ='Adresse (numéro et voie)* :';
	$ville1 ='Ville* :';
	$codePostal1 = 'Code postal* :';
	$tel1 ='Téléphone* :';
	$poids1 ='Poids* :';
	$taille1 = 'Taille* :';
	$dateNaissance1 = 'Date de naissance* :';
	$mdp1 = 'Mot de passe* :';
	$role1 = 'Rôle* :';
	$medecin1 = 'Médecin* :';
	$ajouter2 ='+ Ajouter';
	$retour1 ='Retour';
	$errLongueur = 'Veuilliez entrer un mot de passe plus long';
	$errChiffre = 'Veuilliez entrer un mot de passe contenant au moins un chiffre';
	$errMaj = 'Veuilliez entrer un mot de passe contenant au moins une majuscule';
}
?>