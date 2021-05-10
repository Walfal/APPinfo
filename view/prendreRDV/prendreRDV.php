<?php 
$title = 'prendre un rendez-vous';
require '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;
?>

		<div class = "hautPage">
			<p class="titrePage"><b>Prendre rendez-vous</b></p>
			<img class="imgCalendrier" src="../images/icons/calendrier.svg" alt="icone profil patient">
		</div>


		<div class="recherche">
			<p class="indication"><b>Trouvez un centre et prenez rendez-vous en trois clics !</b></p>
			<form class="aRemplir">
				<input type="text" class="nomCentre" name="nomCentre" placeholder="Nom du centre">
				<p class="ou"><b>OU</b></p>
				<input type="text" class="typeTest" name="typeTest" placeholder="Type de test que vous souhaitez">
				<img class = "localisation" src="../images/icons/lieu.png" alt="">
				<input type="text" class="adresse" name="adresse" placeholder="Code postale">
				<input type="submit" class="valider" name="valider" value="Valider">
			</form>
		</div>

<?php require_once '../headerFooter/footer.php';
	