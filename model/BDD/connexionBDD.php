<?php
class connexionBDD{
	//BDD en ligne:
	private $HOST = 'scriptis.fr';
	private $NAME = 'raph';
	private $USER = 'raph';
	private $PASS = 'kErUxmg6XwkWRR';

	


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


function recuperationToutesDonnees($BDD, $table){
	$req = $BDD -> prepare("SELECT * FROM $table");
	$req -> execute();
	return $req -> fetchAll();
}


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

function recuperationMessages($BDD, $idConversation){
	$req = $BDD->prepare("SELECT * FROM Message WHERE idConversation = ? ORDER BY date");
	$req -> execute(array($idConversation));
	return $req->fetchAll();
}

function recuperationConversationsAdmin($BDD){
	$req = $BDD->prepare("SELECT * FROM Conversation ORDER BY idConversation DESC");
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

function updateResultats($BDD, $t, $o, $r, $c, $typeCapteur, $v, $resultat, $x, $year, $month, $day, $hour, $min, $sec){
	$date = $year . "-" . $month . "-" . $day . " " . $hour . ":" . $min . ":" . $sec;
	$resultat2 = hexdec($resultat);
	$req = $BDD -> prepare("SELECT idRDV FROM PriseRDV WHERE debut <= ? AND ? <= fin");
	$req -> execute([$date, $date]);
	$rdv= $req -> fetch();
	$idRDV = $rdv["idRDV"];
	$req = $BDD -> prepare("UPDATE Test SET `resultat` = '$resultat2'  WHERE idRDV = ? AND idCapteur = ?");
	$req -> execute([$idRDV, $typeCapteur]);
	$req = $BDD -> prepare("SELECT * FROM Test WHERE idRDV = ?");
	$req -> execute([$idRDV]);
	$out= $req -> fetchAll();
}
