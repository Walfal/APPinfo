<?php session_start(); 


if (isset($_POST['langue'])){
	if($_POST['langue'] == 'fr'){
		if (isset($_SESSION['langue'])){
			unset($_SESSION['langue']);
		}
	}
	else{
	$_SESSION['langue']= $_POST['langue'];
	}
}
require '../controller/traduction/indexTrad.php';

?>

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
					<li><a href="."><?php echo $accueil ?> </a></li>
					<li><a href="services/services.php"><?php echo $services ?></a></li>
					<li><a href="quiSommesNous/quiSommesNous.php"><?php echo $aPropos ?></a></li>
					<li><a href="messagerie/contactezNous.php"><?php echo $contact ?></a></li>
					<li><a href="FAQ/FAQ.php"><?php echo $FAQ ?></a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="images/icons/language.svg" style="width: 25px" />
						</a>
						<ul class="sous">
							<form method="post">
								<li><button class="langue" type ="submit"  name="langue" value="fr">Français</button></li>
								<li><button class="langue" type ="submit"  name="langue" value ="en">English</button></li>
								<li><a href="#">Espanol</a></li>
								<li><a href="#">Deutch</a></li>  
							</form>
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
	<body>
	
		<section id="main-image">
			<h2><?php echo $bienvenue ?></strong></h2>
			<a href="login/login.php" class="button-1">
			<?php if(isset($_SESSION['matricule'])): ?>
				<?php echo $acces ?>
			<?php else: ?>			
				<?php echo $login ?>
			<?php endif; ?>
			</a>
		</section>

		<section id="presentation">
			<div class="wrapper">
				<h2><?php echo $tests ?></h2>
				<p>
				<?php echo $description ?>
				</p>
			</div>
		</section>

		<!-- ----------------------------------------------------------- NOS ENGAGEMENTS---------------------------------------------------------------------------------- -->

		<section id="steps">
			<div class="wrapper">
			<?php echo $engagement ?>
		<!-- ----------------------------------------------------------- ---------------------------------------------------------------------------------- -->

		<section id="possibilities">
			<div class="wrapper">
				<div class="content">
					<img
						class="avion"
						src="https://www.usinenouvelle.com/mediatheque/9/3/3/000710339_896x598_c.jpg"
						alt="avion"
					/>
					<?php echo $potentiel ?>
					<a href="quiSommesNous/quiSommesNous.php" class="button-2"><?php echo $information ?></a>
				</div>
			</div>
		</section>

		<!-- ----------------------------------------------------------- CONTACTEZ-NOUS ---------------------------------------------------------------------------------- -->

		<section id="contact">
			<div class="wrapper">
			<?php echo $contacterNous ?>
				<a href="messagerie/contactezNous.php" class="button-3"><?php echo $contact ?></a>
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
					<li><a href="."><?php echo $accueil ?></a></li>
					<li><a href="services/services.php"><?php echo $services ?></a></li>
					<li><a href="quiSommesNous/quiSommesNous.php"><?php echo $aPropos ?></a></li>
					<li><a href="contactezNous/contactezNous.php"><?php echo $contact ?></a></li>
					<li><a href="FAQ/FAQ.php"><?php echo $FAQ ?></a></li>
					<li><a href="headerFooter/CGU.php"><?php echo $CGU ?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<p id="copyright">© 2021 Sens'air</p>
	</footer>
</html>
