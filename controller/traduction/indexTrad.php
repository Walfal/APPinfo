<?php 
if(isset ($_SESSION['langue'])){

if ($_SESSION['langue'] === 'en'){

	$accueil = 'Home';
	$services = 'Our services';
	$aPropos = 'About us';
	$contact ='Contact us';
	$FAQ ='FAQ';
	$suivez ='FOLLOW US';
	$CGU='Terms and conditions of use';

	$bienvenue ='Welcome to  <br /><strong>SENS\'AIR</strong>';
	$acces ='Access my account';
	$login ='Log in';
	$tests ='YOUR PSYCHOMETRIC TESTS';
	$description ='With the services of Sens air,
	we offer you a simple and ergonomic management of appointments and results
	with state-of-the-art equipment to maximize the physical condition of your pilots.';
	$engagement ='<h2>Our COMMITMENTS</h2>
	<br />
	<div class="engagements">

		<div class="engagement">
			<img src="images/icons/face.svg" style="width:30px">
			<h4>Planning</h4>
			<p><br>
				Appointment-based operation, allowing for proper sensor management.
				<br></p>
		</div>
		<div class="engagement">
			<img src="images/icons/face.svg" style="width:30px">
			<h4>Organize</h4>
			<p><br>
				Exemplary organization to allow for follow-up psychometric testing of units.
			<br></p>
		</div>
		<div class="engagement">
			<img src="images/icons/face.svg" style="width:30px">
			<h4>Voyager</h4>
			<p><br>
				Take the reins with peace of mind with comprehensive fitness tracking.
			<br></p>
		</div>
		
	</div>
</div>
</section>';

$potentiel ='<h4>Maximizing the potential of your drivers</h4>
<p>
	By implementing a deep and comprehensive follow-up for each driver,<br>
	we give you the opportunity to maintain your demands on drivers<br>
	to ensure they rule the skies.
</p>';
$information ='More information';
$contacterNous ='<h2>Contact Us</h2>
<p>
	Our teams are constantly working to maintain the quality of service,<br>
	they are available and you can contact us if you need.<br>
	We will be happy to answer your questions and provide assistance if needed.
</p>';

}
}


else {
	$accueil = 'Accueil';
	$services = 'Nos services';
	$aPropos = 'A propos de nous';
	$contact = 'Contactez-nous';
	$FAQ = 'FAQ';
	$suivez ='SUIVEZ-NOUS';
	$CGU='Conditions générales d\'utilisation';
	
	$bienvenue ='BIENVENUE CHEZ <br /><strong>SENS\'AIR</strong>';
	$acces ='Accéder à mon compte';
	$login ='Se connecter';
	$tests ='VOS TESTS PSYCHOTECHNIQUES';
	$description ='Avec les services de Sens\'air,
	nous vous proposons une gestion simple et ergonomique des rendez-vous et des résultats
	avec du materiel de pointe pour maximiser la condition physique de vos pilotes.';


	$engagement ='<h2>NOS ENGAGEMENTS</h2>
	<br />
	<div class="engagements">
		<div class="engagement">
			<img src="images/icons/face.svg" style="width:30px">
			<h4>Planifier</h4>
			<p><br>
				Un fonctionnement en rendez-vous, permettant une bonne gestion des capteurs.
			<br></p>
		</div>
		<div class="engagement">
			<img src="images/icons/face.svg" style="width:30px">
			<h4>Organiser</h4>
			<p><br>
				Une organisation exemplaire pour permettre un suivi des tests psychotechniques des unités.
			<br></p>
		</div>
		<div class="engagement">
			<img src="images/icons/face.svg" style="width:30px">
			<h4>Voyager</h4>
			<p><br>
				Prenez les commandes de manière sereine grâce à un suivi complet de votre condition physique.
			<br></p>
		</div>
	</div>
</div>
</section>';
$potentiel ='<h4>Maximiser le potentiel de vos pilotes</h4>
<p>
	En mettant en place un suivi profond et complet pour chaque pilote,<br>
	nous vous donnons l\'opportunité de maintenir vos exigences sur les pilotes<br>
	afin de veiller à ce qu\'ils règnent sur les cieux.
</p>';
$information ='Plus d\'informations';
$contacterNous ='<h2>Contactez-nous</h2>
<p>
	Nos équipes travaillent en permanence pour maintenir la qualité du service,<br>
	ils sont disponibles et vous pouvez nous contacter en cas de besoin.<br>
	Nous serons ravis de répondre à vos questions et de vous fournir de l\'aide en cas de besoin.
</p>';

}