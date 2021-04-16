
   
<?php require '../header.php'; ?>

<link rel="stylesheet" href="../css/contact.css">
<body>
	

	<div class = "bandehaut">
		
		<p class="titrePage" style="line-height:100%"><b>Contactez-nous</b></p>
		<p class= "sousTitre"><i>Nous sommes là pour vous aider</i></p>
	</div>

		<form class="formulaire">
			<p class="consigne"><i> Envoyez-nous un message :</i></p>
			<input  class = "boite" type="text" name="nomPrenom" id="nomPrenom" placeholder="Nom et Prénom*">
			<br>
			<input class = "boite" type="text" name="numerotel" id="numerotel" placeholder="Numéro de téléphone*">
			<br>
			<input class = "boite" type="text" name="email" id="email" placeholder="E-mail*">
			<br>
			<textarea class="boiteMessage" type="textarea" name="message" id="message" placeholder="Votre message*" wrap ="soft"></textarea>
			<br>
			<input  class="boiteEnvoyer" type="submit" name="Envoyer" id="Envoyer" value="Envoyer">
		</form>

		<p class="champs">* Les champs doivent nécessairement être complétés </p>
	
</body>

<footer class="bandebas">
	<p class="coordonnees"><b>COORDONNÉES</b> <br>_________</br></p>
    <p class="info"><b>Mail : </b> info@sensair.com <br><br class="info"><b>Adresse :</b> 10 rue de Vanves, 92130 Issy-Les-Moulineaux </br> <br class="info"> <b>Téléphone :</b> +33 1 23 48 87 33</br></p>
</footer>
</html>