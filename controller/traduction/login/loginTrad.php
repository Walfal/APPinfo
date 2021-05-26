<?php 
if(isset ($_SESSION['langue'])){

if ($_SESSION['langue'] === 'en'){

	$consigne ='Please enter your login details';
	$mail1 ='E-mail';
	$mdp ='Password';
	$login1 ='Log in';



}
}
else {
	$consigne ='Veuillez entrer vos identifiants';
	$mail1 ='E-mail';
	$mdp ='Mot de passe';
	$login1 ='Se connecter';

}



	?>