<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

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
require '../../controller/traduction/profil/supprimerProfilPatientTrad.php';

?>
<link href="supprimerProfilPatients.css" rel="stylesheet" />
<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2><?php echo $titre ?></h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->

<div class="contenu">
    <form class="formulaire" action="supprimerProfilPatients.php" role="form" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>    
    <p class="alert"><?php echo $question ?></p>
    <div class="actions">
            <div class="submit">
                <button type="submit" class="bouton"><?php echo $oui ?></button>
            </div>
            <div class="retour">
                <a href="profilPatients.php" class="retour"><?php echo $non ?></a>
            </div>
        </div>
    </form>
</div>

<?php require_once '../headerFooter/footer.php';?>