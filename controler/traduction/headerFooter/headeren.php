
<?php 

if(isset ($_SESSION['langue'])){
 if ($_SESSION['langue'] === 'en'){

	$accueil = 'Home';
	$services = 'Our services';
	$aPropos = 'About us';
	$contact ='Contact us';
	$FAQ ='FAQ';
	$suivez ='FOLLOW US';
	$CGU='Terms and conditions of use';



}
}

else {

	$accueil = 'Accueil';
	$services = 'Nos services';
	$aPropos = 'A propos de nous';
	$contact = 'Contactez-nous';
	$FAQ = 'FAQ';
	$suivez ='SUIVEZ-NOUS';
	$CGU='Conditions générales d\'utilisation';
}

?>
