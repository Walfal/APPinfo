<?php
	include_once('../../model/connexionBDD.php');
	$matriculeTest = 1;
	$matricule = 1;

	$test = recuperationDesDonnees($BDD, "Test", "matricule", $matriculeTest);
	$nom = recuperationUneDonnee($BDD,"Personne", "matricule", $matricule);
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>mes Résultats</title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="mesResultats.css" rel="stylesheet" />
		<link rel="icon" href="../images/logo/logo.png" />
	</head>
	
	<?php require '../header/header.php'; ?>

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
						<button class="getResults">
							Consulter<br />
							mes résultats
						</button>
						
					</place>
				</div>
			</div>
		</div>
		<table class="resultat">
			<tr>
				<th>Id Test</th>
				<th>Type de Test</th>
				<th>Résultat</th>
				<th>Date</th>
				<th>Trame</th>
				<th>Nom du patient</th>
				<th>IdCapteur</th>
			</tr>
			<?php foreach($test as $row): ?>
				<tr>
				<td><?= $row['idTest'];?></td>
				<td><?= $row['type'];?></td>
				<td><?= $row['resultat'];?></td>
				<td><?= $row['date'];?></td>
				<td><?= $row['trame'];?></td>
				<td><?= $nom['nom'];?></td>
				<td><?= $row['idCapteur'];?></td>
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
					<li><a href="../services/services.php">Services</a></li>
					<li><a href="../quiSommesNous/quiSommesNous.php">About Us</a></li>
					<li><a href="../contactezNous/contactezNous.php">Contact Us</a></li>
					<li><a href="../faq/faq.php">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
		<p id="coyright">© 2021 Sens'air</p>
	</footer>
</html>
