<?php
$title = "Mes résultats - Centre sélectionné";

require_once('../../view/headerFooter/header.php');
require_once('../../model/BDD/connexionBDD.php');
if(!isset($_SESSION['matricule'])):
    header('Location: ../login/login.php');
endif;
require '../../controller/traduction/resultats/resultatsTrad.php';

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
        <section class="resume">
            <div class="case">
                <p>Nom du patient</p>
            </div>

            <div class="case">
                <p>Nombre de </br>tests passés</p>
            </div>
            <div class="case">
                <p>Score total %</p>
                <img class="cercle" src="../images/icons/diagramme_cercle.png">
            </div>
        </section>
        <section class="test">
            <div>
                <h3></h3>
                <div class="resultat">
                    <img src="../../controller/resultats/graphResultats.php?dummy=\'.now()."/>
                </div>
                
                <div class="detail">
                    <h6>Détail des résultats</h6>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Curabitur sagittis sollicitudin metus, quis scelerisque tortor rutrum vel.
                            Pellentesque cursus nisl sed elit egestas ullamcorper. 
                        Aliquam id lorem laoreet, molestie leo sit amet, consequat nibh. 
                    </p>
                </div>
            </div>
            <div>
                <h3>Nom du test</h3>
                <div class="resultat">
                    <img  class="bar" src="../../controller/resultats/graphResultats2.php?dummy=\'.now().">
                    <figcaption>Résultat</figcaption>
                </div>
                
                <div class="detail">
                    <h6>Détail des résultats</h6>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Curabitur sagittis sollicitudin metus, quis scelerisque tortor rutrum vel.
                            Pellentesque cursus nisl sed elit egestas ullamcorper. 
                        Aliquam id lorem laoreet, molestie leo sit amet, consequat nibh. 
                    </p>
                </div>
            </div>
            
        </section><button class="retour"><?= $retour ?></button>
    </section>
        
</section>
    
<?php

require_once('../../view/headerFooter/footer.php');
?>