<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>FAQ</title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="FAQ.css" rel="stylesheet" />
		<link rel="icon" href="../images/logo/logo.png" />
	</head>
	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="../"><img class="logo" src="../images/logo/sensair.png" alt="" /></a>
				<ul class="links">
					<li><a href="../">Accueil</a></li>
					<li><a href="../services/services.php">Services</a></li>
							<li><a href="../quiSommesNous/quiSommesNous.php">à propos</a></li>
					<li><a href="../contactezNous/contactezNous.php">Contactez nous</a></li>
					<li><a href=".">FAQ</a></li>
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
		<div class="bandehaut">
			<div class="txt">
			<p class="titrePage">UNE QUESTION ?</p>
			<p class="sousTitre"><br>NOUS SOMMES LÀ POUR VOUS</p></div>
			<img src="../images/icons/live-chat.svg"/>
		</div>
		<?php
		$var = 1;
		for ($i = 0; $i < 100; $i++) {
			echo "- $var \n";
		}
	
		?></php>
			<p class="text">
				Dans la FAQ, vous trouverez la réponse aux questions les plus fréquente. S'il vous manque une information, n'hésitez pas à nous contacter par mail, par téléphone ou sur la page dédié à cet effet. Nous nous ferons un plaisir à répondre à vos question.
			</p>
	</body>
	<footer>
		<div class="contenu-footer">
			<div class="bloc logo">
				<a href="../"><img class="logo" src="../images/logo/logo.png" alt="" /></a>
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
					<a href="#"><img class="facebook" src="../images/icons/facebook.png" alt="" /></a>
					<a href="#"><img class="google" src="../images/icons/google.png" alt="" /></a>
					<a href="#"><img class="linkedin" src="../images/icons/linkedin.png" alt="" /></a>
				</div>
				<div class="liens">
					<ul>
						<li><a href="../">Accueil</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="quiSommesNous.html">à propos</a></li>
						<li><a href="contactezNous.html">Contactez nous</a></li>
						<li><a href=".">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<p id="coyright">© 2021 Sens'air</p>
	</footer>
</html>