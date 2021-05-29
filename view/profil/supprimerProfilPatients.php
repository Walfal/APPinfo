<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';
require_once '../../controller/fonctions.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';

if(!empty($_GET['id'])){
    $id = checkInput($_GET['id']);
}
if(!empty($_POST)){
    $id = checkInput($_POST['id']);
    $statement = $BDD -> prepare("DELETE FROM Personne WHERE matricule = ?");
    $statement -> execute(array($id));
    header("location: profilPatients.php");
}
require_once '../../controller/traduction/profil/supprimerProfilPatients.php';

$patient = recuperationUneDonnee($BDD, 'Personne', 'matricule', $_GET['id']);
?>
<link href="supprimerProfilPatients.css" rel="stylesheet" />
<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2><?= $titre ?></h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->

<div class="contenu">
    <form class="formulaire" action="supprimerProfilPatients.php" role="form" method="post">
    <input type="hidden" name="id" value="<?= $id; ?>"/>    
    <p class="alert"><?= $question ?></p>
    <p class="alert"><br><?= $patient['prenom'] . ' ' . $patient['nom'] ?></p>
    <div class="actions">
            <div class="submit">
                <button type="submit" class="bouton"><?= $oui ?></button>
            </div>
            <div class="retour">
                <a href="profilPatients.php" class="retour"><?= $non ?></a>
            </div>
        </div>
    </form>
</div>

<?php require_once '../headerFooter/footer.php';?>