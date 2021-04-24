<?php

include_once('../model/connexionBDD.php');

$messageTest = date('Y-m-d H:i:s');
$rand = rand(1, 5);
for($i = 0; $i < $rand; $i++){
	$messageTest .= "<br>.";
}

if(!empty($_POST)){
	extract($_POST);
	$valid = true;
	/*
	if(isset($_POST['Envoyer'])){
		$message = (String) trim($message);
	}*/
	if(empty($message)){
		//$valid = false;
		//$err_message = "Veuillez remplir ce champ !";
		$message = $messageTest;
	}

	if(!empty($titre)):
		$req = $BDD->prepare("INSERT INTO Conversation (titre) VALUES (?)");
		$req->execute(array($titre));


		$req = $BDD->prepare("SELECT idConversation FROM Conversation ORDER BY idConversation DESC");
		$req->execute();
		$idConversation = $req->fetch();
		$idConversation = $idConversation['idConversation'];
	endif;

	
	if($valid){
		$req = $BDD->prepare("INSERT INTO Message (date, contenu, matricule, idConversation) VALUES (?, ?, ?, ?)");
		$req->execute(array(date('Y-m-d H:i:s'), $message, $id, $idConversation));
	}
}	
?>


<p class="envoye">
<?= nl2br($message) ?>
</p>