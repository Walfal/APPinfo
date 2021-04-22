<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="contact.css">
        <title>Document</title>
    </head>
<?php require '../header/header.php'; ?>	

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
<?php require '../footer/footer.php'; ?>
</html>    