<?php 

if(isset ($_SESSION['langue'])){
if ($_SESSION['langue'] === 'en'){
	$profil ='Patient profile';
	$ou = 'OR';
	$nom ='Patient last name';
	$prenom ='Patient first name';
	$code ='Postal code';
	$valider ='Validate';
	$liste ='List of users';
	$matricule ='Number';
	$name ='Last name';
	$name2='First name';
	$mail ='Mail address';
	$nss ='NSS';
	$action='Actions';
	$voir ='See';
	$modifier ='Modify';
	$supprimer ='Delete';
	$ajouter ='Add';
	$aucun ='No user found';
	$matricule1 ='Number :';
}

}

else{
	$profil ='Profil patient';
	$ou = 'OU';
	$nom ='Nom du patient';
	$prenom ='Prénom du patient';
	$code ='Code postal';
	$valider ='Valider';
	$liste ='Liste des utilisateurs';
	$matricule ='Matricule';
	$name ='Nom';
	$name2='Prénom';
	$mail ='Mail';
	$nss ='N° sécu';
	$action='Actions';
	$voir ='Voir';
	$modifier ='Modifier';
	$supprimer ='Supprimer';
	$ajouter ='Ajouter';
	$aucun = 'Aucun utilisateur trouvé';
	$matricule1 ='Matricule :';
}


?>