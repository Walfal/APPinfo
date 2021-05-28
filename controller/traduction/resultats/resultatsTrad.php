<?php 
if(isset ($_SESSION['langue'])){

if ($_SESSION['langue'] === 'en'){
	$titre ='My results';
	$centre = 'Center of Notre-Dame de Lorette';
	$consulter ='Consult<br /> my results';
	$test1 ='Type of test';
	$resultats ='Results';
	$date ='Date';
	$nom1 ='Name of the patient';
	$centreTest ='Psychotechnical testing center';
	$adresse ='Address of the center';
	$retour ='Back';

}

}


else{
	$titre ='Mes résultats';
	$centre = 'Centre de Notre-Dame de Lorette';
	$consulter ='Consulter<br /> mes résultats';
	$test1 ='Type de test';
	$resultats ='Résultats';
	$date ='Date';
	$nom1 ='Nom du patient';
	$centreTest ='Centre de tests psychotechniques';
	$adresse ='Adresse du centre';
	$retour ='Retour';


}