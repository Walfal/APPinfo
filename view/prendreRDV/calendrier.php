<?php $title = 'Calendrier';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule'])):
    header('Location: ../login/login.php');
endif;
?>
<link rel="stylesheet" href="calendrier.css">
<br><br>
<?php

require_once '../../controller/RDV/Month.php';
require_once '../../model/RDV/events.php';
require_once '../../model/BDD/connexionBDD.php';
require '../../controller/traduction/prendreRDV/JourMois.php';

$events = new Events();
$month = new  Month($mois, $jours, $_GET['month'] ?? null, $_GET['year'] ?? null); // ?? : prend la première valeur si elle est définie sinon elle prend la valeur null
$debut = $month -> getStartingDay();
$debut = $debut -> format('N') === '1' ? $debut : $month -> getStartingDay() -> modify('last monday');
$weeks = $month -> getWeeks();
$fin = (clone $debut)->modify('+' . (6 + 7 * $weeks - 1) . 'days');
	if($_SESSION['matricule'] < 20){
	$events = $events -> getEventsBetweenByDay($BDD, $debut, $fin);
	}
	else {
		$events = $events -> getEventsBetweenByDayPers($BDD, $debut, $fin, $_SESSION['matricule']);
	}
?>

<div class="titre">
	<h1> <?= $month -> toString() ?> </h1>
	<div class = fleche>
		<button class = fleche>
		<a class ="flecheG" href="calendrier.php<?= $month -> previousMonth() ?>"> &lt;</a></button>
		<button class = fleche>
		<a class ="flecheD" href="calendrier.php<?= $month -> nextMonth()?>" >&gt;</a></button>
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
				<!--mettre en valeur le jour  -->
				<div class="calendar_day <?php 
				if($date->format('Y-m-d') === date('Y-m-d')){echo 'active';}
				?> " ><?= $date->format('d'); ?></div>
				<?php foreach($eventsForDay as $key=>$event) :
					$client = recuperationUneDonnee($BDD, 'Personne', 'matricule', $event['matricule']);
					?>
				<div class="calendar_event">
					<?= (new DateTime ($event['debut'])) -> format('H:i') ?> - <a class = "essai" href="event.php?idRDV=<?=  $event['idRDV'];?>"><?= $client['prenom'] . ' ' . $client['nom'] ?> </a>

				</div>
				<?php endforeach ?>
			</td>
			<?php endforeach; ?>
		</tr>
	<?php endfor; ?>
	</table>
	<br>
	<?php if($_SESSION['matricule'] < 20): ?>
		<a href="ajouterRDV.php" class = "calendar_button">+</a>
	<?php endif; ?>

<br><br><br><br>
<?php require '../headerFooter/footer.php' ?>