<?php 
$title = 'Votre compte';
require_once '../headerFooter/header.php';

require_once '../../model/Login/loginFunctions.php';
forcer_utilisateur_connecte(); //pour pouvoir accéder à cette page il faut être connecté sinon on est redirigé sur la page de connexion
?>

<link href="accueilUtilisateur.css" rel="stylesheet" />

<div class="contenu">
    <div class="contenu1">
        <div class="bienvenue">
            <h1>Bienvenue <?php echo $_SESSION['mail']?></h1>
            <p>Lorem ipsum dolor sit amet,<br />
				consectetur adipiscing elit.<br />
				Maecenas at.
            </p>
        </div>
        <div class="photo">
            <img src="../images/icons/user.png" class="photoProfil">
           
            <div>	<?php if(est_connecte()):?>
           <a href="../logout/logout.php" ><button class="deconnexion">Se déconnecter</button> </a>
            <?php endif ?></div>
        </div>
    </div>
    <div class="contenu2">
        
        <a href="../mesResultats/mesResultats.php">
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