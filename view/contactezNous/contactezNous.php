
<?php 
$title='Contactez Nous';
require_once '../header/header.php';?>
	<link href="contactezNous.css" rel="stylesheet" />


		<div class="bandehaut">
			<p class="titrePage" style="line-height: 100%"><b>Contactez-nous</b></p>
			<p class="sousTitre"><i>Nous sommes là pour vous aider</i></p>
		</div>

		<form class="formulaire">
			<p class="consigne"><i> Envoyez-nous un message :</i></p>
			<input class="boite" type="text" name="nomPrenom" id="nomPrenom" placeholder="Nom et Prénom*" />
			<br />
			<input class="boite" type="text" name="numerotel" id="numerotel" placeholder="Numéro de téléphone*" />
			<br />
			<input class="boite" type="text" name="email" id="email" placeholder="E-mail*" />
			<br />
			<textarea
				class="boiteMessage"
				type="textarea"
				name="message"
				id="message"
				placeholder="Votre message*"
				wrap="soft"
			></textarea>
			<br />
			<input class="boiteEnvoyer" type="submit" name="Envoyer" id="Envoyer" value="Envoyer" />
		</form>

		<p class="champs">* Les champs doivent nécessairement être complétés</p>
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
					<li><a href="../">Home</a></li>
					<li><a href="../services/services.html">Services</a></li>
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