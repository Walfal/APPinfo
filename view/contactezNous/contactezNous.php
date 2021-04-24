<?php
	include_once('../../model/connexionBDD.php');

	$matriculeTest = 0;

	$conv = recuperationUneDonnee($BDD,"Message", "matricule", $matriculeTest);
	$idConversation = $conv['idConversation'];
	$conv = recuperationUneDonnee($BDD, "Conversation", "idConversation", $idConversation);

	$messages = recuperationMessages($BDD, $idConversation);
	$client = recuperationUneDonnee($BDD, "Personne", "matricule", $matriculeTest);
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

	<?php if($matriculeTest != 0):
		if($idConversation == null): ?>
			<meta http-equiv="refresh" content="0;url=../contactezNous1/contactezNous1.php">
		<?php
		else:
		?>
	<body>
		<div class="bandehaut">
			<h1 class="titrePage" style="line-height: 100%">Contactez-nous</h1>
			<i class="sousTitre">Nous sommes là pour vous aider</i>
		</div>

		<div class="titre">
			<h3><?= $conv['titre'] ?></h3>
		</div>

		<div class="conversation"> 
			<div class="messages" id="messages">
				<?php foreach($messages as $singleMessage):
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
			<input 	class="boiteEnvoyer" type="submit" name="Envoyer" value="Envoyer" />
		</form>
	</body>

	<?php endif;
		elseif(isset($_GET['client'])):
		$idConversation = $_GET['client'];
		$conv = recuperationUneDonnee($BDD, "Conversation", "idConversation", $idConversation);
		$messages = recuperationMessages($BDD, $idConversation); ?>

	<body>
		<div class="bandehaut">
			<h1 class="titrePage" style="line-height: 100%">Réponse à</h1>
			<i class="sousTitre"><?= $client['prenom'] . ' ' . $client['nom']?></i>
		</div>

		<div class="titre">
			<h3><?= $conv['titre'] ?></h3>
		</div>

		<div class="conversation"> 
			<div class="messages" id="messages">
				<?php
				
					foreach($messages as $singleMessage):
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

	<?php else:
		$conversations = recuperationConversationsAdmin($BDD);
		$idConversation = 0;
	?>
	<body>

		<div class="bandehaut">
			<h1 class="titrePage">Choississez le client</h1>
			<i class="sousTitre">à qui vous voulez répondre</i>
		</div>

		<div>
			<?php
			print_r($_GET);
			?>
		</div>

		<div class="conversation"> 
			<ul class="convAdmin messages" id="messages">
				<?php foreach($conversations as $conversation):
					$message = recuperationMessages($BDD, $conversation['idConversation']);
					$client = recuperationUneDonnee($BDD, "Personne", "matricule", $message[0]['matricule']);
					?>
					<li><a href="./contactezNous.php?client=<?=$conversation['idConversation']; ?>">
					<?='Une question de: ' . $client['prenom'] . ' ' . $client['nom'] . ': ' .  $conversation['titre'] ?>
				</a></li>
				<?php endforeach ?>
			</ul>
		</div>
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
	var messages = document.getElementById('messages')
	messages.scrollTop = messages.scrollHeight - messages.clientHeight


	$(document).ready(function (){

		$('#Envoyer').on("submit", function(e){
			e.preventDefault()

			var message  = document.getElementById('message').value
			var idConversation  = <$idC?= onversation ?>;
			var id = <?= $matriculeTest ?>;
			
			document.getElementById('message').value = ''
			/* if(message != '' && titre != ''){ */
				$.ajax({
					url : '../../model/envoyerMessage.php',
					method : 'post',
					dataType : 'html',
					data : {idConversation: idConversation, message: message, id : id},
					success : function(data){
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