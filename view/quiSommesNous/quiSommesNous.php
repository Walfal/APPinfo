<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Qui sommes nous ?</title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="quiSommesNous.css" rel="stylesheet" />
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

	<!-- -------------------------------------------------------------- MAIN---------------------------------------------------------------------------------- -->

	<body>
		<div class="mainPage">
		<div class="section section1">
			<div class="text">
				<h1 class="titre">Qui Sommes-nous ?</h1>
				<p class="txt">
					<br />Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti soluta aliquid
					quas excepturi inventore doloremque fuga dicta iure maxime, sit doloribus voluptatum, tenetur
					expedita facilis suscipit maiores quo necessitatibus? Illum, temporibus. Iure facere blanditiis
					molestias, laboriosam voluptatem alias! Distinctio dignissimos maxime deleniti accusamus non
					fuga sunt asperiores, inventore minus.
				</p>
			</div>
			<img class="img" src="../images/divers/SAV.jpg" />
		</div>
		<div class="section section2">
			<img class="img" src="../images/divers/SAV.jpg" />
			<div class="text">
				<p class="txt">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti soluta aliquid quas
					excepturi inventore doloremque fuga dicta iure maxime, sit doloribus voluptatum, tenetur
					expedita facilis suscipit maiores quo necessitatibus? Illum, temporibus. Iure facere blanditiis
					molestias, laboriosam voluptatem alias! Distinctio dignissimos maxime deleniti accusamus non
					fuga sunt asperiores, inventore minus.
				</p>
			</div>
		</div>
		<!-------------------------------------------------------QUALITÉS-------------------------------------------------------------------------------->

		<div class="section section3">
			<h3 class="txt3">Nos qualités:</h3>
			<div class="qualites">
				<div class="qualite">
					<img src="../images/icons/face.svg" style="width: 50px" />
					<p>
						<br />Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quasi molestiae corrupti
						quam officiis eaque libero obcaecati soluta id? Exercitationem?<br />
					</p>
				</div>
				<div class="qualite">
					<img src="../images/icons/face.svg" style="width: 50px" />
					<p>
						<br />Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quasi molestiae corrupti
						quam officiis eaque libero obcaecati soluta id? Exercitationem?<br />
					</p>
				</div>
				<div class="qualite">
					<img src="../images/icons/face.svg" style="width: 50px" />
					<p>
						<br />Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quasi molestiae corrupti
						quam officiis eaque libero obcaecati soluta id? Exercitationem?<br />
					</p>
				</div>
			</div>
		</div>
	</div>
	</body>
	<!-- ----------------------------------------------------------- FOOTER ---------------------------------------------------------------------------------- -->
=======
<?php 
$title='Qui sommes-nous ?';
require_once '../headerFooter/header.php';?>
<link href="quiSommesNous.css" rel="stylesheet" />

<div class="mainPage">
	<div class="section section1">
		<div class="text">
			<h1 class="titre">Qui Sommes-nous ?</h1>
			<p class="txt">
				<br />Sens'air est une entreprise de service créée en 2020 spécialisée dans la réalisation de tests psychotechniques.
				Avec 60 salariés, sens'air met tout en œuvre pour garantir un suivi complet des conditions physiques des unités.
				De plus, nos équipes travaillent afin de garantir la gestion, le stockage, et la protection des données sur notre plateforme web.
			</p>
		</div>
		<img class="img" src="../images/divers/team target.jpeg" />
	</div>
	<div class="section section2">
		<img class="img" src="../images/divers/Satisfaction.jpg" />
		<div class="text">
			<p class="txt">
				Votre satisfaction est notre priorité, si vous avez des suggestions n'hésitez pas à nous contacter à travers nos différents canaux.
				Nous sommes ouvert à vos suggestions dans le but de vous proposer un service adapté.
			</p>
		</div>
	</div>
	<!-------------------------------------------------------QUALITÉS-------------------------------------------------------------------------------->
>>>>>>> Raph

	<div class="section section3">
		<h3 class="txt3">Nos qualités:</h3>
		<div class="qualites">
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br />Le professionnalisme est une des valeurs clé de sens'air,
					nous gérons vos données avec rigueur afin d'assurer leurs protections.<br />
				</p>
			</div>
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br />La ponctualité est très importante,
					nos équipes s'assurent de la mise en ligne des tests dans des délais très courts.<br />
				</p>
			</div>
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br />Nos équipes restent à votre écoute afin de pouvoir
					 détecter et <palli></palli>er le moindre dysfonctionnement le plus vite possible.<br />
				</p>
			</div>
		</div>
	</div>
</div>
<?php require_once '../headerFooter/footer.php'; ?> 
