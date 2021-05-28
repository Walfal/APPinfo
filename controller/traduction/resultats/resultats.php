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
	$detail = 'Results details';
	$resultat = 'Results';
	$detailTest1 = 'You can see the evolution of your results when you perform several tests. In this graph you have the evolution of your heart rate and temperature tests.';
	$detailTest2 = 'You can see the evolution of your results when you perform several tests. In this graph you can see the evolution of your results of your reaction time tests with an unexpected light or noise.';
	$nbTest = 'Number of <br>tests passed';
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
	$detail = 'Détail des résultats';
	$resultat = 'Résultats';
	$detailTest1 = "Vous pouvez voir l'évolution de vos résultats lorsque vous réalisez plusieurs tests. Dans ce graphe là vous avez l'évolution de vos tests de fréquence cardiaque et de température.";
	$detailTest2 = "Vous pouvez voir l'évolution de vos résultats lorsque vous réalisez plusieurs tests. Dans ce graphe là vous avez l'évolution de vos résultats de vos tests de temps de réaction avec une lumière ou un bruit inattendu.";
	$nbTest = 'Nombre de <br>tests passés';
}