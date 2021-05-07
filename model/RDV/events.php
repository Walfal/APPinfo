<?php
class Events {

	// trouver les évenements entre deux dates
	public function getEventsBetween($BDD, \DateTime $debut, \DateTime $fin): array {
		$sql = "SELECT * FROM PriseDeRDV WHERE debut BETWEEN '{$debut -> format('Y-m-d 00:00:00')}' AND '{$fin -> format('Y-m-d 23:59:59')}' GROUP BY debut ";
		$req = query($BDD, $sql);
		return $req -> fetchAll();
	}

	// trouver les évènements entre deux date indexés par jours 
	public function getEventsBetweenByDay($BDD, \DateTime $debut, \DateTime $fin): array {

		$events = $this -> getEventsBetween($BDD, $debut, $fin);
		$days= [];
		foreach($events as $event){
			$date = explode(' ', $event['debut'])[0];
			if (!isset($days[$date])){
				$days[$date] = [$event];
			} else {
				$days[$date][] = $event;
			}
		}
		return $days;
	}

	//recup un événement
	public function find($BDD, int $idRDV):array {
		//require_once '../../model/BDD/connexionBDD.php';
		$statement = query($BDD, "SELECT * FROM PriseDeRDV WHERE idRDV = $idRDV");
		//$statement -> setFetchMode(PDO::FETCH_CLASS, EventGS::class);
		return $statement -> fetch();
	}
}