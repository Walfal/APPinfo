<?php
$title = 'Connectez vous';
require_once '../headerFooter/header.php';
require_once '../../controller/traduction/login/login.php';
require_once '../../controller/fonctions.php';
require_once '../../controller/Login/loginUtilisateurs.php';
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
					<p><?= $consigne ?>:</p>
					<div class="textArea">
						<input type="text" name="mail" id="mail" placeholder="<?= $mail1 ?>" />
					</div>
					<div class="textArea">
						<input type="password" name="password" oninput="verifmdp()" id="password" placeholder="<?= $mdp ?>"/><br>
						<label class="validMdp" id="invalide"></label>
					</div>
				</div>
			
				<div>
					<button class="button" type="submit" name="submit"><?= $login1 ?></button>
				</div>
			</div>
			
		</form>
	</div>
</section>

<script>
	function verifmdp(){
		var motDepasse = document.getElementById("password").value;
		if (motDepasse.length < 8){
			document.getElementById("invalide").innerHTML ="Veuilliez entrer un mot de passe plus long";
			document.getElementById("invalide").style.color = "red";
			motDepasse.focus();
		
		}
		/*if (!motDepasse.match(//)){  //`~!@#$%^&*()_+-=[]\{}|;’:”,./<>?£ //
			document.getElementById("invalide").innerHTML ="Veuilliez entrer un mot de passe contenant un caractère spécial";
			document.getElementById("invalide").style.color = "red";
		}*/
		if (!motDepasse.match(/[1-9]/)){
			document.getElementById("invalide").innerHTML ="Veuilliez entrer un mot de passe contenant au moins un chiffre";
			document.getElementById("invalide").style.color = "red";
			motDepasse.focus();
		}
		if (!motDepasse.match(/[A-Z]/)){
			document.getElementById("invalide").innerHTML ="Veuilliez entrer un mot de passe contenant au moins une majuscule";
			document.getElementById("invalide").style.color = "red";
			motDepasse.focus();
		}
	else{
		document.getElementById("invalide").innerHTML ="Mot de passe valide";
		document.getElementById("invalide").style.color = "green";
	}
	}

</script>


<?php require_once '../headerFooter/footer.php'; ?>
