<?php
class connexionBDD{
	//BDD en ligne:
	private $HOST = 'scriptis.fr';
	private $NAME = 'raph';
	private $USER = 'raph';
	private $PASS = 'kErUxmg6XwkWRR';

	//BDD local:
	/* private $HOST = 'localhost';
	private $NAME = 'APPinfo';
	private $USER = 'root';
	private $PASS = ''; */ 

	private $connexion;

	function __construct($HOST = null, $NAME = null, $USER = null, $PASS = null){
		if($HOST != null){
			$this->HOST = $HOST;
			$this->NAME = $NAME;
			$this->USER = $USER;
			$this->PASS = $PASS;
		}
		try{
			$this->connexion = new PDO('mysql:host=' . $this->HOST . ';dbname=' . $this->NAME,
			$this->USER, $this->PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8MB4',
			PDO::ATTR_ERRMODE => PDO:: ERRMODE_WARNING));
		}catch(PDOException $e){
			echo 'Erreur : Impossible de se connecter à la BDD !';
			die();
		}
	}
	public function connexion(){
		return $this->connexion;
	}

}
$DB = new connexionBDD();
$BDD = $DB->connexion();


function recuperationUneDonnee($BDD, $table, $where, $where2){
	$req = $BDD -> prepare("SELECT * FROM $table WHERE $where = ?");
	$req -> execute(array($where2));
	return $req -> fetch();
}

function recuperationDesDonnees($BDD, $table, $where, $where2){
	$req = $BDD -> prepare("SELECT * FROM $table WHERE $where = ?");
	$req -> execute(array($where2));
	return $req -> fetchAll();
}

function recuperationDesTests($BDD, $where2){
	$req = $BDD -> prepare("SELECT test FROM PriseRDV WHERE debut = '$where2'");
	$req -> execute();
	return $req -> fetchAll();
}

function recuperationMessages($BDD, $idConversation){
	$req = $BDD->prepare("SELECT * FROM Message WHERE idConversation = ? ORDER BY date");
	$req -> execute(array($idConversation));
	return $req->fetchAll();
}

function recuperationConversationsAdmin($BDD){
	$req = $BDD->prepare("SELECT * FROM Conversation ORDER BY idConversation");
	$req -> execute();
	return $req->fetchAll();
}


function envoieMessage(){
	if(!empty($_POST)){
		extract($_POST);
		$valid = true;

		if(isset($_POST['Envoyer'])){
			$message = (String) trim($message);
		}
		if(empty($message)){
			$valid = false;
			$err_message = "Veuillez remplir ce champ !"; 
			echo $err_message;
		}
		
		if($valid){
			$req = $BDD->prepare("INSERT INTO Message (date, contenu, idConversation, matricule) VALUES (?, ?, ?, ?)");
			$req->execute(array(date('Y-m-d H:i:s'), $message, 1, 2));
		}
	}
}

function query($BDD, $sql, $data = array()){
	$req = $BDD -> prepare($sql);
	$req -> execute($data);
	return $req;
}

function insert($BDD, $sql, $data = array()){
	$req = $BDD -> prepare($sql);
	$req -> execute($data);
}

//pour vérifier donnée qui vient de l'extérieur
function checkInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = htmlentities($data);
	return $data;
}