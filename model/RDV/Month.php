<?php

class Month{

	public $month;
	public $year;

	/**
	 * Month constructor
	 * @param int $month le mois est compris entre 1 et 12
	 * @param int $year l'année
	 * @throws \Exception 
	 */

	public function __construct($mois, $jours, int $month = null, $year = null) 
	{
		if ($month === null || $month < 1 || $month > 12){
			$month = intval(date('m'));
		}
		if ($year === null){
			$year = intval(date('Y')); //convertit la valeur en entier
		}

		if ($month < 1 || $month > 12){
			throw new \Exception ("Le mois $month n'est pas valide");
		}
		if ($year < 1970){
			throw new \Exception("L'année $year n'est pas valide");
		}
		$this -> month = $month;
		$this -> year = $year;
		$this -> months = $mois;
		$this -> days = $jours;
	}

	/**
	 * @return string
	 */

	public function toString(): string{
		return $this -> months[$this -> month - 1] . ' ' . $this -> year;
	}

	/**
	 * retourne le premier jour du mois
	 * @return string
	 */
	public function getStartingDay() : \DateTime{
		return new \DateTime("{$this -> year}-{$this -> month}-01");
	}

	/**
	 * renvoie le nobre de semaines dans un mois
	 */

	public function getWeeks(): int { //utilise date/time (on prend date format)
		$startMonth = $this -> getStartingDay();
		$endMonth = (clone $startMonth) -> modify('+1 month -1 day');
		$startWeek = intval($startMonth -> format('W'));
		$endWeek = intval($endMonth -> format('W'));
		if ($endWeek === 1){
			$endWeek = intval((clone $endMonth) -> modify('- 7 days') -> format('W')) + 1;
		}
		$weeks =  $endWeek - $startWeek + 1;
		if ($weeks < 0){ 	
			$weeks = intval($endMonth -> format('W')) + 1;
		}
		return $weeks;
	}

	/** 
	 * Vérifie si le jour est dans le mois
	 * @param \DateTime $date
	 * @return bool
	 */

	public function withinMonth (\DateTime $date) : bool {
		return $this -> getStartingDay()->format('Y-m') === $date -> format('Y-m');
	}

	/**
	 * renvoie le mois suivant
	 * @return Month
	 */

	public function nextMonth(){
		$year = $this -> year;
		$month = $this -> month + 1;
		if ($month > 12) {
			$month = 1;
			$year += 1;
		}
		return "?month=" . $month . "&year=" . $year;
	}

	/**
	 * renvoie le mois d'avant
	 * @return Month
	 */ 

	public function previousMonth(){
		$year = $this -> year;
		$month = $this -> month - 1;
		if ($month < 1) {
			$month = 12;
			$year -= 1;
		}
		return "?month=" . $month . "&year=" . $year;
	}
}
?>
	