<?php

function envoieMessage(){
	if(!empty($_POST)){
		extract($_POST);
		$valid = true;

		if(isset($_POST['Envoyer'])){
			$message = (String) trim($message);
		}
		if(empty($message)){
			$valid = false;
			$err_message = "Veuillez remplir ce champ !"; 
			echo $err_message;
		}
		
		if($valid){
			$req = $BDD->prepare("INSERT INTO Message (date, contenu, idConversation, matricule) VALUES (?, ?, ?, ?)");
			
			$req->execute(array(date('Y-m-d H:i:s'), $message, 1, 2));
		}
	}
}