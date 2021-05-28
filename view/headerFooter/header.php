<?php 
session_start();


if (isset($_POST['langue'])){
	if($_POST['langue'] == 'fr'){
		if (isset($_SESSION['langue'])){
			unset($_SESSION['langue']);
		}
	}
	else{
	$_SESSION['langue']= $_POST['langue'];
	}
}

require '../../controller/traduction/headerFooter/headeren.php';

?>
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="UTF-8" />
		<title><?= (isset($title)) ? $title : "Sens'air" ?></title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link rel="icon" href="../images/logo/logo.png" />
	</head>
	<!--------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->
	
	<header>
		<div class="wrapper">
			<nav>
				<input id="nav-toggle" type="checkbox" />
				<a href="../"><img class="logo" src="../images/logo/sensair.png" alt="" /></a>
				<ul class="navbar-nar">
        		</ul>
				<ul class="links">
					<li><a href="../"><?= "$accueil" ?></a></li>
					<li><a href="../services/services.php"><?= "$services" ?></a></li>
					<li><a href="../quiSommesNous/quiSommesNous.php"><?= "$aPropos" ?></a></li>
					<li><a href="../messagerie/contactezNous.php"><?= "$contact" ?></a></li>
					<li><a href="../FAQ/FAQ.php"><?= "$FAQ" ?></a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="../images/icons/language.svg" style="width: 25px" />
						</a>
						<ul class="sous">
						<form method="post">
							<li><button class="langue" type ="submit"  name="langue" value="fr">Français</button></li>
							<li><button class="langue" type ="submit"  name="langue" value ="en">English</button></li>
							<li><a href="#">Espanol</a></li>
							<li><a href="#">Deutch</a></li>  
							</form>
						</ul>
					</li>
					<li>
						<a href="../login/login.php">
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