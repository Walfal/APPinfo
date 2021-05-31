<?php
if(isset ($_SESSION['langue'])){
if ($_SESSION['langue'] === 'en'){
	$modif ='Edit my profile';
	$nom ='Last name :';
	$prenom='First name :';
	$sexe ='Gender :';
	$nonPrecise ='Not mentionned';
	$homme ='Man';
	$femme ='Woman';
	$nationalite ='Nationality :';
	$mail ='Mail address :';
	$tel ='Phone number :';
	$datenaissance = 'Birthday : ';
	$NSS ='Social security number :';
	$adresse ='Addresse (number and way) :';
	$ville ='City :';
	$CodePostal ='Postal Code :';
	$poids ='Weight (in Kg) :';
	$taille ='Size (in cm) :';
	$mdpAct ='Current password* :';
	$mdpNou ='New password :';
	$comfirm ='Comfirm new password :';
	$modifier ='Modify';
	$retour ='Back';
	$matricule1 ='Number :';
	$role='Role :';
	$medecin ='Doctor :';
	$test ='Last test(s) taken';
	$NDL ='At Notre-Dame de Lorette : '; 
}

}


else{
	$modif ='Modifier mon profil';
	$nom ='Nom :';
	$prenom='Prénom :';
	$sexe ='Sexe :';
	$nonPrecise ='Non précisé';
	$homme ='Homme';
	$femme ='Femme';
	$nationalite ='Nationalité :';
	$mail ='Adresse mail :';
	$tel ='Téléphone :';
	$datenaissance = 'Date de naissance : ';
	$NSS ='Numéo de sécurité social :';
	$adresse ='Adresse (numéro et voie) :';
	$ville ='Ville :';
	$CodePostal = 'Code Postal :';
	$poids ='Poids (en Kg) :';
	$taille ='Taille (en cm) :';
	$mdpAct ='Mot de passe actuel* :';
	$mdpNou ='Nouveau mot de passe :';
	$comfirm ='Comfirmer le nouveau mot de passe :';
	$modifier ='Modifier';
	$retour ='Retour';
	$matricule1 ='Matricule :';
	$role='Rôle :';
	$medecin ='Médecin :';
	$test ='Dernier(s) test(s) passé(s)';
	$NDL ='A Notre-Dame de Lorette : ';
}
?>