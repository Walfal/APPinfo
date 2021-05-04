<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] != 0):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';

if(!empty($_GET['id'])){
	$idUtilisateur = checkInput($_GET['id']);
}

$statement = $BDD->prepare('SELECT * FROM personne WHERE matricule =?');
$statement->execute(array($idUtilisateur));
$valeur = $statement->fetch();

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
                <h2>Profil de <?php echo'' . $valeur['nom'] .' ' .$valeur['prenom']; ?> </h2> 
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
					<input type="text" value=" <?php echo ''.$valeur['matricule']; ?>" id=Matricule readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Nom">Nom :</label>
					<input type="text" value=" <?php echo ''.$valeur['nom']; ?>" id=Nom readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Prenom">Prénom :</label>
					<input type="text" value=" <?php echo ''.$valeur['prenom']; ?>" id=Prenom readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Sexe">Sexe :</label>
					<input type="text" value=" <?php echo ''.$valeur['sexe']; ?>" id=Sexe readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Numss">Numéro de sécurité sociale :</label>
					<input type="text" value=" <?php echo ''.$valeur['numero de securite social']; ?>" id=Numss readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Adresse">Adresse :</label>
					<input type="text" value=" <?php echo ''.$valeur['adresse (ville)']. ''.$valeur['adresse (numero et voie)']; ?>" id=Adresse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="CodePostale">Code postal :</label>
					<input type="text" value=" <?php echo ''.$valeur['adresse (code postal)']; ?>" id=CodePostal readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Telephone">Téléphone :</label>
					<input type="tel" value=" <?php echo ''.$valeur['telephone']; ?>" id=Telephone readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Mail">Mail :</label>
					<input type="email" value=" <?php echo ''.$valeur['mail']; ?>" id=Mail readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Poids">Poids :</label>
					<input type="text" value=" <?php echo ''.$valeur['poids (kg)']; ?>" id=Poids readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Taille">Taille :</label>
					<input type="text" value=" <?php echo ''.$valeur['taille (cm)']; ?>" id=Taille readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Age">Date de naissance :</label>
					<input type="text" value=" <?php echo ''.$valeur['date de naissance']; ?>" id=Age readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Motdepasse">Mot de passe :</label>
					<input type="password" value=" <?php echo ''.$valeur['mot de passe']; ?>" id=Motdepasse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Role">Rôle :</label>
					<input type="text" value=" <?php echo ''.$valeur['role']; ?>" id=Role readonly="readonly">
				</div>
				<div class="retour">
					<a href="profilPatients.php" class="retour">Retour</a>
				</div>
			</form>
		</div>

<?php require_once '../headerFooter/footer.php';?>