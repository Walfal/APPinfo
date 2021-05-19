<?php
	$title = "Mes résultats";
	require_once('../../view/headerFooter/header.php');
	include_once('../../model/BDD/connexionBDD.php');
	//include('../../model/envoieTest.php');
	$matricule = (isset($_GET['id']) && $_SESSION['matricule'] < 20) ? $_GET['id'] : $_SESSION['matricule'];
	$req = query($BDD, "SELECT debut, resultat, nom FROM PriseRDV NATURAL JOIN (Test NATURAL JOIN Capteur) WHERE matricule = ? ORDER BY debut", [$matricule]);
	$tests = $req->fetchAll();
	$nom = recuperationUneDonnee($BDD, "Personne", "matricule", $matricule);
	$nom = $nom["nom"];
?>

<link href="mesResultats.css" rel="stylesheet" />

	<!-- -------------------------------------------------------------- MAIN ---------------------------------------------------------------------------------- -->
	<body>
		<div class="title">
			<h1>Mes résultats</h1>
			<img src="../images/icons/result.svg" alt="fiche de résultats" class="result-img" />
		</div>
		<div>
			<div class="results">
				<div class="result">
					<div class="date">
						<img src="../images/icons/calendarWhite.svg" alt="calendrier" class="calendar" />
						<h2>Date</h2>
					</div>
					<place>
						<centre>
							<img src="../images/icons/home.svg" alt="maison" class="home" />
							<h2>Centre de Lorem</h2>
						</centre>
						<a class="getResults" href="resultatsCentre.php">
							Consulter<br />
							mes résultats
						</a>
					</place>
				</div>
			</div>
		</div>
		<table class="resultat">
			<tr>
				<th>Type de Test</th>
				<th>Résultat</th>
				<th>Date</th>
				<!--<th>Date</th>-->
				<th>Nom</th>
			<!--	<th>nom</th>-->
			<!--	<th>IdCapteur</th>-->
			</tr>
			<?php foreach($tests as $test): ?>
				<tr>
				<td><?= $test['nom'];?></td>
				<td><?= $test['resultat'];?></td>
				<td>
				<?php 
                    setlocale(LC_TIME, 'fr_FR.utf-8','fra');
                    $date = new DateTime($test['debut']);
                    echo (strftime("%A %e %B %Y %k:%M", date_timestamp_get($date)));?></td>
				<td><?= $nom ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</body>
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
