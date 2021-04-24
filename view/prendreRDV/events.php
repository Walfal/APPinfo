
<?php





class Events {

	// trouver les évenements entre deux dates
	public function getEventsBetween(\DateTime $start, \DateTime $end): array {
		
		require_once '../prendreRDV/connexionBD.php';

		$sql = "SELECT * FROM events WHERE start BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";
		$req = $DB->query($sql);
		$results = $req->fetchAll();
		//var_dump($results);
		return $results;
	}

	// trouver les évènements entre deux date indexés par jours 
	public function getEventsBetweenByDay(\DateTime $start, \DateTime $end): array {


		$events = $this->getEventsBetween($start, $end);
		$days= [];
		foreach($events as $event){
			$date = explode(' ', $event['start'])[0];
			if (!isset($days[$date])){
				$days[$date] = [$event];
			} else {
				$days[$date][] = $event;
			}
		}
		return $days;
	}


	//recup un événement
public function find(int $id):array {

	require_once '../prendreRDV/connexionBD.php';
	$statement= $DB->query("SELECT * FROM events WHERE id = $id");
	$statement->setFetchMode(PDO::FETCH_CLASS, EventGS::class);
	$result = $statement->fetch();
	return $result;
}




}