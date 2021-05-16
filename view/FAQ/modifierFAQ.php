<?php
$title = 'Gérer la FAQ';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require_once '../../model/BDD/connexionBDD.php';
require_once '../../model/FAQ/modelFaq.php';

if(isset($_GET['id'])){
    $valeur = recuperationUneDonnee($BDD,'FAQ', 'idFAQ', $_GET['id']);
    $themePasModif = $valeur['theme'];
    $questionPasModif = $valeur['question'];
    $reponsePasModif = $valeur['reponse'];     
}



if(isset($_POST['submit'])){
    if(!empty($_POST['question']) && !empty($_POST['reponse']) && !empty($_POST['theme'])){
        $question = checkInput($_POST['question']);
        $reponse = checkInput($_POST['reponse']);
        $theme = checkInput($_POST['theme']);
        $question = $BDD -> quote($question);
        $reponse = $BDD -> quote($reponse);
        $theme = $BDD -> quote($theme);
        
        $modif = modifierQuestion($BDD,$theme,$question,$reponse,$_GET['id']);
        if($modif != 1){
            echo "<script type=\"text/javascript\"> alert('Erreur Insertion')</script>";
        }else{
            header('Location: FAQ.php');
        }
        
    }
}
?>

<link href="modifierFAQ.css" rel="stylesheet" />

<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2>Modifier une question</h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->

<div class="contenu">
    <form class="formulaire"  role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="theme">Theme :</label>
            <input type="text"  id="theme" name="theme" value="<?= $themePasModif?>">
        </div>
        <div class="form-group">
            <label for="question">Question :</label>
            <input type="text" id="question" name="question" value="<?= $questionPasModif?>">
        </div>
        <div class="form-group">
            <label for="reponse">Réponse :</label>
            <textarea id="reponse" name="reponse"><?= $reponsePasModif?></textarea>
        </div>
        <br>
        <div class="actions">
            <div class="modify">
                <button type="submit" name="submit">Modifier</button>
            </div>
            <div class="retour">
                <a href="FAQ.php" class="retour">Retour</a>
            </div>
        </div>
    </form>
    
</div>

<?php require_once '../headerFooter/footer.php';