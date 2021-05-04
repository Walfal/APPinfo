<?php

class EventGS{

	private $id;
	private $matricule;
	private $type;
	private $date;
	private $debut;
	private $fin;

	public function getId() : int{
		return $this->id;
	}

	public function getMatricule() : string{
		return $this->matricule;
	}

	public function getType() : ?string{
		return $this->type;
	}

	public function getDate() : Date{
		return new Date($this->date);
	}

	public function getDebut() : DateTime{
		return new DateTime($this->debut);
	}

	public function getFin() : DateTime{
		return new DateTime($this->fin);
	}



	public function setMatricule(string $matricule){
		$this->matricule=$matricule;
	}

	public function setType(string $type){
		$this->type=$type;
	}

	public function setDate(string $date){
		$this->date=$date;
	}
	public function setDebut(string $debut){
		$this->debut=$debut;
	}
	
	public function setFin(string $fin){
		$this->fin=$fin;
	}
}