
<?php
$title = 'Gérer la FAQ';
require_once '../headerFooter/header.php';
require_once '../../controller/traduction/FAQ/gererFAQ.php';
require_once '../../controller/fonctions.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require_once '../../controller/traduction/FAQ/FAQ.php';
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
        
        $ajout = ajouterQuestion($BDD, $FAQTrad, $theme,$question, $reponse);
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
        <h2><?= $ajouter ?></h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->
<div class="contenu">
    <form class="formulaire"  role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="theme"><?= $theme ?></label>
                    
            <input type="text"  id="theme" name="theme" list="themes">
            <!-- <datalist id="themes">
                <select name="theme">
                    <option selected value="0"> - </option>
                    <option selected value="1"> k </option>
                    <?php /*
                        $statement =  recuperationTheme($BDD, $FAQTrad);
                        foreach($statement as $valeur){
                            echo '<option value="' . $valeur['theme'] . '"></option>';
                        }*/
                    ?>
                </select>
            </datalist> -->
        </div>
        <div class="form-group">
            <label for="question"><?= $question ?> :</label>
            <input type="text" id="question" name="question" >
        </div>
        <div class="form-group">
            <label for="reponse"><?= $reponse ?> :</label>
            <textarea id="reponse" name="reponse" ></textarea>
        </div>
        <br>
        <div class="actions">
            <div class="modify">
                <button type="submit" name="submit"><?= $ajouter2 ?></button>
            </div>
            <div class="retour">
                <a href="FAQ.php" class="retour"><?= $retour ?></a>
            </div>
        </div>
    </form>
    
</div>

<?php require_once '../headerFooter/footer.php';