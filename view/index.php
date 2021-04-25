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
<?php 
$title='Accueil';
require_once 'header/header.php';?>
	<!-- -------------------------------------------------------------- BANNIERE---------------------------------------------------------------------------------- -->
	<body>
	
		<section id="main-image">
			<h2>WELCOME TO <br /><strong>SENS'AIR</strong></h2>
			<a href="login/login.php" class="button-1">Se connecter</a>
		</section>

		<!-- ------------------------------------------------------------ PRESENTATION---------------------------------------------------------------------------------- -->

		<section id="presentation">
			<div class="wrapper">
				<h2>Non sermo in qui fabellas</h2>
				<p>
					Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus
					mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum
					nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius
					negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans.
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
							Inimicitias quis si si consiliorum Quid semper amicus petenda factorum atque mihi publicae
							censuerim sicut.
						</p>
					</li>
					<li id="step-2">
						<h4>Organiser</h4>
						<p>
							Inimicitias quis si si consiliorum Quid semper amicus petenda factorum atque mihi publicae
							censuerim sicut.
						</p>
					</li>
					<li id="step-3">
						<h4>Voyager</h4>
						<p>
							Inimicitias quis si si consiliorum Quid semper amicus petenda factorum atque mihi publicae
							censuerim sicut.
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
					<h4>Non sermo in qui fabellas</h4>
					<p>
						Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis
						lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse
						firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero
						obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse,
						non iudicium clamans.
					</p>
					<a href="#" class="button-2">Plus d'infos</a>
				</div>
			</div>
		</section>

		<!-- ----------------------------------------------------------- CONTACTEZ-NOUS ---------------------------------------------------------------------------------- -->

		<section id="contact">
			<div class="wrapper">
				<h2>Contactez-nous</h2>
				<p>
					Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus
					mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum
					nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius
					negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans.
				</p>
				<a href="contactezNous/contactezNous.php" class="button-3">Contact</a>
			</div>
		</section>
		<?php require_once 'footer/footer.php'; ?>
	</body>
</html>