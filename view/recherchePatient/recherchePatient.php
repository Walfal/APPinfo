<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="UTF-8" />
		<title>accueil administrateur</title>
		<link href="../../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="profilPatients.css" rel="stylesheet" />
		<link rel="icon" href="../../images/logo/logo.png" />
	</head>
	<!-- -------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->
	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="../"><img class="logo" src="../../images/logo/sensair.png" alt="" /></a>
				<ul class="links">
					<li><a href="../">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="quiSommesNous.html">About Us</a></li>
					<li><a href="contactezNous.html">Contact Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="../../images/icons/language.svg" style="width: 25px" />
						</a>
					</li>
					<li>
						<a href="login.html"
							><img class="bi bi-globe" src="../../images/icons/account.svg" style="width: 25px"
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


<?php require '../footer/footer.php' ?>
</html>

