<?php
	require_once '../../model/Login/loginUtilisateurs.php';
	require_once '../header/header.php';

?>

<link href="login.css" rel="stylesheet" />
		<section class="sections home text-center">
			<div class="box">
				<form method="POST" class="form">
					<div class="imageForm">
						<img class="img" src="../images/logo/logo.png" alt="" />
					</div>
					<div class="contenu">
						<!--affiche un message d'erreur-->
						<div class="entrer">
							<?php if($verif): ?>
							<div class="erreur"><?= $verif ?></div>
							<?php endif ?>
							<div class="textArea">
								<input type="text" name="mail" id="mail" placeholder="Email" />
							</div>
							<!--<div class="mail">
							<label>Email</label>
							</div>
							<div class="textArea">
							<input type="email" name="email"/>
							</div>-->
							<div class="textArea">
								<input type="password" name="mdp" id="mdp" placeholder="Mot de passe"/>
							</div>
						</div>
					
						<div>
							<button class="button" type="submit" name="submit">Se connecter</button>
						</div>
					</div>
					
				</form>
			</div>
		</section>

<?php require_once '../footer/footer.php'; ?>
