<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>accueil administrateur</title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="accueilAdmin.css" rel="stylesheet" />
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
	<body>

    <!-- ------------------------------------------------------------ PRESENTATION---------------------------------------------------------------------------------- -->

    <section id="presentation">
        <div class="wrapper">
            <div class="intro">
                <h2>Bienvenue amigo!</h2>
                <p class="textBienvenue">Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium.</p>
            </div>
            <div id="imageDate">
                <img id="user" src="../images/icons/user.png" alt=""></img>
                <p id="date">Dernière connexion le 10/02/2021</p>
            </div>
        </div>
    </section>

    <!-- ----------------------------------------------------------- NOS ENGAGEMENTS---------------------------------------------------------------------------------- -->

 
        <div class="bouttons">
            <button class="boutton">Gestion tests/capteurs</button> 
            <div class="divider"></div>
            <button class="boutton" type="submit">profil patients</button>
            <div class="divider"></div>
            <button class="boutton" type="">Planning</button>
            <div class="divider"></div>
            <button class="boutton" type="submit">Modifier mon profil</button>
        </div>

    <!-- ----------------------------------------------------------- FOOTER ---------------------------------------------------------------------------------- -->
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
                    <li><a href="../">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="quiSommesNous.html">About Us</a></li>
                    <li><a href="contactezNous.html">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <p id="coyright">© 2021 Sens'air</p>
</footer>
</html>
