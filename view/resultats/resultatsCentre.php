<?php
$title = "Mes résultats - Centre sélectionné";

require_once '../../view/headerFooter/header.php';
require_once '../../model/BDD/connexionBDD.php';
require '../../controller/traduction/resultats/resultats.php';

if(!isset($_SESSION['matricule'])):
    header('Location: ../login/login.php');
endif;

$matricule = (isset($_GET['id']) && $_SESSION['matricule'] < 20) ? $_GET['id'] : $_SESSION['matricule'];
$patient = recuperationUneDonnee($BDD, 'Personne', 'matricule', $matricule);


if(isset($_GET['id'])):
    $id = '?id=' . $_GET['id'];
else:
    $id = '';
endif;
?>    
<link href="resultatsCentre.css" rel="stylesheet">
<!-- ------------------------------------------------------------ PRESENTATION---------------------------------------------------------------------------------- -->

<section class="sections home text-center">
    <section class="intro">
        <div class="fond"></div>
        <div class="introDiv">
            <h1><?= $centre ?></h1>
            <p><?= $centreTest ?></p>
            <div id="etoile">
                <img class="imageEtoile" src="../images/icons/etoile.png">
                <img class="imageEtoile" src="../images/icons/etoile.png">
                <img class="imageEtoile" src="../images/icons/etoile.png">
                <img class="imageEtoile" src="../images/icons/etoile.png">
            </div>
            <div class="lieu">
                <div class="centre">
                    <h2>Paris</h2>
                    <p><?= $adresse ?> <br> <u>01 22 34 45 22</u></p>
                </div>
                <div class="centre">
                    <h2>Lyon</h2>
                    <p><?= $adresse ?> <br> <u>04 56 71 23 44</u></p>
                </div>
            </div>
        </div>
            
        
    </section>
    <section class="milieu">
        <section class="test">
            <div>
                <h3></h3>
                <div class="resultat">
                    <img src="data:image/png;base64,<?php echo(base64_encode($imageData)); ?>"/>
                    <img src="../../controller/resultats/graphResultats.php<?= $id  ?>&dummy=\'.now()."/>
                </div>
                
                <div class="detail">
                    <h6><?= $detail ?></h6>
                    
                    <p><?= $detailTest1 ?></p>
                </div>
            </div>
            <div>
                <h3> </h3>
                <div class="resultat">
                    <img  class="bar" src="../../controller/resultats/graphResultats2.php<?= $id ?>&dummy=\'.now().">
                    <figcaption><?= $resultat ?></figcaption>
                </div>
                
                <div class="detail">
                    <h6><?= $detail ?></h6>
                    <p><?= $detailTest2 ?></p>
                </div>
            </div>
            
        </section><button class="retour"><?= $retour ?></button>
    </section>
        
</section>
    
<?php

require_once('../../view/headerFooter/footer.php');
?>