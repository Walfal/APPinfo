<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';
require_once '../../model/BDD/connexionBDD.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 99):
    header('Location: ../login/login.php');
endif;

require '../../controler/traduction/profil/profilPatientsTrad.php';
?>

<link href="profilPatients.css" rel="stylesheet" />

<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2><?php echo $profil?></h2>
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FILTER ---------------------------------------------------------------------------------- -->

<div class="filter">
    <form class="aRemplir" method="post">
        <div class="champ">
            <input type="text" id="nom" class="nom" name="nomPatient" placeholder="<?php echo $nom?>">
        </div>
        <div class="champ">
            <label for="" class="ou"><?php echo $ou?></label>
            <input type="text" id="prenom" class="prenom" name="prenomPatient" placeholder="<?php echo $prenom ?>">
        </div>
        <div class="champ">
            <label for="" class="ou"><?php echo $ou?></label>
            <input type="text" id="codePostal" class="adresse" name="codePostal" placeholder="<?php echo $code ?>">
        </div>
        <div class="champ">
            <input type="submit" class="valider" name="valider" value="<?php echo $valider?> >">
        </div>

    </form>
</div>

<!-- ----------------------------------------------------------- LISTE PROFILS ---------------------------------------------------------------------------------- -->
<div class="container admin">
    
    <div class="row">
        <h1><?php echo $liste?>
            <?php if($_SESSION['matricule'] < 20): ?>
                <a href="../../view/profil/ajouterProfilPatients.php">+ <?php echo $ajouter ?></a>
            <?php endif ?>
        </h1>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th><?php echo $matricule ?></th>
                <th><?php echo $name ?></th>
                <th><?php echo $name2 ?></th>
                <th><?php echo $mail ?></th>
                <th><?php echo $nss ?></th>
                <th><?php echo $code ?></th>
                <th><?php echo $ajouter ?></th>
            </tr>
        </thead>
        <tbody id="recherche">
        </tbody>
    </table>
</div>

<?php require_once '../headerFooter/footer.php';?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script type="text/javascript">
	$(document).ready(function (){
		envoieAjax();
		$("#nom").keyup(function(){
			envoieAjax();
		})
		$("#prenom").keyup(function(){
			envoieAjax();
		})
		$("#codePostal").keyup(function(){
			envoieAjax();
		})
	})

    function envoieAjax(){
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var codePostal = $("#codePostal").val();
        $.ajax({
            url: '../../model/Profil/profilPatients.php',
            method:'post',
            dataType: 'html',
            data: {
                search: 1,
                nom: nom,
                prenom: prenom,
                codePostal: codePostal
            },
            success: function(data){
                $('#recherche').html(data);
            },
            
            error : function(e, xhr, s){
                let error = e.responsJSON;
                if(e.status == 403 && typeof error !== 'undefined'){
                    alert('Erreur 403')
                }else if(e.status == 404){
                    alert('Erreur 404')
                }else if(e.status == 403){
                    alert('Erreur 403')
                }else if(e.status == 401){
                    alert('Erreur 401')
                }else{
                    alert('Erreur Ajax')
                }
            }
        })
    }

    function table(personnes, SessionMatricule){
        var retour = '';
        if(personnes.length > 0){
            personnes.forEach(personne => {
                if(personne['matricule'] > 19){
                    retour += '<tr>';
                    retour += '<td data-label="Matricule :">'    + personne['matricule']                 + '</td>';
                    retour += '<td data-label="Nom :">'          + personne['nom']                       + '</td>';
                    retour += '<td data-label="Prénom :">'       + personne['prenom']                    + '</td>';
                    retour += '<td data-label="Mail :">'         + personne['mail']                      + '</td>';
                    retour += '<td data-label="N° sécu :">'      + personne['numero de securite social'] + '</td>';
                    retour += '<td data-label="Code Postale :">' + personne['code postal']               + '</td>';
                    retour += '<td data-label="Actions :" width=300>';
                    retour += '<a href="../../view/profil/voirProfilPatients.php?id=' + personne['matricule'] + '" ><?php echo $voir ?></a>';
                    if(SessionMatricule < 20){
                        retour += '<a href="../../view/profil/modifProfil.php?id='             + personne['matricule'] + '" ><?php echo $modifier ?></a>';
                        retour += '<a href="../../view/profil/supprimerProfilPatients.php?id=' + personne['matricule'] + '" ><?php echo $supprimer ?></a>';
                    }
                    retour += '</td>';
                    retour += '</tr>';
                }
            })
        }else{
            retour = '<p class="aucun"><?php echo $aucun ?></p>';
        }
        return retour;
    }
</script>







<?php/*
console.log(nom);
console.log(<?//php var_dump($_POST['nom']) ?>);
<?php echo '';
    $nomPatient =  (isset($_POST['nom'])) ? $_POST['nom'] : '1';
    $personnes = query($BDD, "SELECT * FROM Personne WHERE nom LIKE ?", ['%'.$nomPatient.'%']);
    $personnes = $personnes -> fetchAll(); 
?>
var personnes = <?php json_encode($personnes) ?>;
var sessionMatricule = <?php $_SESSION['matricule'] ?>;
console.log('nomPatient: ' + <?= $nomPatient ?>);
$('#recherche').html(table(personnes, sessionMatricule));*/