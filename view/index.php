<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Page d'accueil</title>
		<link href="headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="index.css" rel="stylesheet" />
		<link rel="icon" href="images/logo/logo.png" />

		<title> Page </title>
	</head>
	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="."><img class="logo" src="images/logo/sensair.png" alt="" /></a>
				<ul class="links">
					<li><a href=".">Accueil</a></li>
					<li><a href="services/services.php">Nos services</a></li>
					<li><a href="quiSommesNous/quiSommesNous.php">À propos de nous</a></li>
					<li><a href="messagerie/contactezNous.php">Contactez nous</a></li>
					<li><a href="FAQ/FAQ.php">FAQ</a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="images/icons/language.svg" style="width: 25px" />
						</a>
						<ul class="sous">
							<li><a href="#">Français</a></li>
							<li><a href="#">English</a></li>
							<li><a href="#">Espanol</a></li>
							<li><a href="#">Deutch</a></li>
						</ul>
					</li>
					<li>
						<a href="login/login.php"
							><img class="bi bi-globe" src="images/icons/account.svg" style="width: 25px"
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
	<!-- -------------------------------------------------------------- BANNIERE---------------------------------------------------------------------------------- -->
	<body>
	
		<section id="main-image">
			<h2>WELCOME TO <br /><strong>SENS'AIR</strong></h2>
			<a href="login/login.php" class="button-1">
			<?php if(isset($_SESSION['matricule'])): ?>
				Accéder à mon compte
			<?php else: ?>			
				Se connecter
			<?php endif; ?>
			</a>
		</section>

		<!-- ------------------------------------------------------------ PRESENTATION---------------------------------------------------------------------------------- -->

		<section id="presentation">
			<div class="wrapper">
				<h2>VOS TESTS PSYCHOTECHNIQUES</h2>
				<p>
					Avec les serivces de sens'air,
					nous vous proposons une gestion simple et ergonomique des rendez-vous et des résultats
					avec du materiel de pointe pour maximiser la condition physique de vos pilotes.
				</p>
			</div>
		</section>

		<!-- ----------------------------------------------------------- NOS ENGAGEMENTS---------------------------------------------------------------------------------- -->

		<section id="steps">
			<div class="wrapper">
				<h2>NOS ENGAGEMENTS</h2>
				<br />
				<ul>
					<li id="step-1">
						<h4>Planifier</h4>
						<p>
							Un fonctionnement en rendez-vous, permettant une bonne gestion des capteurs.
						</p>
					</li>
					<li id="step-2">
						<h4>Organiser</h4>
						<p>
							Une organisation exemplaire pour permettre un suivi des tests psychotechniques des unités.
						</p>
					</li>
					<li id="step-3">
						<h4>Voyager</h4>
						<p>
							Prenez les commandes de manière sereine grâce à un suivi complet de votre condition physique.
						</p>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
		</section>

		<!-- ----------------------------------------------------------- ---------------------------------------------------------------------------------- -->

		<section id="possibilities">
			<div class="wrapper">
				<div class="content">
					<img
						class="avion"
						src="https://www.usinenouvelle.com/mediatheque/9/3/3/000710339_896x598_c.jpg"
						alt="avion"
					/>
					<h4>Maximiser le potentiel de vos pilotes</h4>
					<p>
						En mettant en place un suivi profond et complet pour chaque pilote,<br>
						nous vous donnons l'opportunité de maintenir vos exigences sur les pilotes<br>
						afin de veiller à ce qu'ils règnent sur les cieux.
					</p>
					<a href="#" class="button-2">Plus d'informations</a>
				</div>
			</div>
		</section>

		<!-- ----------------------------------------------------------- CONTACTEZ-NOUS ---------------------------------------------------------------------------------- -->

		<section id="contact">
			<div class="wrapper">
				<h2>Contactez-nous</h2>
				<p>
					Nos équipes travaillent en permanence pour maintenir la qualité du service,<br>
					ils sont disponibles et vous pouvez nous contacter en cas de besoin.<br>
					Nous serons ravis de répondre à vos questions et de vous fournir de l'aide en cas de besoin.
				</p>
				<a href="messagerie/contactezNous.php" class="button-3">Contactez nous</a>
			</div>
		</section>
	</body>

	<footer>
		<div class="contenu-footer">
			<div class="bloc logo">
				<a href="."><img class="logo" src="images/logo/logo.png" alt="" /></a>
			</div>
			<div class="bloc coordonnees">
				<div class="coor">
					<li>
						<a href="mailto:info@sensair.com" class="mail">info@sensair.com</a>
					</li>
					<li>
						<a href="tel:+33123488733" class="tel">+33 1 23 48 87 33</a>
					</li>
					<li>
						<a
							href="https://www.google.fr/maps/place/10+Rue+de+Vanves,+92170+Issy-les-Moulineaux/@48.824529,2.2776649,17z/data=!3m1!4b1!4m5!3m4!1s0x47e6707980bd3947:0xd54fb6c5e1933333!8m2!3d48.824529!4d2.2798536"
							class="adresse"
							>10 rue de Vanves, 92130 Issy-les-Moulineaux</a
						>
					</li>
				</div>
			</div>
			<div class="bloc reseaux">
				<div class="res">
					<h4>SUIVEZ-NOUS</h4>
					<a href="#"><img class="facebook" src="images/icons/facebook.png" alt="" /></a>
					<a href="#"><img class="google" src="images/icons/google.png" alt="" /></a>
					<a href="#"><img class="linkedin" src="images/icons/linkedin.png" alt="" /></a>
				</div>
				<div class="liens">
					<ul>
					<li><a href=".">Accueil</a></li>
					<li><a href="services/services.php">Nos services</a></li>
					<li><a href="quiSommesNous/quiSommesNous.php">À propos de nous</a></li>
					<li><a href="contactezNous/contactezNous.php">Contactez nous</a></li>
					<li><a href="FAQ/FAQ.php">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<p id="copyright">© 2021 Sens'air</p>
	</footer>
</html>
