<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

require_once '../../model/BDD/connexionBDD.php';
$matricule = $nom = $prenom = $sexe = $num_ss = $adresseRue = $adresseVille = $codePostal= $telephone = $mail = $poids = $taille = $dateDeNaissance = $motDePasse = $role = "";

require_once '../../model/Profil/modiferProfilPatients.php';
//pour récupérer ce qui est écrit sur le formulaire
if(isset($_GET['id'])){
    $valeur = recuperationUneDonnee($BDD, 'Personne', 'matricule', $_GET['id']);
    
    $matricule = $valeur['matricule'];
    $nom = $valeur['nom'];
    $prenom = $valeur['prenom'];
    $sexe = $valeur['sexe'];
    $mail = $valeur['mail'];
    $num_ss = $valeur['numero de securite social'];
    $adresseRue = $valeur['adresse'];
    $adresseVille = $valeur['ville'];
    $codePostal = $valeur['code postal'];
    $telephone = $valeur['telephone'];
    $poids = $valeur['poids'];
    $taille = $valeur['taille'];
    $dateDeNaissance = $valeur['date de naissance'];
    $motDePasse = $valeur['mot de passe'];
    $role = $valeur['role'];
    $medecin = $valeur['medecin'];
}


function checkInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<link href="modifierProfilPatients.css" rel="stylesheet" />

<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
    <div class="content">
        <h2>Modifier profil de <?php echo'' . $prenom .' ' .$nom; ?></h2> 
    </div>
    <div class="image">
        <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
    </div>
</div>

<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->


<form class="formulaire" action="<?php echo '../../view/profil/modifierProfilPatients.php?id=' ?>" role="form" method="post" enctype="multipart/form-data">
    <div class="contenu">   
        <input type="hidden"  id=Matricule name="matricule" value=" <?php echo $_GET['id']; ?>">
        <div class="form-group">
            <li><label for="Matricule2"> Matricule : </label> <br>
            <input class="champ" type="text"  id=Matricule2 name="matricule2" value=" <?php echo $_GET['id']; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="Nom">Nom :</label><br>
            <input type="text" class="champ" id=Nom name="nom" value=" <?php echo $nom; ?>"></li>    
            <li class="espacement"><label for="Prenom">Prénom :</label><br>
            <input type="text" class="champ" id=Prenom name="prenom" value=" <?php echo $prenom; ?>" ></li>    
        </div>		
        <div class="form-group">
            <li><label for="sexe"> Sexe : </label><br>
            <select name="sexe" class="champ">
                <option value="0" <?php if($sexe == 0){ echo 'selected="selected"';} ?>> - </option>
                <option value="1" <?php if($sexe == 1){ echo 'selected="selected"';} ?>> Homme </option>
                <option value="2" <?php if($sexe == 2){ echo 'selected="selected"';} ?>> Femme </option>
            </select></li>
        </div>    
        <div class="form-group">
            <li><label for="Numss">Numéro de sécurité sociale :</label> <br>
            <input type="text"  class="champ" id=Numss name="num_ss" value="<?php echo $num_ss; ?>"></li>
        </div>	 		
        <div class="form-group">
            <li><label for="AdresseRue">Adresse (numéro et voie) :</label><br>
            <input type="text" class="champ" id=AdresseRue name="adresseRue" value=" <?php echo $adresseRue; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="AdresseVille">Adresse (ville) :</label><br>
            <input type="text" class="champ" id=AdresseVille name="adresseVille" value=" <?php echo $adresseVille; ?>"></li>
            <li class="espacement"><label for="CodePostale">Code postal :</label><br>
            <input type="text" class="champ" id=CodePostal name="codePostal" value=" <?php echo $codePostal; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="Telephone">Téléphone :</label><br>
            <input type="tel" class="champ" id=Telephone name="telephone" value=" <?php echo $telephone; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="Mail">Mail :</label><br>
            <input type="email" class="champ" id=Mail name="mail" value=" <?php echo $mail; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="Motdepasse">Mot de passe :</label><br>
            <input type="password"class="champ" id=Motdepasse name="motDePasse" value="<?php echo $motDePasse; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="Poids">Poids :</label><br>
            <input type="text"  class="champ" id=Poids name="poids" value=" <?php echo $poids; ?>"></li>
            <li class="espacement"><label for="Taille">Taille :</label><br>
            <input type="text" class="champ" id=Taille name="taille" value=" <?php echo $taille; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="dateDeNaissance">Date de naissance :</label><br>
            <input type="text" class="champ" id=DateDeNaissance name="dateDeNaissance" value=" <?php echo $dateDeNaissance; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="Role">Rôle :</label><br>
            <input type="text" class="champ" id=Role name="role" value=" <?php echo $role; ?>"></li>
        </div>
        <div class="form-group">
            <li><label for="Medecin">Médecin :</label><br>
            <input type="text" class="champ" id=Medecin name="medecin" value=" <?php echo $medecin; ?>"></li>
        </div>
        <div class="actions">
            <div class="modify">
                <button type="submit">Modifier</button>
            </div>
            <div class="retour">
                <a href="../../view/profil/profilPatients.php" class="retour">Retour</a>
            </div>
        </div>
    </div> 
</form> 
    


<?php require_once '../headerFooter/footer.php';