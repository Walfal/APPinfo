<?php 

if(isset ($_SESSION['langue'])){

if ($_SESSION['langue'] === 'en'){

	$question ='A QUESTION ?';
	$aide ='We are here to help you';
	$ajouter ='To add questions and answers';
	$cliquez ='click here';
	$plusInfos = 'For more information, contact us,  ';
	$suppr ='Delete';
	$modif ='Modify';
	$FAQTrad = 'FAQ_EN';
}
}


else{
	
	$question ='UNE QUESTION ?';
	$aide ='Nous sommes là pour vous aider';
	$ajouter ='Pour ajouter des questions et réponses';
	$cliquez ='cliquez ici';
	$plusInfos = 'Pour plus d\'informations, contactez-nous,  ';
	$suppr ='Supprimer';
	$modif ='Modifier';
	$FAQTrad = "FAQ_FR";

}
