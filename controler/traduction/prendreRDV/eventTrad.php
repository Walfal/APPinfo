<?php 


if ($_SESSION['langue'] === 'en'){
	$titre='Information about the appointment';
	$patient ='Patient';
	$fiche ='Complete patient file ';
	$date1 ='Date';
	$heureD ='Start time';
	$heureF ='End time';
	$test1 ='Test(s) to do ';



}

else {
	$titre='Information sur le RDV ';
	$patient ='Patient';
	$fiche ='Fiche complète du patient';
	$date1 ='Date';
	$heureD ='Heure de démarage';
	$heureF ='Heure de fin';
	$test1 ='Test(s) à faire';



}