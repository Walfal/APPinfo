<?php



class Month{

	private $months = ['Janvier', 'Février', 'Mars', 'Avril','Mai','Juin','Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
	public $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
	public $month;
	public $year;
	


	/**
	 * Month constructor
	 * @param int $month le mois est compris entre 1 et 12
	 * @param int $year l'année
	 * @throws \Exception 
	 */

	public function __construct(int $month = null, $year = null) 
	{
		if ($month===null || $month < 1 || $month> 12){
			$month = intval(date('m'));
		}
		if ($year === null){
			$year = intval(date('Y')); //convertit la valeur en entier
		}

		if ($month <1 || $month > 12){
			throw new \Exception ("Le mois $month n'est pas valide");
		}
		if ($year < 1970){
			throw new \Exception("L'année $year n'est pas valide");
		}
		$this -> month = $month;
		$this -> year = $year;
	}

	/**
	 * @return string
	 */

	public function toString(): string{
		return $this->months[$this->month - 1] . ' ' . $this->year;
	}

	/**
	 * retourne le premier jour du mois
	 * @return string
	 */
	public function getStartingDay() :\DateTime{
		return new \DateTime("{$this->year}-{$this->month}-01");
	}

	/**
	 * renvoie le nobre de semaines dans un mois
	 */

	public function getWeeks(): int { //utilise date/time (on prend date format)
		$start = $this->getStartingDay();
		$end = (clone $start) -> modify('+1 month -1 day');
		$startWeek = intval($start->format('W'));
		$endWeek = intval($end->format('W'));
		if ($endWeek === 1){
			$endWeek = intval((clone $end)->modify('- 7 days')->format('W')) + 1;
		}
		$weeks =  $endWeek - $startWeek +1;
		if ($weeks < 0){ 	
			$weeks = intval($end->format('W'));
		}
		return $weeks;
	}

	/** 
	 * Vérifie si le jour est dans le mois
	 * @param \DateTime $date
	 * @return bool
	 */

	public function withinMonth (\DateTime $date) : bool {
		return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
	}

	/**
	 * renvoie le mois suivant
	 * @return Month
	 */

	public function nextMonth(): Month{
		$year = $this->year;
		$month = $this->month + 1;
		if ($month > 12) {
			$month = 1;
			$year += 1;
		}
		return new Month($month, $year);
	}

	
	/**
	 * renvoie le mois d'avant
	 * @return Month
	 */ 


	public function previousMonth(): Month{
		$year = $this->year;
		$month = $this->month - 1;
		if ($month < 1) {
			$month = 12;
			$year -= 1;
		}
		return new Month($month, $year);
	}

}

?>
	