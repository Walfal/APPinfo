<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<title>profil patients</title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="profilPatients.css" rel="stylesheet" />
		<link rel="icon" href="../images/logo/logo.png" />
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
                <h2>Profil patients</h2>
            </div>
            <div class="image">
                <img src="../images/icons/baseline_folder_white_24dp.png" alt="">
            </div>
        </div>

        <!-- ----------------------------------------------------------- FILTER ---------------------------------------------------------------------------------- -->

        <div class="filter">
            <form class="aRemplir" method="GET">
                <div class="champ">
                    <input type="text" class="nom" name="nomPatient" placeholder="Nom du patient">
                </div>
                <div class="champ">
                    <label for="" class="ou">OU</label>
                    <input type="text" class="prenom" name="prenomPatient" placeholder="Prénom du patient">
                </div>
                <div class="champ">
                    <label for="" class="ou">OU</label>
                    <input type="text" class="adresse" name="codePostal" placeholder="Code postal">
                </div>
                <div class="champ">
                    <input type="submit" class="valider" name="valider" value="Valider >">
                </div>

            </form>
        </div>

        <!-- ----------------------------------------------------------- LISTE PROFILS ---------------------------------------------------------------------------------- -->
        <div class="container admin">
            <div class="row">
                <h1>Liste des utilisateurs <a href="../../view/profilPatients/ajouterProfilPatients.php">+ Ajouter</a></h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th >Nom</th>
                        <th>Prénom</th>
                        <th>N° sécu</th>
                        <th>Code postal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        require '../../model/modelProfilPatients/modelProfilPatients.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT nom,prenom,num_ss,codePostal, id_Utilisateur, rol FROM test.utilisateurs');
                        if(isset($_GET['nomPatient']) AND !empty($_GET['nomPatient']) OR isset($_GET['prenomPatient']) AND !empty($_GET['prenomPatient']) OR isset($_GET['codePostal']) AND !empty($_GET['codePostal'])){
                            $nomPatient = htmlspecialchars($_GET['nomPatient']);
                            $prenomPatient = htmlspecialchars($_GET['prenomPatient']);
                            $codePostal = htmlspecialchars($_GET['codePostal']);
                            $allusers = $db->query("SELECT nom,prenom,num_ss,codePostal, id_Utilisateur, rol FROM test.utilisateurs WHERE nom ='$nomPatient' OR prenom = '$prenomPatient' OR codePostal='$codePostal' ");
                            if($allusers->rowCount() > 0){
                                while($user = $allusers->fetch()){
                                    if($user['rol']!=1){
                                        echo '<tr>';
                                        echo '<td data-label="Nom :">' . $user['nom'] . '</td>';
                                        echo '<td data-label="Prénom :">' . $user['prenom'] . '</td>';
                                        echo '<td data-label="N° sécu :">' . $user['num_ss'] . '</td>';
                                        echo '<td data-label="Code Postale :">' . $user['codePostal'] . '</td>';
                                        echo '<td data-label="Actions :" width=300>';
                                        echo '<a href="../../view/profilPatients/voirProfilPatients.php?id='  . $user['id_Utilisateur'] . '" >Voir</a>';
                                        echo '<a href="../../view/profilPatients/modifierProfilPatients.php?id='  . $user['id_Utilisateur'] . '" >Modifier</a>';
                                        echo '<a href="../../view/profilPatients/supprimerProfilPatients.php?id='  . $user['id_Utilisateur'] . '" >Supprimer</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                            else{
                                echo '<p class="aucun">Aucun utilisateur trouvé</p>';
                            }
                        }
                        else{
                            while($valeur = $statement-> fetch()){
                                if($valeur['rol']!=1){
                                    echo '<tr>';
                                    echo '<td data-label="Nom :">' . $valeur['nom'] . '</td>';
                                    echo '<td data-label="Prénom :">' . $valeur['prenom'] . '</td>';
                                    echo '<td data-label="N° sécu :">' . $valeur['num_ss'] . '</td>';
                                    echo '<td data-label="Code Postale :">' . $valeur['codePostal'] . '</td>';
                                    echo '<td data-label="Actions :" width=300>';
                                    echo '<a href="../../view/profilPatients/voirProfilPatients.php?id='  . $valeur['id_Utilisateur'] . '" >Voir</a>';
                                    echo '<a href="../../view/profilPatients/modifierProfilPatients.php?id='  . $valeur['id_Utilisateur'] . '" >Modifier</a>';
                                    echo '<a href="../../view/profilPatients/supprimerProfilPatients.php?id='  . $valeur['id_Utilisateur'] . '" >Supprimer</a>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            
                            }
                            
                        }
                        Database::disconnect();
                    ?>
                
                </tbody>
            </table>
        </div>   
        <div class="retour">
            <a href="../../view/accueilAdmin/accueilAdmin.php">Retour à la page d'accueil</a>
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