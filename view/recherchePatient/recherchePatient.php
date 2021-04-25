<?php 
$title = 'accueil administrateur';
require_once '../header/header.php';?>
<link href="recherchePatient.css" rel="stylesheet" />

		<div class = "hautPage">
			<p class="titrePage"><b>Profils patients</b></p>
			<img class="imgRecherche" src="../images/icons/recherchePatient.svg" alt="icone profil patient">
		</div>


		<div class="recherche">
			<p class="indication"><b>Trouvez votre patient en trois clics !</b></p>
		<form class="aRemplir">
			<input type="text" class="nomPrenom" name="nomPrenom" placeholder="Nom et Prénom du patient">
			<p class="ou"><b>OU</b></p>
			<input type="text" class="numPatient" name="numPatient" placeholder="N° du patient">
			<img class = "localisation" src="../images/icons/localisation.svg" alt="">
			<input type="text" class="adresse" name="adresse" placeholder="Code postale">
			<input type="submit" class="valider" name="valider" value="Valider">
		</form>
		</div>

<?php require '../footer/footer.php' ?>
