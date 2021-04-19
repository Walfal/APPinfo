<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="recherchePatient.css">
        <title>Document</title>
    </head>


	<?php require '../header/header.php'; ?>

	


	<body>
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
	</body>


<?php require '../footer/footer.php' ?>

