<?php

class connexionBDD{
	private $HOST = 'localhost';
	private $NAME = 'APPinfo';
	private $USER = 'root';
	private $PASS = '';
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
$DB = new connexionBDD;
$BDD = $DB->connexion();


function recuperationMessages($BDD, $idConversation){
	$req = $BDD->prepare("SELECT * FROM Message WHERE idConversation = $idConversation ORDER BY date");
	$req->execute();
	return $req->fetchAll();
}

function recuperationUneDonnee($BDD, $table, $where, $where2){
	$req = $BDD->prepare("SELECT * FROM $table WHERE $where = $where2");
	$req->execute();
	return $req->fetch();
}

function recuperationConversationsAdmin($BDD){
	$req = $BDD->prepare("SELECT * FROM Conversation ORDER BY idConversation");
	$req->execute();
	return $req->fetchAll();
}
