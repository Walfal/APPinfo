
<?php 
if(isset ($_SESSION['langue'])){

if ($_SESSION['langue'] === 'en'){

	$jours =['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
		$mois= ['January', 'February', 'March', 'April','May','June','Jully', 'August', 'Septembere', 'October', 'Novemere', 'December'];

}

}

	else {

	$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
	$mois = ['Janvier', 'Février', 'Mars', 'Avril','Mai','Juin','Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
}

?>