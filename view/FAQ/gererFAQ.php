
<?php


$title = 'Gérer la FAQ';
require_once '../headerFooter/header.php';
require '../../controler/traduction/FAQ/gererFAQTrad.php';
if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require_once '../../model/BDD/connexionBDD.php';
require_once '../../model/FAQ/modelFaq.php';

if(isset($_POST['submit'])){
    if(!empty($_POST['question']) && !empty($_POST['reponse']) && !empty($_POST['theme'])){
        $question = checkInput($_POST['question']);
        $reponse = checkInput($_POST['reponse']);
        $theme = checkInput($_POST['theme']);
        $question = $BDD -> quote($question);
        $reponse = $BDD -> quote($reponse);
        $theme = $BDD -> quote($theme);
        
        $ajout = ajouterQuestion($BDD,$theme,$question, $reponse);
        if($ajout != 1){
            echo "<script type=\"text/javascript\"> alert('Erreur Insertion')</script>";
        }else{
            header('Location: FAQ.php');
        }
        
    }
}
?>

<link href="gererFAQ.css" rel="stylesheet" />

<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2><?php echo $ajouter ?></h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->

<div class="contenu">
    <form class="formulaire"  role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="theme"><?php echo $theme ?>:</label>
            <input type="text"  id="theme" name="theme">
        </div>
        <div class="form-group">
            <label for="question"><?php echo $question ?> :</label>
            <input type="text" id="question" name="question" >
        </div>
        <div class="form-group">
            <label for="reponse"><?php echo $reponse ?> :</label>
            <textarea id="reponse" name="reponse" ></textarea>
        </div>
        <br>
        <div class="actions">
            <div class="modify">
                <button type="submit" name="submit"><?php echo $ajouter2 ?></button>
            </div>
            <div class="retour">
                <a href="FAQ.php" class="retour"><?php echo $retour ?></a>
            </div>
        </div>
    </form>
    
</div>

<?php require_once '../headerFooter/footer.php';