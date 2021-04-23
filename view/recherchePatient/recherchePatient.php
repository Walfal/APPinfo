<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/recherchePatient.css">
        <title>Document</title>
    </head>

	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="../"><img class="logo" src="../images/logo/sensair.png" alt="" /></a>
				<ul class="links">
					<li><a href="../services/services.php">Services</a></li>
					<li><a href="../quiSommesNous/quiSommesNous.php">About Us</a></li>
					<li><a href="../contactezNous/contactezNous.php">Contact Us</a></li>
					<li><a href="../faq/faq.php">FAQ</a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="../images/icons/language.svg" style="width: 25px" />
						</a>
					</li>
					<li>
						<a href="../login/login.php"
							><img class="bi bi-globe" src="../images/icons/account.svg" style="width: 25px"
						/></a>
					</li>
				</ul>
				<label for="nav-toggle" class="icon-burger">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</label>
			</nav>
		</div>
	</header>


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

	<footer class="bandebas">
		<p class="coordonnees"><b>COORDONNÉES</b> <br>_________</br></p>
		<p class="info"><b>Mail : </b> info@sensair.com <br><br class="info"><b>Adresse :</b> 10 rue de Vanves, 92130 Issy-Les-Moulineaux </br> <br class="info"> <b>Téléphone :</b> +33 1 23 48 87 33</br></p>
	</footer>
	