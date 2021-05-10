
<?php 
$title = 'Compte administrateur';
//require_once '../headerFooter/header.php';
require_once '../../model/BDD/connexionBDD.php';?>
<link href="recherchePatient.css" rel="stylesheet" />
<script> src="js/jquery.typeahead.min.js"</script>

		<div class = "hautPage">
			<p class="titrePage"><b>Profils patients</b></p>
			<img class="imgRecherche" src="../images/icons/recherchePatient.svg" alt="icone profil patient">
		</div>


		<div class="recherche">
			<p class="indication"><b>Trouvez votre patient en trois clics !</b></p>
		<form class="aRemplir">
			<input type="text" class="nomPrenom" name="nomPrenom" placeholder="Nom et Prénom du patient">

			<script src='rechercheNom.js'>
			<?php $requete = recuperationToutesDonnees($BDD, $colonne, $table);
			var_dump($requete);?>
			//$(".nomPrenom").typeahead(); JSON({
			//	name : 'nom'
				//local : 
		//	});
			</script>
			<p class="ou"><b>OU</b></p>
			<input type="text" class="numPatient" name="numPatient" placeholder="N° du patient">
			<img class = "localisation" src="../images/icons/localisation.svg" alt="">
			<input type="text" class="adresse" name="adresse" placeholder="Code postale">
			<input type="submit" class="valider" name="valider" value="Valider">
		</form>
		</div>

<?php require '../headerFooter/footer.php' ?>
