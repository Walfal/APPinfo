

<?php
	$title = 'Contactez Nous';
	require_once '../headerFooter/header.php';
	$matriculeTest = 1;
	$matriculeTest = $_SESSION['matricule'];
	require_once '../../model/BDD/connexionBDD.php';
	require '../../controler/traduction/messagerie/contactezNousTrad.php';
	
?>

<link href="contactezNous.css" rel="stylesheet" />
<div class="bandehaut">
	<h1 class="titrePage" style="line-height: 100%"><?= $contact ?></h1>
	<i class="sousTitre"><?= $aide ?></i>
</div>

<form class="formulaire" method="post" id="Envoyer">
	<textarea
		class="boiteTitre"
		type="text"
		name="titre"
		id="titre"
		placeholder="<?= $theme ?>"
	></textarea>
	<textarea
		class="boiteMessage"
		type="text"
		name="message"
		id="message"
		placeholder="<?= $message ?>"
	></textarea>
	<br />
	<input href="contactezNous.php" class="boiteEnvoyer" type="submit" name="Envoyer" value="<?= $envoyer ?>" />
</form>

<?php require_once '../headerFooter/footer.php'; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function (){

		$('#Envoyer').on("submit", function(e){
			e.preventDefault()

			var message  = document.getElementById('message').value
			var titre  = document.getElementById('titre').value
			var id = <?= $matriculeTest ?>;
			
			document.getElementById('message').value = ''
			document.getElementById('titre').value = ''
			/* if(message != '' && titre != ''){ */
				$.ajax({
					url : '../../model/Messagerie/envoyerMessage.php',
					method : 'post',
					dataType : 'html',
					data : {titre: titre, message: message, id : id},
					success : function(data){
						$('#affMessage').append(data)
						window.location.replace("contactezNous.php");
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