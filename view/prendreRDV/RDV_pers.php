<?php $title = Calendrier;
require_once '../headerFooter/header.php';
?>

<link rel="stylesheet" href="calendrier.css">


<?php

require_once '../../model/RDV/bootstrap.php';
require_once '../../model/RDV/Month.php';
require_once '../../model/RDV/events.php';
require_once '../../model/BDD/connexionBDD.php';


$events = new Events();
$month = new  Month($_GET['month'] ?? null, $_GET['year'] ?? null); // ?? : prend la première valeur si elle est définie sinon elle prend la valeur null
$debut = $month -> getStartingDay();
$debut = $debut -> format('N') === '1' ? $debut : $month->getStartingDay()->modify('last monday');
$weeks = $month -> getWeeks();
$fin = (clone $debut)->modify('+' . (6 + 7 * $weeks - 1) . 'days');
$events = $events -> getEventsBetweenByDayPers($BDD, $debut, $fin, $_SESSION['matricule']);
?>

<div class="titre">
	<h1> <?= $month -> toString() ?> </h1>
	<div class = fleche>
		<button class = fleche>
		<a class ="flecheG" href="/view/prendreRDV/calendrier.php?month=<?= $month -> previousMonth() -> month; ?>&year=<?= $month -> previousMonth() -> year;?> "> &lt;</a></button>
		<button class = fleche>
		<a class ="flecheD" href="/view/prendreRDV/calendrier.php?month=<?= $month -> nextMonth() -> month; ?>&year=<?= $month -> nextMonth() -> year;?> ">&gt;</a></button>
	</div>
</div>
<br>
<table class="calendar">
	<?php for($i = 0; $i < $weeks; $i++): ?>
		<tr>
			<?php 	
				foreach($month -> days as $k => $day):
					$date = (clone $debut) -> modify("+" . ($k + $i * 7) . "days");
					$eventsForDay = $events[$date -> format('Y-m-d')] ?? [];
			?>
			<td class="<?= $month -> withinMonth($date) ? ' ' : 'calendar_othermonth'?>">
				<?php if( $i === 0) : ?> 	<!-- pour afficher les jours en haut -->
					<div class="calendar_weekday"><?= $day; ?></div>
				<?php endif ?>
				<div class="calendar_day"><?= $date->format('d'); ?></div>
				<?php foreach($eventsForDay as $event) :
					$client = recuperationUneDonnee($BDD, 'Personne', 'matricule', $event['matricule']);
					?>
				<div class="calendar_event">
					<?= (new DateTime ($event['debut']))->format('H:i') ?> - <a href="/view/prendreRDV/event.php?idRDV=<?=  $event['idRDV'];?>"><?= $client['prenom'] . ' ' . $client['nom'] ?> </a>
				</div>
				<?php endforeach ?>
			</td>
			<?php endforeach; ?>
		</tr>
	<?php endfor; ?>
	</table>
	<br>
	
<?php require '../headerFooter/footer.php' ?>