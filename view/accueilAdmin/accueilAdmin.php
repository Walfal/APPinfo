<?php 
$title = 'Compte';
require_once '../headerFooter/header.php';
require_once '../../model/Login/loginFunctions.php';

//require_once '../../model/loginUtilisateurs.php';

?>
<link href="accueilAdmin.css" rel="stylesheet" />
<div class="contenu">
    <div class="contenu1">
        <div class="bienvenue">
            <h1>Bienvenue <?=$_SESSION['mail']?></h1>
            <p>Lorem ipsum dolor sit amet,<br />
				consectetur adipiscing elit.<br />
				Maecenas at.
            </p>
        </div>
        
        <div class="photo">
            <img src="../images/icons/user.png" class="photoProfil">
            <!--<div class="dateTime">Dernière connexion le : </div>-->
            <div>	<?php if(est_connecte()):?>
           <a href="../logout/logout.php" ><button class="deconnexion">Se déconnecter</button> </a>
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
        <a href="#">
        <button class="case">
            <img src="../images/icons/calendrier.png" class="image">
                <p>
                    Planning
                </p>
        </button></a>
        <a href="../modifProfil/modifProfil.php">
        <button class="case">
            <img src="../images/icons/dossier.png" class="image">
                <p>
                   Modifier mon profil
                </p>
        </button></a>
    </div>
</div>

<?php require '../headerFooter/footer.php'; ?>
