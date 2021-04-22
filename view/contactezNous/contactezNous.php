<?php
	include_once('../../model/connexionBDD.php');
	//include_once('../../model/messagerie.php');
	include('../../model/envoieDesDonnees.php');

	$matriculeTest = rand(0,1);
	$envoieA = ($matriculeTest == 0) ? 1 : 0;

	$conv = recuperationMessage($BDD, $matriculeTest, $envoieA);
	$client = recuperationPersonne($BDD, $envoieA);

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Contactez-nous</title>
		<link href="../headerFooter//headerFooter.css" rel="stylesheet" />
		<link href="contactezNous.css" rel="stylesheet" />
		<link rel="icon" href="../images/logo/logo.png" />
	</head>
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
	<?php if($matriculeTest != 0): ?>
	<body>
		<div class="bandehaut">
			<h1 class="titrePage" style="line-height: 100%">Contactez-nous</h1>
			<i class="sousTitre">Nous sommes là pour vous aider</i>
		</div>
		
		<div class="conversation"> 
			<div class="conv" id="conv">
				<?php foreach($conv as $singleMessage):
				if($singleMessage['matricule'] == $matriculeTest): ?>
					<p class="envoye">
				<?php else:?>
					<p class="recu">
				<?php endif ?>
				<?= nl2br($singleMessage['contenu']) ?></p>
				<?php endforeach ?>
				<div id="affMessage"></div>
			</div>
		</div>
		<form class="formulaire" method="post" id="Envoyer">
			<textarea
				class="boiteMessage"
				type="text"
				name="message"
				id="message"
				placeholder="Votre message"
			></textarea>
			<br />
			<input class="boiteEnvoyer" type="submit" name="Envoyer" value="Envoyer" />
		</form>
	</body>
	<?php else: ?>
	<body>
		<div class="bandehaut">
			<h1 class="titrePage" style="line-height: 100%">Réponse à</h1>
			<i class="sousTitre"><?= $client['prenom'] . ' ' . $client['nom']?></i>
		</div>
		
		<div class="conversation"> 
			<div class="conv" id="conv">
				<?php foreach($conv as $singleMessage):
				if($singleMessage['matricule'] == $matriculeTest): ?>
					<p class="envoye">
				<?php else:?>
					<p class="recu">
				<?php endif ?>
				<?= nl2br($singleMessage['contenu']) ?></p>
				<?php endforeach ?>
				<div id="affMessage"></div>
			</div>
		</div>
		<form class="formulaire" method="post" id="Envoyer">
			<textarea
				class="boiteMessage"
				type="text"
				name="message"
				id="message"
				placeholder="Votre message"
			></textarea>
			<br />
			<input class="boiteEnvoyer" type="submit" name="Envoyer" value="Envoyer" />
		</form>
	</body>
	<?php endif ?>
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









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	var conv = document.getElementById('conv')
	conv.scrollTop = conv.scrollHeight - conv.clientHeight


	$(document).ready(function (){

		$('#Envoyer').on("submit", function(e){
			e.preventDefault()

			var message  = document.getElementById('message').value
			var id = <?= $matriculeTest ?>;
			var envoieA = <?= $envoieA ?>;
			
			document.getElementById('message').value = ''
			/* if(message != ''){ */
				$.ajax({
					url : '../../model/envoyerMessage.php',
					method : 'post',
					dataType : 'html',
					data : {message: message, envoieA : envoieA, id : id},
					success : function(data){
						console.log('id: ' + id + '   envoieA: ' + envoieA + '     message: ' + message)
						$('#affMessage').append(data)
					},
					error : function(e, xhr, s){
						let error = e.responsJSON;
						if(e.status == 403 && typeof error !== 'undefined'){
							alert('Erreur 403')
						}else if(e.status == 404){
							alert('Erreur 404')
						}else if(e.status == 403){
							alert('Erreur 403')
						}else if(e.status == 401){
							alert('Erreur 401')
						}else{
							alert('Erreur Ajax')
						}
					}
				})
			/* } */
		})
	})
</script>