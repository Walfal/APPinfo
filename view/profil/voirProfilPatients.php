<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';

if(!empty($_GET['id'])){
	$matricule = checkInput($_GET['id']);
}

$valeur = recuperationUneDonnee($BDD, 'Personne', 'matricule', $matricule);

//pour vérifier donnée qui vient de l'extérieur
function checkInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
<link href="voirProfilPatients.css" rel="stylesheet" />

        <!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
        <div class="banniere">
            <div class="content">
                <h2>Profil de <?='' . $valeur['nom'] .' ' .$valeur['prenom']; ?> </h2> 
            </div>
            <div class="image">
                <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
            </div>
        </div>
		
		<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->
       
		<div class="contenu">
			<form>
				<div class="form-group">
					<label for="Matricule">Matricule :</label>
					<input type="text" value=" <?= ''.$valeur['matricule']; ?>" id=Matricule readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Nom">Nom :</label>
					<input type="text" value=" <?= ''.$valeur['nom']; ?>" id=Nom readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Prenom">Prénom :</label>
					<input type="text" value=" <?= ''.$valeur['prenom']; ?>" id=Prenom readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Sexe">Sexe :</label>
					<input type="text" value="<?= ($valeur['sexe'] == 0) ? 'Non précisé' : ($valeur['sexe'] == 1) ? 'Homme' : 'Femme'; ?>" id=Sexe readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Numss">Numéro de sécurité sociale :</label>
					<input type="text" value=" <?= ''.$valeur['numero de securite social']; ?>" id=Numss readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Adresse">Adresse (numéro et voie) :</label>
					<input type="text" value=" <?= ''.$valeur['adresse (numero et voie)']; ?>" id=Adresse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Adresse">Adresse (ville) :</label>
					<input type="text" value=" <?= ''.$valeur['adresse (ville)']; ?>" id=Adresse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="CodePostale">Code postal :</label>
					<input type="text" value=" <?= ''.$valeur['adresse (code postal)']; ?>" id=CodePostal readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Telephone">Téléphone :</label>
					<input type="tel" value=" <?= ''.$valeur['telephone']; ?>" id=Telephone readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Mail">Mail :</label>
					<input type="email" value=" <?= ''.$valeur['mail']; ?>" id=Mail readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Poids">Poids :</label>
					<input type="text" value=" <?= ''.$valeur['poids (kg)']; ?>" id=Poids readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Taille">Taille :</label>
					<input type="text" value=" <?= ''.$valeur['taille (cm)']; ?>" id=Taille readonly="readonly">
				</div>
				<div class="form-group">
					<label for="dateDeNaissance">Date de naissance :</label>
					<input type="text" value=" <?= ''.$valeur['date de naissance']; ?>" id=dateDeNaissance readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Role">Rôle :</label>
					<input type="text" value=" <?= ''.$valeur['role']; ?>" id=Role readonly="readonly">
				</div>
				<div class="retour">
					<a href="../../view/profil/profilPatients.php" class="retour">Retour</a>
				</div>
			</form>
		</div>

<?php require_once '../headerFooter/footer.php';?>