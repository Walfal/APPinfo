

<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';
require '../../controler/traduction/profil/ajouterProfilPatientEN.php';
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
    $password = password_hash(checkInput($_POST['password']), PASSWORD_DEFAULT);
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
        <h2><?= $ajouter1 ?></h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->

<div class="contenu">
    <form class="formulaire" action="ajouterProfilPatients.php" role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Matricule"><?= $matricule1 ?></label>
            <input type="text"  id=matricule name="matricule" value="<?= $matricule; ?>" required>
        </div>
        <div class="form-group">
            <label for="Nom"><?= $nom1 ?></label>
            <input type="text"  id=Nom name="nom" value="<?= $nom; ?>" required>
        </div>
        <div class="form-group">
            <label for="Prenom"><?= $prenom1 ?></label>
            <input type="text" id=Prenom name="prenom" value="<?= $prenom; ?>" required>
        </div>
		<div class="form-group">
			<Label> <?= $sexe1 ?> </Label>
				<select name="sexe" class="champ">
				<option value="0" selected="selected"> - </option>
				<option value="1"> <?= $homme1 ?> </option>
				<option value="2"> <?= $femme1 ?> </option>
				</select>
		</div><br>
        <div class="form-group">
            <label for="Mail"><?= $mail1 ?></label>
            <input type="email" id=Mail name="mail" value="<?= $mail; ?>" required>
        </div>
        <div class="form-group">
            <label for="Numss"><?= $NSS1 ?></label>
            <input type="text" id=Numss name="num_ss" value="<?= $num_ss; ?>" required>
        </div>
        <div class="form-group">
            <label for="Adresse"><?= $adresse1 ?></label>
            <input type="text"  id=Adresse name="adresseRue" value="<?= $adresseRue; ?>" required>
        </div>
        <div class="form-group">
            <label for="Adresse"><?= $ville1 ?></label>
            <input type="text"  id=Adresse name="adresseVille" value="<?= $adresseVille; ?>" required>
        </div>
        <div class="form-group">
            <label for="CodePostale"><?= $codePostal1 ?></label>
            <input type="text" id=CodePostal name="codePostal" value="<?= $codePostal; ?>" required>
        </div>
        <div class="form-group">
            <label for="Telephone"><?= $tel1 ?></label>
            <input type="tel" id=Telephone name="telephone" value="<?= $telephone; ?>" required>
        </div>
        <div class="form-group">
            <label for="Poids"><?= $poids1 ?></label>
            <input type="number" id=Poids name="poids" value="<?= $poids; ?>" required>
        </div>
        <div class="form-group">
            <label for="Taille"><?= $taille1 ?></label>
            <input type="number" id=Tsaille name="taille" value="<?= $taille; ?>" required>
        </div>
        <div class="form-group">
            <label for="dateDeNaissance"><?= $dateNaissance1 ?></label>
            <input type="date" id=dateDeNaissance name="dateDeNaissance" value="<?= $dateDeNaissance; ?>" required>
        </div>
        <div class="form-group">
            <label for="password"><?= $mdp1 ?></label>
            <input type="password" id=password name="password" value="<?= $password; ?>" required>
        </div>
        <div class="form-group">
            <label for="role"><?= $role1 ?></label>
            <input type="text" id=role name="role" value="<?= $role; ?>" required>
        </div>
        <div class="form-group">
            <label for="medecin"><?= $medecin1 ?></label>
            <input type="number" id=medecin name="medecin" value="<?= $medecin; ?>" required>
        </div>
        <br>
        <div class="actions">
            <div class="submit">
                <button type="submit"><?= $ajouter2 ?></button>
            </div>
            <div class="retour">
                <a href="profilPatients.php" class="retour"><?= $retour1 ?></a>
            </div>
        </div>
    </form>
</div>

<?php require_once '../headerFooter/footer.php';?>