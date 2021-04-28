<?php 
$title = 'Votre compte';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule'])):
    header('Location: ../login/login.php');
endif;

require_once '../../model/Login/loginFunctions.php';
require_once '../../model/BDD/connexionBDD.php';

$personne = recuperationUneDonnee($BDD, "Personne", "matricule", $_SESSION['matricule']);

if($_SESSION['matricule'] == 0):
?>

<link href="compteAdmin.css" rel="stylesheet" />
<div class="contenu">
    <div class="contenu1">
        <div class="bienvenue">
            <h1>Bienvenue <?= $personne['prenom'] . ' ' . $personne['nom'] ?></h1>
            <p>Lorem ipsum dolor sit amet,<br />
				consectetur adipiscing elit.<br />
				Maecenas at.
            </p>
        </div>
        
        <div class="photo">
            <img src="../images/icons/user.png" class="photoProfil">
            <!--<div class="dateTime">Dernière connexion le : </div>-->
            <div>	<?php if(est_connecte()):?>
           <a href="../login/logout.php" ><button class="deconnexion">Se déconnecter</button> </a>
            <?php endif ?></div>
        </div>
    </div>
    <div class="contenu2">
        <a href="../gererCapteurs/gererCapteurs.php">
        <button class="case">
            <img src="../images/icons/dossier.png" class="image">

                <p>
                    Gestion <br> tests/capteurs
                </p>
        </button></a>
        <a href="#">
        <button class="case">
            <img src="../images/icons/dossier.png" class="image">
                <p>
                   Profil patients
                </p>
        </button></a>
        <a href="../prendreRDV/calendrier.php">
        <button class="case">
            <img src="../images/icons/calendrier.png" class="image">
                <p>
                    Planning
                </p>
        </button></a>
        <a href="../profil/modifProfil.php">
        <button class="case">
            <img src="../images/icons/dossier.png" class="image">
                <p>
                   Modifier mon profil
                </p>
        </button></a>
    </div>
</div>

<?php elseif($_SESSION['matricule'] > 0): ?>

<link href="compteUtilisateur.css" rel="stylesheet" />
<div class="contenu">
    <div class="contenu1">
        <div class="bienvenue">
            <h1>Bienvenue <?= $personne['prenom'] . ' ' . $personne['nom'] ?></h1>
            <p>Lorem ipsum dolor sit amet,<br />
				consectetur adipiscing elit.<br />
				Maecenas at.
            </p>
        </div>
        <div class="photo">
            <img src="../images/icons/user.png" class="photoProfil">
           
            <div>	<?php if(est_connecte()):?>
           <a href="../login/logout.php" ><button class="deconnexion">Se déconnecter</button> </a>
            <?php endif ?></div>
        </div>
    </div>
    <div class="contenu2">
        
        <a href="../resultats/mesResultats.php">
        <button class="case">
            <img src="../images/icons/dossier.png" class="image">
                <p>
                   Mes résultats
                </p>
        </button></a>
        <a href="../prendreRDV/prendreRDV.php">
        <button class="case">
            <img src="../images/icons/calendrier.png" class="image">
                <p>
                    Prendre RDV
                </p>
        </button></a>
    </div>
</div>

<?php endif ?>

<br><br><br><br><br>
<?php require '../headerFooter/footer.php'; ?>