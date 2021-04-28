<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';
?>
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
        <h1>Liste des utilisateurs <a href="../../view/profil/ajouterProfilPatients.php">+ Ajouter</a></h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th >Nom</th>
                <th>Prénom</th>
                <th>N° sécu</th>
                <th>Code postal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
                require '../../model/BDD/connexionBDD.php';
                $statement = $BDD -> query('SELECT nom,prenom,num_ss,codePostal, id_Utilisateur, rol FROM test.utilisateurs');
                if(isset($_GET['nomPatient']) AND !empty($_GET['nomPatient']) OR isset($_GET['prenomPatient']) AND !empty($_GET['prenomPatient']) OR isset($_GET['codePostal']) AND !empty($_GET['codePostal'])){
                    $nomPatient = htmlspecialchars($_GET['nomPatient']);
                    $prenomPatient = htmlspecialchars($_GET['prenomPatient']);
                    $codePostal = htmlspecialchars($_GET['codePostal']);
                    $allusers = $db->query("SELECT nom,prenom,num_ss,codePostal, id_Utilisateur, rol FROM test.utilisateurs WHERE nom ='$nomPatient' OR prenom = '$prenomPatient' OR codePostal='$codePostal' ");
                    if($allusers->rowCount() > 0){
                        while($user = $allusers->fetch()){
                            if($user['rol']!=1){
                                echo '<tr>';
                                echo '<td data-label="Nom :">' . $user['nom'] . '</td>';
                                echo '<td data-label="Prénom :">' . $user['prenom'] . '</td>';
                                echo '<td data-label="N° sécu :">' . $user['num_ss'] . '</td>';
                                echo '<td data-label="Code Postale :">' . $user['codePostal'] . '</td>';
                                echo '<td data-label="Actions :" width=300>';
                                echo '<a href="../../view/profil/voirProfilPatients.php?id='  . $user['id_Utilisateur'] . '" >Voir</a>';
                                echo '<a href="../../view/profil/modifierProfilPatients.php?id='  . $user['id_Utilisateur'] . '" >Modifier</a>';
                                echo '<a href="../../view/profil/supprimerProfilPatients.php?id='  . $user['id_Utilisateur'] . '" >Supprimer</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                    }
                    else{
                        echo '<p class="aucun">Aucun utilisateur trouvé</p>';
                    }
                }
                else{
                    while($valeur = $statement-> fetch()){
                        if($valeur['rol']!=1){
                            echo '<tr>';
                            echo '<td data-label="Nom :">' . $valeur['nom'] . '</td>';
                            echo '<td data-label="Prénom :">' . $valeur['prenom'] . '</td>';
                            echo '<td data-label="N° sécu :">' . $valeur['num_ss'] . '</td>';
                            echo '<td data-label="Code Postale :">' . $valeur['codePostal'] . '</td>';
                            echo '<td data-label="Actions :" width=300>';
                            echo '<a href="../../view/profil/voirProfilPatients.php?id='  . $valeur['id_Utilisateur'] . '" >Voir</a>';
                            echo '<a href="../../view/profil/modifierProfilPatients.php?id='  . $valeur['id_Utilisateur'] . '" >Modifier</a>';
                            echo '<a href="../../view/profil/supprimerProfilPatients.php?id='  . $valeur['id_Utilisateur'] . '" >Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    
                    }
                    
                }
            ?>
        
        </tbody>
    </table>
</div>   
<div class="retour">
    <a href="../../view/">Retour à la page d'accueil</a>
</div>

<?php require_once '../headerFooter/footer.php';?>