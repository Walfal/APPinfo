<?php 
if(isset ($_SESSION['langue'])){

if ($_SESSION['langue'] === 'en'){
	$titre ='Make an appointment';
	$consigne ='Enter the following information to make an appointment';
	$matricule1 ='Number';
	$consigne2 ='Select the tests to be performed';
	$freq ='Heart rate';
	$reactionL ='Reaction time to light';
	$reactionS ='Reaction time to a sound';
	$temp =' Body temperature ';
	$tonalite ='Tone recognition';
	$ajouter ='add appointment';
}
}
else {
	$titre ='Prendre rendez-vous';
	$consigne ='Rentrez les informations suivantes pour prendre RDV';
	$matricule1 ='Matricule';
	$consigne2 ='Sélectionnez les tests à effectuer ';
	$freq ='Fréquence Cardiaque ';
	$reactionL ='Temps de réaction à une lumière ';
	$reactionS ='Temps de réaction à un son';
	$temp ='Température corporelle';
	$tonalite ='Reconnaissance de tonalité';
	$ajouter ='Ajouter le RDV';


}

?>