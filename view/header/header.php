<?php 
//demarrer une session si elle n'est pas démarrer
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title><?php 
            if (isset($title)) { //si le titre est défini
                echo $title;
            }else {
                echo 'Sensair';
        }  ?></title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		
		<link rel="icon" href="../images/logo/logo.png" />
	</head>
	<!-- -------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->
	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="../"><img class="logo" src="../images/logo/sensair.png" alt="" /></a>
				<ul class="navbar-nar">
        
      </ul>
				<ul class="links">
				<li><a href="../">Home</a></li>
					<li><a href="../services/services.php">Services</a></li>
					<li><a href="../quiSommesNous/quiSommesNous.php">About Us</a></li>
					<li><a href="../contactezNous/contactezNous.php">Contact Us</a></li>
					<li><a href="../faq/faq.php">FAQ</a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="../images/icons/language.svg" style="width: 25px" />
						</a>
					</li>
					<li>
						<a href="../login/login.php"><!--lorsque l'on clique on doit être connecté sinon on est redirigé sur la page de login-->
                        <img class="bi bi-globe" src="../images/icons/account.svg" style="width: 25px"
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