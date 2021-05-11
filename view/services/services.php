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
