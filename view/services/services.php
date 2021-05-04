<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Services</title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="services.css" rel="stylesheet" />
		<link rel="icon" href="../images/logo/logo.png" />
	</head>
	<!-- -------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->
	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="../"><img class="logo" src="../images/logo/sensair.png" alt="" /></a>
				<ul class="links">
					<li><a href="../">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="quiSommesNous.html">About Us</a></li>
					<li><a href="contactezNous.html">Contact Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="../images/icons/language.svg" style="width: 25px" />
						</a>
					</li>
					<li>
						<a href="login.html"
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
=======
<?php
$title = 'Services';
require_once '../headerFooter/header.php';
>>>>>>> Raph

require_once '../../model/Login/loginFunctions.php';
?>

<link href="services.css" rel="stylesheet" />
<section class="sections home text-center">
	<section class="intro">
		<h1>SENS'AIR</h1>
		<p>Service psychotechnique de l'air</p>
	</section>
	<div class="citation">
		<q>Le moteur est le cœur d'un avion mais le pilote est son âme.</q>
		<p><br><br>Walter Alexandre Raleigh</p>
	</div>

<section class="nosservices">
	<h2>Nos services</h2>
	<div class="services">
		<div class="ligneune">
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<h4>
					Test de reconnaissance<br>
					de tonalité
				</h4>
				<p>
					Le test vérifie les aptitudes<br>
					du patient à reconnaître<br>
					un signal sonore.
				</p>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<h4>
					Mesurer la fréquence <br>
					cardiaque
				</h4>
				<p>
					Test de la fréquence cardiaque<br>
					du patient.
				</p>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<h4>
					Mesurer la température<br>
					supericielle de la peau
				</h4>
				<p>
					Le capteur mesure la température<br>
					superficielle de la peau.
				</p>
			</div>
		</div>

		<div class="sonlumiere">
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<h4>Temps de réaction à<br>
					un son inattendu
				</h4>
				<p>
					À l'audition d'un son,<br>
					le patient doit appuyer<br>
					sur un bouton et<br>
					le temps de réaction<br>
					est mesuré par le capteur.
				</p>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<h4>Temps de réction à <br>
					une lumière inattendue
				</h4>
				<p>
					Lorsqu'une lumière s'allume,<br>
					l'utilisateur doit appuyer sur un bouton,<br>
					le capteur mesurera le temps de réaction.
				</p>
			</div>
		</div>
	</div>
</section>
<?php require_once '../headerFooter/footer.php'; ?>
