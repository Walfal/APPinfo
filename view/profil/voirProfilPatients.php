<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if($_SESSION['matricule'] != 0):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';

if(!empty($_GET['id'])){
	$idUtilisateur = checkInput($_GET['id']);
}

$statement = $BDD->prepare('SELECT * FROM test.utilisateurs WHERE id_Utilisateur =?');
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
					<input type="text" value=" <?php echo ''.$valeur['num_ss']; ?>" id=Numss readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Adresse">Adresse :</label>
					<input type="text" value=" <?php echo ''.$valeur['adresse']; ?>" id=Adresse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="CodePostale">Code postal :</label>
					<input type="text" value=" <?php echo ''.$valeur['codePostal']; ?>" id=CodePostal readonly="readonly">
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
					<input type="text" value=" <?php echo ''.$valeur['poids']; ?>" id=Poids readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Taille">Taille :</label>
					<input type="text" value=" <?php echo ''.$valeur['taille']; ?>" id=Taille readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Age">Age :</label>
					<input type="text" value=" <?php echo ''.$valeur['age']; ?>" id=Age readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Motdepasse">Mot de passe :</label>
					<input type="password" value=" <?php echo ''.$valeur['motDePasse']; ?>" id=Motdepasse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Role">Rôle :</label>
					<input type="text" value=" <?php echo ''.$valeur['rol']; ?>" id=Role readonly="readonly">
				</div>
				<div class="retour">
					<a href="../../view/profil/profilPatients.php" class="retour">Retour</a>
				</div>
			</form>
		</div>

<?php require_once '../headerFooter/footer.php';?>