<?php $title = 'Résultats';
require_once '../headerFooter/header.php';
require '../../controler/traduction/resultats/resultatsTrad.php';
if(!isset($_SESSION['matricule'])):
    header('Location: ../login/login.php');
endif;
?>
<link href="../resultats/resultatsCentre.css" rel="stylesheet"/>

    <!-- ------------------------------------------------------------ PRESENTATION---------------------------------------------------------------------------------- -->

	<section class="sections home text-center">
		<section class="intro">
            <div class="fond"></div>
            <div class="introDiv">
                <h1><?= $centre ?></h1>
                <p>Centre de tests psychotechniques</p>
                <div id="etoile">
                    <img class="imageEtoile" src="../images/icons/etoile.png">
                    <img class="imageEtoile" src="../images/icons/etoile.png">
                    <img class="imageEtoile" src="../images/icons/etoile.png">
                    <img class="imageEtoile" src="../images/icons/etoile.png">
                </div>
                <div class="lieu">
                    <div class="centre">
                        <h2>Paris</h2>
                        <p>Adresse du centre <br> <u>01 22 34 45 22</u></p>
                    </div>
                    <div class="centre">
                        <h2>Lyon</h2>
                        <p>Adresse du centre <br> <u>04 56 71 23 44</u></p>
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
                    <p>Mercredi 10 février </br> 2020</p>
                </div>
                <div class="case">
                    <p>Nom de </br>l'examinateur</p>
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
                    <h3>Nom du test</h3>
                    <div class="resultat">
                        <!--<img  class="bar" src="../images/icons/bar_diagramme-2.png">-->
                        
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
                <div>
                    <h3>Nom du test</h3>
                    <div class="resultat">
                        <img  class="bar" src="../images/icons/bar_diagramme-2.png">
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
                
            </section><button class="retour">Retour</button>
        </section>
           
	</section>
<?php require_once '../headerFooter/footer.php' ?>
