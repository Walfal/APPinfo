<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="prendreRDV.css">
        <title>Document</title>
    </head>

	<?php require '../header/header.php'; 
	require 'bootstrap.php'?>


	<body>
		<div class = "hautPage">
			<p class="titrePage"><b>Prendre rendez-vous</b></p>
			<img class="imgCalendrier" src="../images/icons/calendrier.svg" alt="icone profil patient">
		</div>


		<div class="recherche">
			<p class="indication"><b>Trouvez un centre et prenez rendez-vous en trois clics !</b></p>
		<form class="aRemplir">
			<input type="text" class="nomCentre" name="nomCentre" placeholder="Nom du centre">
			<p class="ou"><b>OU</b></p>
			<input type="text" class="typeTest" name="typeTest" placeholder="Type de test que vous souhaitez">
			<img class = "localisation" src="../images/icons/lieu.png" alt="">
			<input type="text" class="adresse" name="adresse" placeholder="Code postale">
			<input type="submit" class="valider" name="valider" value="Valider">
		</form>
		</div>
	</body>

	<footer class="bandebas">
		<p class="coordonnees"><b>COORDONNÉES</b> <br>_________</br></p>
		<p class="info"><b>Mail : </b> info@sensair.com <br><br class="info"><b>Adresse :</b> 10 rue de Vanves, 92130 Issy-Les-Moulineaux </br> <br class="info"> <b>Téléphone :</b> +33 1 23 48 87 33</br></p>
	</footer>
	