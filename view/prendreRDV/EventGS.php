<?php

class EventGS{

	private $id;

	private $name;

	private $description;

	private $date;

	private $start;

	private $end;

	public function getId() : int{
		return $this->id;
	}

	public function getName() : string{
		return $this->name;
	}

	public function getDescription() : ?string{
		return $this->description;
	}

	public function getDate() : Date{
		return new Date($this->date);
	}

	public function getStart() : DateTime{
		return new DateTime($this->start);
	}

	public function getEnd() : DateTime{
		return new DateTime($this->end);
	}




	public function setName(string $name){
		$this->name=$name;
	}

	public function setDescription(string $description){
		$this->description=$description;
	}

	public function setDate(string $date){
		$this->date=$date;
	}
	public function setStart(string $start){
		$this->start=$start;
	}
	
	public function setEnd(string $end){
		$this->end=$end;
	}





}