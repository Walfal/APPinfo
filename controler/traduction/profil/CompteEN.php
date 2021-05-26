<?php 

if ($_SESSION['langue'] === 'en'){
	$bienvenue = 'Welcome';
	$commentaire ='This is your management page,
	you can manage all the
	tasks from your space.';
	$capteur = 'Management <br> tests/sensors';
	$calendrier ='Schedule';
	$profil ='Patient profile';
	$modifier ='Edit my profile';
	$deconnexion ='Disconnect';
	$commentairePatient ='You can consult your results
	as well as the dates of your appointments.';
	$resultats ='My results';
}

else{
	$bienvenue ='Bienvenue';
	$commentaire = 'Voici votre page de gestion,
	vous pouvez gérer l\'intégralité
	des tâches depuis votre espace.';
	$capteur = ' Gestion <br> tests/capteurs';
	$calendrier ='Planning';
	$profil ='Profil patient';
	$modifier = 'Modifier mon profil';
	$deconnexion = 'Se déconnecter';
	$commentairePatient ='Vous pouvez consulter vos résultats
	ainsi que les dates de vos rendez-vous.';
	$resultats = 'Mes résultats';
}