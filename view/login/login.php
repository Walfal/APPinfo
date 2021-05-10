<<<<<<< HEAD
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Login</title>
		<link href="login.css" rel="stylesheet" />
		<link href="../headerFooter.css" rel="stylesheet" />
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
					<li><a href="../services/services.php">Services</a></li>
					<li><a href="../quiSommesNous/quiSommesNous.php">About Us</a></li>
					<li><a href="../contactezNous/contactezNous.php">Contact Us</a></li>
					<li><a href="#">FAQ</a></li>
					<li>
						<a href="#">
							<img class="bi bi-globe" src="../images/icons/language.svg" style="width: 25px" />
						</a>
					</li>
					<li>
						<a href="../login/login.php"
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
		<section class="sections home text-center">
			<div class="box">
				<div class="container">
					<form method="POST" class="form">
						<div class="imageForm">
							<img class="img" src="../images/icons/utilisateur.png" alt="" />
						</div>
						<div class="username">
							<label>Username</label>
						</div>
						<div class="textArea">
							<input type="text" />
						</div>
						<div class="mail">
							<label>Email</label>
						</div>
						<div class="textArea">
							<input type="text" />
						</div>
						<div class="password">
							<label>Password</label>
						</div>
						<div class="textArea">
							<input type="password" />
						</div>
						<div>
							<button class="button" type="submit">Connect</button>
						</div>
					</form>
				</div>
			</div>
		</section>
	</body>
=======
<?php
$title = 'Connectez vous';
require_once '../headerFooter/header.php';
>>>>>>> Raph

require_once '../../model/Login/loginUtilisateurs.php';
?>

<link href="login.css" rel="stylesheet" />

<section class="sections home text-center">
	<div class="box">
		<form method="POST" class="form">
			<div class="imageForm">
				<a href="../"><img class="img" src="../images/logo/logo.png" alt="logo sensair" /></a>
			</div>
			<div class="contenu">
				<!--affiche un message d'erreur-->
				<div class="entrer">
					<?php if($verif): ?>
					<div class="erreur"><?= $verif ?></div>
					<?php endif ?>
					<p>Veuillez entrer vos identifiants:</p>
					<div class="textArea">
						<input type="text" name="mail" id="mail" placeholder="mail" />
					</div>
					<div class="textArea">
						<input type="password" name="password" id="password" placeholder="Mot de passe"/>
					</div>
				</div>
			
				<div>
					<button class="button" type="submit" name="submit">Se connecter</button>
				</div>
			</div>
			
		</form>
	</div>
</section>

<?php require_once '../headerFooter/footer.php'; ?>
