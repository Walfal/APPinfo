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
    $adresseRue = $valeur['adresse (numero et voie)'];
    $adresseVille = $valeur['adresse (ville)'];
    $codePostal = $valeur['adresse (code postal)'];
    $telephone = $valeur['telephone'];
    $poids = $valeur['poids (kg)'];
    $taille = $valeur['taille (cm)'];
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

<div class="contenu">
    <form class="formulaire" action="<?php echo '../../view/profil/modifierProfilPatients.php?id=' ?>" role="form" method="post" enctype="multipart/form-data">
        <input type="hidden"  id=Matricule name="matricule" value=" <?php echo $_GET['id']; ?>">
        <div class="form-group">
            <label for="Matricule2">Matricule :</label>
            <input type="text"  id=Matricule2 name="matricule2" value=" <?php echo $_GET['id']; ?>">
        </div>
        <div class="form-group">
            <label for="Nom">Nom :</label>
            <input type="text"  id=Nom name="nom" value=" <?php echo $nom; ?>">
        </div>
        <div class="form-group">
            <label for="Prenom">Prénom :</label>
            <input type="text" id=Prenom name="prenom" value=" <?php echo $prenom; ?>" >
        </div>
		<div class="form-group">
			<Label> Sexe : </Label>
				<select name="sexe" class="champ">
				<option value="0" <?php if($sexe == 0){ echo 'selected="selected"';} ?>> - </option>
				<option value="1" <?php if($sexe == 1){ echo 'selected="selected"';} ?>> Homme </option>
				<option value="2" <?php if($sexe == 2){ echo 'selected="selected"';} ?>> Femme </option>
				</select>
		</div><br>
        <div class="form-group">
            <label for="Numss">Numéro de sécurité sociale :</label>
            <input type="text" id=Numss name="num_ss" value="<?php echo $num_ss; ?>">
        </div>
        <div class="form-group">
            <label for="AdresseRue">Adresse (numéro et voie) :</label>
            <input type="text"  id=AdresseRue name="adresseRue" value=" <?php echo $adresseRue; ?>">
        </div>
        <div class="form-group">
            <label for="AdresseVille">Adresse (ville) :</label>
            <input type="text"  id=AdresseVille name="adresseVille" value=" <?php echo $adresseVille; ?>">
        </div>
        <div class="form-group">
            <label for="CodePostale">Code postal :</label>
            <input type="text" id=CodePostal name="codePostal" value=" <?php echo $codePostal; ?>">
        </div>
        <div class="form-group">
            <label for="Telephone">Téléphone :</label>
            <input type="tel" id=Telephone name="telephone" value=" <?php echo $telephone; ?>">
        </div>
        <div class="form-group">
            <label for="Mail">Mail :</label>
            <input type="email" id=Mail name="mail" value=" <?php echo $mail; ?>">
        </div>
        <div class="form-group">
            <label for="Poids">Poids :</label>
            <input type="text" id=Poids name="poids" value=" <?php echo $poids; ?>">
        </div>
        <div class="form-group">
            <label for="Taille">Taille :</label>
            <input type="text" id=Taille name="taille" value=" <?php echo $taille; ?>">
        </div>
        <div class="form-group">
            <label for="dateDeNaissance">date de naissance :</label>
            <input type="text" id=DateDeNaissance name="dateDeNaissance" value=" <?php echo $dateDeNaissance; ?>">
        </div>
        <div class="form-group">
            <label for="Motdepasse">Mot de passe :</label>
            <input type="password" id=Motdepasse name="motDePasse" value="<?php echo $motDePasse; ?>">
        </div>
        <div class="form-group">
            <label for="Role">Rôle :</label>
            <input type="text" id=Role name="role" value=" <?php echo $role; ?>">
        </div>
        <div class="form-group">
            <label for="Medecin">Médecin :</label>
            <input type="text" id=Medecin name="medecin" value=" <?php echo $medecin; ?>">
        </div>
        <br>
        <div class="actions">
            <div class="modify">
                <button type="submit">Modifier</button>
            </div>
            <div class="retour">
                <a href="../../view/profil/profilPatients.php" class="retour">Retour</a>
            </div>
        </div>
    </form>
    
</div>

<?php require_once '../headerFooter/footer.php';