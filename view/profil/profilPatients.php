<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 99):
    header('Location: ../login/login.php');
endif;
?>

<link href="profilPatients.css" rel="stylesheet" />

<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2>Profil patients</h2>
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FILTER ---------------------------------------------------------------------------------- -->

<div class="filter">
    <form class="aRemplir" method="GET">
        <div class="champ">
            <input type="text" class="nom" name="nomPatient" placeholder="Nom du patient">
        </div>
        <div class="champ">
            <label for="" class="ou">OU</label>
            <input type="text" class="prenom" name="prenomPatient" placeholder="Prénom du patient">
        </div>
        <div class="champ">
            <label for="" class="ou">OU</label>
            <input type="text" class="adresse" name="codePostal" placeholder="Code postal">
        </div>
        <div class="champ">
            <input type="submit" class="valider" name="valider" value="Valider >">
        </div>

    </form>
</div>

<!-- ----------------------------------------------------------- LISTE PROFILS ---------------------------------------------------------------------------------- -->
<div class="container admin">
    
    <div class="row">
        <h1>Liste des utilisateurs
            <?php if($_SESSION['matricule'] < 20): ?>
                <a href="../../view/profil/ajouterProfilPatients.php">+ Ajouter</a>
            <?php endif ?>
        </h1>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th >Matricule</th>
                <th >Nom</th>
                <th>Prénom</th>
                <th>Mail</th>
                <th>N° sécu</th>
                <th>Code postal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
                require '../../model/BDD/connexionBDD.php';
                if(isset($_GET['nomPatient']) && !empty($_GET['nomPatient']) || isset($_GET['prenomPatient']) && !empty($_GET['prenomPatient']) || isset($_GET['codePostal']) && !empty($_GET['codePostal'])){
                    $nomPatient = htmlspecialchars($_GET['nomPatient']);
                    $prenomPatient = htmlspecialchars($_GET['prenomPatient']);
                    $codePostal = htmlspecialchars($_GET['codePostal']);
                    $personnes = $BDD -> query("SELECT * FROM Personne WHERE nom = '$nomPatient' OR prenom = '$prenomPatient' OR 'code postal' = '$codePostal'");
                    if($personnes -> rowCount() > 0){
                        while($personne = $personnes -> fetch()){
                            if($personne['matricule'] > 20){
                                echo '<tr>';
                                echo '<td data-label="Matricule :">' . $personne['matricule'] . '</td>';
                                echo '<td data-label="Nom :">' . $personne['nom'] . '</td>';
                                echo '<td data-label="Prénom :">' . $personne['prenom'] . '</td>';
                                echo '<td data-label="Mail :">' . $personne['mail'] . '</td>';
                                echo '<td data-label="N° sécu :">' . $personne['numero de securite social'] . '</td>';
                                echo '<td data-label="Code Postale :">' . $personne['code postal'] . '</td>';
                                echo '<td data-label="Actions :" width=300>';
                                echo '<a href="../../view/profil/voirProfilPatients.php?id='  . $personne['matricule'] . '" >Voir</a>';
                                if($_SESSION['matricule'] < 20):
                                echo '<a href="../../view/profil/modifierProfilPatients.php?id='  . $personne['matricule'] . '" >Modifier</a>';
                                echo '<a href="../../view/profil/supprimerProfilPatients.php?id='  . $personne['matricule'] . '" >Supprimer</a>';
                                endif;
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                    }
                    else {
                        echo '<p class="aucun">Aucun utilisateur trouvé</p>';
                    }
                }
                else{
                    $personnes = recuperationDesDonnees($BDD, 'Personne', 1, 1);
                    foreach($personnes as $personne){
                        if($personne['matricule'] > 20){
                            echo '<tr>';
                            echo '<td data-label="Matricule :">' . $personne['matricule'] . '</td>';
                            echo '<td data-label="Nom :">' . $personne['nom'] . '</td>';
                            echo '<td data-label="Prénom :">' . $personne['prenom'] . '</td>';
                            echo '<td data-label="Mail :">' . $personne['mail'] . '</td>';
                            echo '<td data-label="N° sécu :">' . $personne['numero de securite social'] . '</td>';
                            echo '<td data-label="Code Postale :">' . $personne['code postal'] . '</td>';
                            echo '<td data-label="Actions :" width=300>';
                            echo '<a href="../../view/profil/voirProfilPatients.php?id='  . $personne['matricule'] . '" >Voir</a>';
                            if($_SESSION['matricule'] < 20):
                            echo '<a href="../../view/profil/modifierProfilPatients.php?id='  . $personne['matricule'] . '" >Modifier</a>';
                            echo '<a href="../../view/profil/supprimerProfilPatients.php?id='  . $personne['matricule'] . '" >Supprimer</a>';
                            endif;
                            echo '</td>';
                            echo '</tr>';
                        }
                    
                    }
                    
                }
            ?>
        
        </tbody>
    </table>
</div>

<?php require_once '../headerFooter/footer.php';?>