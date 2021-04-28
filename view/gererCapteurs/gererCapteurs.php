<?php 
$title = 'Gestion des capteurs';
require '../headerFooter/header.php'; ?>

<link rel="stylesheet" href="gererCapteurs.css">

<div class = "hautPage">
	<p class = "titrePage"><b>Gestion des tests et des capteurs</b></p>
	<img class= "imIcone" src="../images/icons/gestioncapteur.svg" alt="icone gestion capteur">
</div>

<div class="main">
	<div class="blocCapteur">
		<img  class ="icon temperature" src="../images/divers/Temperature.png" alt="capteur Température">
		<div class="capteur capteur1">
			<p class = "nomCapteur">Capteur de température : </p><br>
			<p class="miseJour">Dernière mise à jour : JJ/MM/AAAA</p>
			<input  class="modifier" type="submit" name="modifier" id="modifier" value="Modifier">
			<input  class="supprimer" type="submit" name="supprimer" id="supprimer" value="Supprimer">
		</div>
	</div>

	<div class="blocCapteur">
		<img class ="icon tonalite" src="../images/divers/hautParleur.png" alt="capteur de tonalité">
		<div class="capteur capteur2">
			<p class = "nomCapteur">Capteur de tonalité :</p><br>
			<p class="miseJour">Dernière mise à jour : JJ/MM/AAAA</p>
			<input  class="modifier" type="submit" name="modifier" id="modifier" value="Modifier">
			<input  class="supprimer" type="submit" name="supprimer" id="supprimer" value="Supprimer">
		</div>
	</div>

	<div class="blocCapteur">
		<img class ="icon frequenceCardiaque" src="../images/divers/frequenceCardiaque.jpg" alt="capteur fréquence cardiaque">
		<div class="capteur capteur3">
			<p class = "nomCapteur">Capteur de fréquence cardiaque : </p><br>
			<p class="miseJour">Dernière mise à jour : JJ/MM/AAAA</p>
			<input  class="modifier" type="submit" name="modifier" id="modifier" value="Modifier">
			<input  class="supprimer" type="submit" name="supprimer" id="supprimer" value="Supprimer">
		</div>
	</div>

	<div class="blocCapteur">
		<img class="icon tempsReaction" src="../images/divers/tempsReaction.jpg" alt="capteur / bouton mesure du temps de réaction">
		<div class="capteur capteur4">
			<p class = "nomCapteur">Capteur du temps de réaction : </p><br>
			<p class = "miseJour">Dernière mise à Jour : JJ/MM/AAAA</p>
			<input  class="modifier" type="submit" name="modifier" id="modifier" value="Modifier">
			<input  class="supprimer" type="submit" name="supprimer" id="supprimer" value="Supprimer">
		</div>
	</div>
</div>

<?php require '../headerFooter/footer.php'; ?>
