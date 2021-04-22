<?php
    require '../../model/modelProfilPatients/modelProfilPatients.php';

    if(!empty($_GET['id'])){
        $idUtilisateur = checkInput($_GET['id']);
    }

    $db = Database::connect();
    $statement = $db->prepare('SELECT * FROM test.utilisateurs WHERE id_Utilisateur =?');
    $statement->execute(array($idUtilisateur));
    $valeur = $statement->fetch();
    Database::disconnect();

    //pour vérifier donnée qui vient de l'extérieur
    function checkInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>profil patients</title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="voirprofilPatients.css" rel="stylesheet" />
		<link rel="icon" href="../../view/images/logo/logo.png" />
	</head>

	<!-- -------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->
	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="../"><img class="logo" src="../images/logo/sensair.png" alt="" /></a>
				<ul class="links">
					<li><a href="../">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="quiSommesNous.html">About Us</a></li>
					<li><a href="contactezNous.html">Contact Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="../images/icons/language.svg" style="width: 25px" />
						</a>
					</li>
					<li>
						<a href="login.html"
							><img class="bi bi-globe" src="../images/icons/account.svg" style="width: 25px"
						/></a>
					</li>
				</ul>
				<label for="nav-toggle" class="icon-burger">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</label>
			</nav>
		</div>
	</header>

    <body>
        <!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
        <div class="banniere">
            <div class="content">
                <h2>Profil de <?php echo'' . $valeur['nom'] .' ' .$valeur['prenom']; ?> </h2> 
            </div>
            <div class="image">
                <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
            </div>
        </div>
		
		<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->
       
		<div class="contenu">
			<form>
				<div class="form-group">
					<label for="Nom">Nom :</label>
					<input type="text" value=" <?php echo ''.$valeur['nom']; ?>" id=Nom readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Prenom">Prénom :</label>
					<input type="text" value=" <?php echo ''.$valeur['prenom']; ?>" id=Prenom readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Sexe">Sexe :</label>
					<input type="text" value=" <?php echo ''.$valeur['sexe']; ?>" id=Sexe readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Numss">Numéro de sécurité sociale :</label>
					<input type="text" value=" <?php echo ''.$valeur['num_ss']; ?>" id=Numss readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Adresse">Adresse :</label>
					<input type="text" value=" <?php echo ''.$valeur['adresse']; ?>" id=Adresse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="CodePostale">Code postal :</label>
					<input type="text" value=" <?php echo ''.$valeur['codePostal']; ?>" id=CodePostal readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Telephone">Téléphone :</label>
					<input type="tel" value=" <?php echo ''.$valeur['telephone']; ?>" id=Telephone readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Mail">Mail :</label>
					<input type="email" value=" <?php echo ''.$valeur['mail']; ?>" id=Mail readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Poids">Poids :</label>
					<input type="text" value=" <?php echo ''.$valeur['poids']; ?>" id=Poids readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Taille">Taille :</label>
					<input type="text" value=" <?php echo ''.$valeur['taille']; ?>" id=Taille readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Age">Age :</label>
					<input type="text" value=" <?php echo ''.$valeur['age']; ?>" id=Age readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Motdepasse">Mot de passe :</label>
					<input type="password" value=" <?php echo ''.$valeur['motDePasse']; ?>" id=Motdepasse readonly="readonly">
				</div>
				<div class="form-group">
					<label for="Role">Rôle :</label>
					<input type="text" value=" <?php echo ''.$valeur['rol']; ?>" id=Role readonly="readonly">
				</div>
				<div class="retour">
					<a href="../../view/profilPatients/profilPatients.php" class="retour">Retour</a>
				</div>

				
			</form>

			
		</div>




	</body>

	<footer>
        <div class="contenu-footer">
            <div class="bloc logo">
                <a href="../index.php"><img class="logo" src="../images/logo/logo.png" alt="" /></a>
            </div>
            <div class="bloc coordonnees">
                <div class="coor">
                    <li>
                        <a href="mailto:info@sensair.com" class="mail">info@sensair.com</a>
                    </li>
                    <li>
                        <a href="tel:+33123488733" class="tel">+33 1 23 48 87 33</a>
                    </li>
                    <li>
                        <a
                            href="https://www.google.fr/maps/place/10+Rue+de+Vanves,+92170+Issy-les-Moulineaux/@48.824529,2.2776649,17z/data=!3m1!4b1!4m5!3m4!1s0x47e6707980bd3947:0xd54fb6c5e1933333!8m2!3d48.824529!4d2.2798536"
                            class="adresse"
                            >10 rue de Vanves, 92130 Issy-les-Moulineaux</a
                        >
                    </li>
                </div>
            </div>

            <div class="bloc reseaux">
                <div class="res">
                    <h4>SUIVEZ-NOUS</h4>
                    <a href="#"><img class="facebook" src="../images/icons/facebook.png" alt="" /></a>
                    <a href="#"><img class="google" src="../images/icons/google.png" alt="" /></a>
                    <a href="#"><img class="linkedin" src="../images/icons/linkedin.png" alt="" /></a>
                </div>
                <div class="liens">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../services/services.php">Services</a></li>
                        <li><a href="../quiSommesNous/quiSommesNous.php">About Us</a></li>
                        <li><a href="../contactezNous.html">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p id="coyright">© 2021 Sens'air</p>
    </footer>


    
</html>