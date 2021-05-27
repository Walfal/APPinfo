

<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';
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
        <h2><?php echo $ajouter1 ?></h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->


<form class="formulaire" action="../../view/profil/ajouterProfilPatients.php" role="form" method="post" enctype="multipart/form-data">
    <div class="contenu">
        <div class="form-group">
            <li><label for="Matricule"><?php echo $matricule1 ?></label> <br>
            <input class="champ" type="text"  id=Matricule2 name="matricule2" value=" <?php echo $matricule; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Nom"><?php echo $nom1 ?></label><br>
            <input type="text" class="champ" id=Nom name="nom" value=" <?php echo $nom; ?>" required></li>    
            <li class="espacement"><label for="Prenom"><?php echo $prenom1 ?></label><br>
            <input type="text" class="champ" id=Prenom name="prenom" value=" <?php echo $prenom; ?>" required ></li>    
        </div>		
        <div class="form-group">
            <li><label for="sexe"> <?php echo $sexe1 ?> </label><br>
            <select name="sexe" class="champ">
                <option value="0" selected="selected"> - </option>
				<option value="1"> <?php echo $homme1 ?> </option>
				<option value="2"> <?php echo $femme1 ?> </option>
            </select></li>
        </div>    
        <div class="form-group">
            <li><label for="Numss"><?php echo $NSS1 ?></label> <br>
            <input type="text"  class="champ" id=Numss name="num_ss" value="<?php echo $num_ss; ?>" required></li>
        </div>	 		
        <div class="form-group">
            <li><label for="AdresseRue"><?php echo $adresse1 ?></label><br>
            <input type="text" class="champ" id=AdresseRue name="adresseRue" value=" <?php echo $adresseRue; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="AdresseVille"><?php echo $ville1 ?></label><br>
            <input type="text" class="champ" id=AdresseVille name="adresseVille" value=" <?php echo $adresseVille; ?>" required></li>
            <li class="espacement"><label for="CodePostale"><?php echo $codePostal1 ?></label><br>
            <input type="text" class="champ" id=CodePostal name="codePostal" value=" <?php echo $codePostal; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Telephone"><?php echo $tel1 ?></label><br>
            <input type="tel" class="champ" id=Telephone name="telephone" value=" <?php echo $telephone; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Mail"><?php echo $mail1 ?></label><br>
            <input type="email" class="champ" id=Mail name="mail" value=" <?php echo $mail; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Motdepasse"><?php echo $mdp1 ?></label><br>
            <input type="password"class="champ" id=Motdepasse name="motDePasse" value="<?php echo $motDePasse; ?>"required></li>
        </div>
        <div class="form-group">
            <li><label for="Poids"><?php echo $poids1 ?></label><br>
            <input type="text"  class="champ" id=Poids name="poids" value=" <?php echo $poids; ?>" required></li>
            <li class="espacement"><label for="Taille"><?php echo $taille1 ?></label><br>
            <input type="text" class="champ" id=Taille name="taille" value=" <?php echo $taille; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="dateDeNaissance"><?php echo $dateNaissance1 ?></label><br>
            <input type="text" class="champ" id=DateDeNaissance name="dateDeNaissance" value=" <?php echo $dateDeNaissance; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Role"><?php echo $role1 ?></label><br>
            <input type="text" class="champ" id=Role name="role" value=" <?php echo $role; ?>" required></li>
        </div>
        <div class="form-group">
            <li><label for="Medecin"><?php echo $medecin1 ?></label><br>
            <input type="text" class="champ" id=Medecin name="medecin" value=" <?php echo $medecin; ?>" required></li>
        </div>
        <div class="actions">
            <div class="submit">
                <button type="submit"><?php echo $ajouter2 ?></button>
            </div>
            <div class="retour">
                <a href="profilPatients.php" class="retour"><?php echo $retour1 ?></a>
            </div>
        </div>
    </div>
</form>


<?php require_once '../headerFooter/footer.php';?>