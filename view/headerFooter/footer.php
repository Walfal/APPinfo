
<?php require '../../controler/traduction/headerFooter/headeren.php'; ?>
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
					<h4><?php echo $suivez ?></h4>
					<a href="#"><img class="facebook" src="../images/icons/facebook.png" alt="" /></a>
					<a href="#"><img class="google" src="../images/icons/google.png" alt="" /></a>
					<a href="#"><img class="linkedin" src="../images/icons/linkedin.png" alt="" /></a>
				</div>
				<div class="liens">
					<ul>
					<li><a href="../"><?php echo $accueil ?></a></li>
					<li><a href="../services/services.php"><?php echo $services ?></a></li>
					<li><a href="../quiSommesNous/quiSommesNous.php"><?php echo $aPropos ?></a></li>
					<li><a href="../contactezNous/contactezNous.php"><?php echo $contact ?></a></li>
					<li><a href="../FAQ/FAQ.php"><?php echo $FAQ ?></a></li>
					<li><a href="../headerFooter/CGU.php"><?php echo $CGU ?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<p id="copyright">© 2021 Sens'air</p>
	</footer>
</html>