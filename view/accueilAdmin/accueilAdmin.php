<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Acceuil Admin </title>
        <link href="accueilAdmin.css" rel="stylesheet" />
    </head>
    
<?php require '../header/header.php'; ?>
	<!-- -------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->

<body>
    <div>
        <div class="textImage">
            <div class="ecriture">
                <p class="bienvenue">Bienvenue amigo! </p>
                <p class="textBienvenue">
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum finibus sapien ut lacinia. Integer vulputate varius dolor, in pellentesque.
                    </br>
                </p>
            </div>
            <div class="dateImage"></div>
        </div>
    </div>
    <div>
        <nav class="bouttons">
            <div class="listBouttons">
                <button class="action"><a href="../gererCapteurs/gererCapteur.php">Gestion tests/capteurs</a></button>
                <div class="divider"></div>
                <button class="action"><a href="#">Profil patients</a></button>
                <div class="divider"></div>
                <button class="action"><a href="#">Planning</a></button>
                <div class="divider"></div>
                <button class="action"><a href="#">Modifier mon profil</a></button>
            </div>    
        </nav>
    </div>    
</body>
<?php require '../footer/footer.php'; ?>
</html>