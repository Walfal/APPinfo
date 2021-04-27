<?php $title = Calendrier;
require_once '../headerFooter/header.php';
?>

<link rel="stylesheet" href="calendrier.css">

<br><br>
<?php

require_once 'bootstrap.php';
require_once '../prendreRDV/Month.php';
//require_once '../prendreRDV/events.php';


//$events = new Events();
$month = new  Month($_GET['month'] ?? null, $_GET['year'] ?? null); // ?? : prend la première valeur si elle est définie sinon elle prend la valeur null
$start = $month->getStartingDay();
$start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');
$weeks =$month->getWeeks();
$end = (clone $start)->modify( '+' . (6 +7*$weeks-1). 'days');
//$events = $events->getEventsBetweenByDay($start, $end );
?>

<div class="titre">
	<h1> <?php echo $month -> toString() ?> </h1>
	<div class = fleche>
		<button class = fleche>
		<a class ="flecheG" href="/view/prendreRDV/calendrier.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year;?> "> &lt;</a></button>
		<button class = fleche>
		<a class ="flecheD" href="/view/prendreRDV/calendrier.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year;?> ">&gt;</a></button>
	</div>
</div>
<br>
<table class="calendar">
	<?php for($i = 0; $i < $weeks; $i++): ?>
		<tr>
			<?php 	
				foreach($month -> days as $k => $day):
				$date = (clone $start)-> modify("+" . ($k +$i * 7) . "days");
					$eventsForDay = $events[$date -> format('Y-m-d')] ?? [];
			?>
			<td class="<?= $month->withinMonth($date) ? ' ' : 'calendar_othermonth'?>">
				<?php if( $i === 0) : ?> 	<!-- pour afficher les jours en haut -->
					<div class="calendar_weekday"><?php  echo  $day; ?></div>
				<?php endif ?>
				<div class="calendar_day"><?php echo $date->format('d'); ?></div>
				<?php foreach($eventsForDay as $event) : ?>
				<div class="calendar_event">
					<?php echo (new DateTime ($event['start']))->format('H:i') ?> - <a href="/view/prendreRDV/event.php?id=<?=  $event['id'];?>"><?= $event['name']; ?> </a>
				</div>
				<?php endforeach ?>
			</td>
			<?php endforeach; ?>
		</tr>
	<?php endfor; ?>
	</table>
	<br>

	<a href="ajouterRDV.php" class = "calendar_button">+</a>

<br><br><br><br>
<?php require '../headerFooter/footer.php' ?>