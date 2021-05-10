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
					<li><a href="../">Accueil</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="../quiSommesNous/quiSommesNous.php">à propos</a></li>
					<li><a href="../contactezNous/contactezNous.php">Contactez nous</a></li>
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

	<body>
		<section class="sections home text-center">
			<section class="intro">
				<h1>SENS'AIR</h1>
				<p>jfedpdjdjf ddllsjjdlsjf ud fjsidh</p>
			</section>
			<div class="citation">
				<q>Le moteur est le coeur d'un avion mais le pilote est son âme.</q>
				<p>Walter Alexandre Raleigh</p>
			</div>

			<section class="nosservices">
				<h4>Nos services</h4>
				<div class="services">
					<div class="ligneune">
						<div class="service">
							<img class="verifier" src="../images/icons/v_image.png" />
							<h6>
								Test de reconnaissance<br />
								de tonalité
							</h6>
							<p>
								Le test verifie les aptitudes<br />
								du patient à reconnaître<br />
								un signal sonore.
							</p>
						</div>
						<div class="service">
							<img class="verifier" src="../images/icons/v_image.png" />
							<h6>
								Mesurer la fréquence <br />
								cardiaque
							</h6>
							<p>
								Test de la fréquence cardiaque<br />
								du patient<br />
							</p>
						</div>
						<div class="service">
							<img class="verifier" src="../images/icons/v_image.png" />
							<h6>
								Mesurer la température<br />
								supericielle de la peau
							</h6>
							<p>
								Le capteur mesure la température<br />
								superficielle de la peau<br />
							</p>
						</div>
					</div>

					<div class="sonlumiere">
						<div class="service">
							<img class="verifier" src="../images/icons/v_image.png" />
							<h6>Temps de réaction à <br />un son inattendu</h6>
							<p>
								À l'audition d'un son,<br />
								l'utilisateur doit appuyer<br />
								sur un boutton et<br />
								le temps de réaction<br />
								est mesuré par le capteur.
							</p>
						</div>
						<div class="service">
							<img class="verifier" src="../images/icons/v_image.png" />
							<h6>Temps de réaction à <br />une lumière inattendue</h6>
							<p>
								Lorsqu'une lumière s'allume,<br />
								l'utilisateur doit appuyer sur un boutton,<br />
								le capteur mesurera le temps de réaction.
							</p>
						</div>
					</div>
				</div>
			</section>
		</section>
	</body>
	<footer>
		<div class="contenu-footer">
			<div class="bloc logo">
				<a href="../"><img class="logo" src="../images/logo/logo.png" alt="" /></a>
=======
<?php
$title = 'Services';
require_once '../headerFooter/header.php';

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
>>>>>>> Raph
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

<<<<<<< HEAD

			<div class="bloc reseaux">
				<div class="res">
					<h4>SUIVEZ-NOUS</h4>
					<a href="#"><img class="facebook" src="../images/icons/facebook.png" alt="" /></a>
					<a href="#"><img class="google" src="../images/icons/google.png" alt="" /></a>
					<a href="#"><img class="linkedin" src="../images/icons/linkedin.png" alt="" /></a>
				</div>
				<div class="liens">
					<ul>
						<li><a href="../">Accueil</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="../quiSommesNous/quiSommesNous.php">à propos</a></li>
						<li><a href="../contactezNous/contactezNous.php">Contactez nous</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<p id="coyright">© 2021 Sens'air</p>
	</footer>
</html>

=======
		<div class="sonlumiere">
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<h4>Temps de réaction à<br>
					un son inattendu
				</h4>
				<p>
					À l'audition d'un son,<br>
					le patient doit appuyer
					sur<br> un bouton et
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
>>>>>>> Raph
