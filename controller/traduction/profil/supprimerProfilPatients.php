<?php 
if(isset ($_SESSION['langue'])){
if ($_SESSION['langue'] === 'en'){
	$oui = 'Yes';
	$non = 'No';
	$titre = 'Delete profil';
	$question = "Do you really want to delete this profil ?";
}

}

else{
	$oui = 'Oui';
	$non = 'Non';
	$titre = 'Suprrimer un profil';
	$question = "Voulez-vous vraiment supprimer ce profil ?";
}
?>