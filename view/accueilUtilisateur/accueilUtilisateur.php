<?php 
$title = 'Accueil';
require_once '../../model/loginFunctions.php';
forcer_utilisateur_connecte(); //pour pouvoir accéder à cette page il faut être connecté sinon on est redirigé sur la page de connexion
require_once '../header/header.php';?>
<link href="accueilUtilisateur.css" rel="stylesheet" />
<div class="contenu">
    <div class="contenu1">
        <div class="bienvenue">
            <h1>Bienvenue<?php echo $_SESSION['mail']?></h1>
            <p>Lorem ipsum dolor sit amet,<br />
				consectetur adipiscing elit.<br />
				Maecenas at.
            </p>
        </div>
        <div class="photo">
            <img src="../images/icons/user.png" class="photoProfil">
            <div class="dateTime">Dernière connexion le :</div>
        </div>
    </div>
    <div class="contenu2">
        
        <a href="../mesResultats/mesResultats.php">
        <button class="case">
            <img src="../images/icons/dossier.png" class="image">
                <p>
                   Profil patients
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








<?php require '../footer/footer.php'; ?>