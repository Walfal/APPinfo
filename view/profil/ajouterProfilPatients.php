<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';

$matricule = $nom = $prenom = $sexe = $num_ss = $adresseRue = $adresseVille = $codePostal= $telephone = $mail = $poids = $taille = $dateDeNaissance = $password = $role = "";

if(!empty($_POST)) {
    $matricule = checkInput($_POST['matricule']);
    $nom = checkInput($_POST['nom']);
    $prenom = checkInput($_POST['prenom']);
    $sexe = checkInput($_POST['sexe']);
    $mail = checkInput($_POST['mail']);
    $num_ss = checkInput($_POST['num_ss']);
    $adresseRue = checkInput($_POST['adresseRue']);
    $adresseVille = checkInput($_POST['adresseVille']);
    $codePostal = checkInput($_POST['codePostal']);
    $telephone = checkInput($_POST['telephone']);
    $poids = checkInput($_POST['poids']);
    $taille = checkInput($_POST['taille']);
    $dateDeNaissance = checkInput($_POST['dateDeNaissance']);
    $password = checkInput($_POST['password']);
    $role = checkInput($_POST['role']);
    $photo = 0;
    $medecin = (checkInput($_POST['medecin']) != 0) ? checkInput($_POST['medecin']) : 0;

    $statement = $BDD -> prepare("INSERT INTO Personne (matricule, nom, prenom, sexe, mail, `numero de securite social`, adresse, ville, `code postal`, telephone, poids, taille, `date de naissance`, password, role, photo, medecin) values (?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $statement -> execute(array($matricule, $nom, $prenom, $sexe, $mail, $num_ss, $adresseRue, $adresseVille, $codePostal, $telephone, $poids, $taille, $dateDeNaissance, $password, $role, $photo, $medecin));
    header("location: ../../view/profil/profilPatients.php");

}?>

<link href="ajouterProfilPatients.css" rel="stylesheet" />
<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2>Ajouter un utilisateur</h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->

<div class="contenu">
    <form class="formulaire" action="ajouterProfilPatients.php" role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Matricule">Matricule* :</label>
            <input type="text"  id=matricule name="matricule" value="<?php echo $matricule; ?>" required>
        </div>
        <div class="form-group">
            <label for="Nom">Nom* :</label>
            <input type="text"  id=Nom name="nom" value="<?php echo $nom; ?>" required>
        </div>
        <div class="form-group">
            <label for="Prenom">Prénom* :</label>
            <input type="text" id=Prenom name="prenom" value="<?php echo $prenom; ?>" required>
        </div>
		<div class="form-group">
			<Label> Sexe : </Label>
				<select name="sexe" class="champ">
				<option value="0" selected="selected"> - </option>
				<option value="1"> Homme </option>
				<option value="2"> Femme </option>
				</select>
		</div><br>
        <div class="form-group">
            <label for="Mail">Mail* :</label>
            <input type="email" id=Mail name="mail" value="<?php echo $mail; ?>" required>
        </div>
        <div class="form-group">
            <label for="Numss">Numéro de sécurité social* :</label>
            <input type="text" id=Numss name="num_ss" value="<?php echo $num_ss; ?>" required>
        </div>
        <div class="form-group">
            <label for="Adresse">Adresse (numéro et voie)* :</label>
            <input type="text"  id=Adresse name="adresseRue" value="<?php echo $adresseRue; ?>" required>
        </div>
        <div class="form-group">
            <label for="Adresse">ville* :</label>
            <input type="text"  id=Adresse name="adresseVille" value="<?php echo $adresseVille; ?>" required>
        </div>
        <div class="form-group">
            <label for="CodePostale">Code postal* :</label>
            <input type="text" id=CodePostal name="codePostal" value="<?php echo $codePostal; ?>" required>
        </div>
        <div class="form-group">
            <label for="Telephone">Téléphone* :</label>
            <input type="tel" id=Telephone name="telephone" value="<?php echo $telephone; ?>" required>
        </div>
        <div class="form-group">
            <label for="Poids">Poids* :</label>
            <input type="number" id=Poids name="poids" value="<?php echo $poids; ?>" required>
        </div>
        <div class="form-group">
            <label for="Taille">Taille* :</label>
            <input type="number" id=Taille name="taille" value="<?php echo $taille; ?>" required>
        </div>
        <div class="form-group">
            <label for="dateDeNaissance">Date de naissance* :</label>
            <input type="date" id=dateDeNaissance name="dateDeNaissance" value="<?php echo $dateDeNaissance; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe* :</label>
            <input type="password" id=password name="password" value="<?php echo $password; ?>" required>
        </div>
        <div class="form-group">
            <label for="role">Rôle* :</label>
            <input type="text" id=role name="role" value="<?php echo $role; ?>" required>
        </div>
        <div class="form-group">
            <label for="medecin">Medecin* :</label>
            <input type="number" id=medecin name="medecin" value="<?php echo $medecin; ?>" required>
        </div>
        <br>
        <div class="actions">
            <div class="submit">
                <button type="submit">+ Ajouter</button>
            </div>
            <div class="retour">
                <a href="profilPatients.php" class="retour">Retour</a>
            </div>
        </div>
    </form>
</div>

<?php require_once '../headerFooter/footer.php';?>