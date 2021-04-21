<?php

include_once('../model/connexionBDD.php');

$matriculeTest = 2*rand(0,1);
$envoieTest = 2 - $matriculeTest;
$messageTest = date('Y-m-d H:i:s');
$rand = rand(1, 5);
for($i = 0; $i < $rand; $i++){
	$messageTest .= "<br>.";
}

if(!empty($_POST)){
	extract($_POST);
	$valid = true;

	if(isset($_POST['Envoyer'])){
		$message = (String) trim($message);
	}
	if(empty($message)){
		//$valid = false;
		//$err_message = "Veuillez remplir ce champ !";
		$message = $messageTest;
	}
	
	if($valid){
		$req = $BDD->prepare("INSERT INTO Message (date, contenu, matricule, envoyeA) VALUES (?, ?, ?, ?)");
		
		$req->execute(array(date('Y-m-d H:i:s'), $message, $matriculeTest, $envoieTest));
	}
}




if($message['matricule'] == $matriculeTest): ?>
	<p class="envoye">
<?php else:?>
	<p class="recu">
<?php endif ?>
<?= nl2br($message) ?></p>