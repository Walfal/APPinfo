<?php
    require '../../model/modelProfilPatients/modelProfilPatients.php';

    if(!empty($_GET['id'])){
        $id = checkInput($_GET['id']);
    }

    $nomError = $prenomError = $num_ssError = $codePostalError = $mailError = $motDePasseError =
    $nom = $prenom = $sexe= $num_ss= $adresse=$codePostal= $telephone = $mail =$poids=$taille=$age=$motDePasse=$rol="";
    
    if(!empty($_POST)){
        $nom  = checkInput($_POST['nom']);
        $prenom  = checkInput($_POST['prenom']);
        $sexe  = checkInput($_POST['sexe']);
        $num_ss  = checkInput($_POST['num_ss']);
        $adresse  = checkInput($_POST['adresse']);
        $codePostal  = checkInput($_POST['codePostal']);
        $telephone  = checkInput($_POST['telephone']);
        $mail  = checkInput($_POST['mail']);
        $poids  = checkInput($_POST['poids']);
        $taille  = checkInput($_POST['taille']);
        $age  = checkInput($_POST['age']);
        $motDePasse  = checkInput($_POST['motDePasse']);
        $rol  = checkInput($_POST['rol']);
        $isSuccess = true;
        $id = checkInput($_POST['id']);
        

        if(empty($nom)){
            $nomError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($prenom)){
            $prenomError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($mail)){
            $mailError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($motDePasse)){
            $motDePasseError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($num_ss)){
            $num_ssError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($codePostal)){
            $codePostalError = 'Ce champ ne peut pas être vide'; 
            $isSuccess = false;
        }
        if($isSuccess){
            $db = Database::connect();
            $statement = $db->prepare('UPDATE test.utilisateurs SET nom=?, prenom=?, sexe=?, num_ss=?, adresse=?, codePostal=?, telephone=?, mail=?, poids=?, taille=?, age=?, motDePasse=?, rol=? WHERE id_Utilisateur =?');
            $statement ->execute(array($nom,$prenom,$sexe,$num_ss,$adresse,$codePostal,$telephone,$mail,$poids,$taille,$age,$motDePasse, $rol, $id));
            Database::disconnect();
            header("location: ../../view/profilPatients/profilPatients.php");
        }
    }
    //pour récupérer ce qui est écrit sur le formulaire
    else{
        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM test.utilisateurs WHERE id_Utilisateur=?");
        $statement->execute(array($id));
        $valeur = $statement->fetch();
        $nom = $valeur['nom'];
        $prenom = $valeur['prenom'];
        $sexe = $valeur['sexe'];
        $num_ss = $valeur['num_ss'];
        $adresse =$valeur['adresse'];
        $codePostal = $valeur['codePostal'];
        $telephone = $valeur['telephone'];
        $mail = $valeur['mail'];
        $poids = $valeur['poids'];
        $taille = $valeur['taille'];
        $age = $valeur['age'];
        $motDePasse = $valeur['motDePasse'];
        $rol = $valeur['rol'];
        Database::disconnect();
    }

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
		<link href="../../view/profilPatients/modifierProfilPatients.css" rel="stylesheet" />
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
                <h2>Modifier profil de <?php echo'' . $nom .' ' .$prenom; ?></h2> 
            </div>
            <div class="image">
                <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
            </div>
        </div>
		
		<!-- ----------------------------------------------------------- FORMULAIRE ---------------------------------------------------------------------------------- -->
       
		<div class="contenu">
			<form class="formulaire" action="<?php echo '../../view/profilPatients/modifierProfilPatients.php?id=' ?>" role="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>  
				<div class="form-group">
					<label for="Nom">Nom :</label>
					<input type="text"  id=Nom name="nom" value=" <?php echo $nom; ?>">
                    <span class="help-inline"><?php echo $nomError; ?></span>
				</div>
				<div class="form-group">
					<label for="Prenom">Prénom :</label>
					<input type="text" id=Prenom name="prenom" value=" <?php echo $prenom; ?>" >
                    <span class="help-inline"><?php echo $prenomError; ?></span>
				</div>
				<div class="form-group">
					<label for="Sexe">Sexe :</label>
					<input type="text" id=Sexe name="sexe" value=" <?php echo $sexe; ?>">
				</div>
				<div class="form-group">
					<label for="Numss">Numéro de sécurité sociale :</label>
					<input type="text" id=Numss name="num_ss" value="<?php echo $num_ss; ?>">
                    <span class="help-inline"><?php echo $num_ssError; ?></span>
				</div>
				<div class="form-group">
					<label for="Adresse">Adresse :</label>
					<input type="text"  id=Adresse name="adresse" value=" <?php echo $adresse; ?>">
				</div>
				<div class="form-group">
					<label for="CodePostale">Code postal :</label>
					<input type="text" id=CodePostal name="codePostal" value=" <?php echo $codePostal; ?>">
                    <span class="help-inline"><?php echo $codePostalError; ?></span>
				</div>
				<div class="form-group">
					<label for="Telephone">Téléphone :</label>
					<input type="tel" id=Telephone name="telephone" value=" <?php echo $telephone; ?>">
				</div>
				<div class="form-group">
					<label for="Mail">Mail :</label>
					<input type="email" id=Mail name="mail" value=" <?php echo $mail; ?>">
                    <span class="help-inline"><?php echo $mailError; ?></span>
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
					<label for="Age">Age :</label>
					<input type="text" id=Age name="age" value=" <?php echo $age; ?>">
				</div>
				<div class="form-group">
					<label for="Motdepasse">Mot de passe :</label>
					<input type="password" id=Motdepasse name="motDePasse" value="<?php echo $motDePasse; ?>">
                    <span class="help-inline"><?php echo $motDePasseError; ?></span>
				</div>
				<div class="form-group">
					<label for="Role">Rôle :</label>
					<input type="text" id=Role name="rol" value=" <?php echo $rol; ?>">
				</div>
                <br>
                <div class="actions">
                    <div class="modify">
                        <button type="submit">Modifier</button>
                    </div>
                    <div class="retour">
                        <a href="../../view/profilPatients/profilPatients.php" class="retour">Retour</a>
                    </div>
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