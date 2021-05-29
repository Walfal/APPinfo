

<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';
require_once '../../controller/fonctions.php';
require '../../controller/traduction/profil/ajouterProfilPatientEN.php';
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


<form class="formulaire" action="../../view/profil/ajouterProfilPatients.php" role="form" method="post" enctype="multipart/form-data">
    <div class="contenu">
        <div class="form-group">
            <li><label for="Matricule"><?= $matricule1 ?></label> <br>
            <input class="champ" type="text"  id=Matricule2 name="matricule2" value=" <?= $matricule; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Nom"><?= $nom1 ?></label><br>
            <input type="text" class="champ" id=Nom name="nom" value=" <?= $nom; ?>" required></li>    
            <li class="espacement"><label for="Prenom"><?= $prenom1 ?></label><br>
            <input type="text" class="champ" id=Prenom name="prenom" value=" <?= $prenom; ?>" required ></li>    
        </div>		
        <div class="form-group">
            <li><label for="sexe"> <?= $sexe1 ?> </label><br>
            <select name="sexe" class="champ">
                <option value="0" selected="selected"> - </option>
				<option value="1"> <?= $homme1 ?> </option>
				<option value="2"> <?= $femme1 ?> </option>
            </select></li>
        </div>    
        <div class="form-group">
            <li><label for="Numss"><?= $NSS1 ?></label> <br>
            <input type="text"  class="champ" id=Numss name="num_ss" value="<?= $num_ss; ?>" required></li>
        </div>	 		
        <div class="form-group">
            <li><label for="AdresseRue"><?= $adresse1 ?></label><br>
            <input type="text" class="champ" id=AdresseRue name="adresseRue" value=" <?= $adresseRue; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="AdresseVille"><?= $ville1 ?></label><br>
            <input type="text" class="champ" id=AdresseVille name="adresseVille" value=" <?= $adresseVille; ?>" required></li>
            <li class="espacement"><label for="CodePostale"><?= $codePostal1 ?></label><br>
            <input type="text" class="champ" id=CodePostal name="codePostal" value=" <?= $codePostal; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Telephone"><?= $tel1 ?></label><br>
            <input type="tel" class="champ" id=Telephone name="telephone" value=" <?= $telephone; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Mail"><?= $mail1 ?></label><br>
            <input type="email" class="champ" id=Mail name="mail" value=" <?= $mail; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Motdepasse"><?= $mdp1 ?></label><br>
            <input type="password"class="champ" id=Motdepasse name="motDePasse" value="<?= $motDePasse; ?>"required></li>
        </div>
        <div class="form-group">
            <li><label for="Poids"><?= $poids1 ?></label><br>
            <input type="text"  class="champ" id=Poids name="poids" value=" <?= $poids; ?>" required></li>
            <li class="espacement"><label for="Taille"><?= $taille1 ?></label><br>
            <input type="text" class="champ" id=Taille name="taille" value=" <?= $taille; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="dateDeNaissance"><?= $dateNaissance1 ?></label><br>
            <input type="text" class="champ" id=DateDeNaissance name="dateDeNaissance" value=" <?= $dateDeNaissance; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Role"><?= $role1 ?></label><br>
            <input type="text" class="champ" id=Role name="role" value=" <?= $role; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Medecin"><?= $medecin1 ?></label><br>
            <input type="text" class="champ" id=Medecin name="medecin" value=" <?= $medecin; ?>" required></li>
        </div>
        <div class="actions">
            <div class="submit">
                <button type="submit"><?= $ajouter2 ?></button>
            </div>
            <div class="retour">
                <a href="profilPatients.php" class="retour"><?= $retour1 ?></a>
            </div>
        </div>
    </div>
</form>


<?php require_once '../headerFooter/footer.php';?>