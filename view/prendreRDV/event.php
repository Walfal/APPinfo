


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="infoRDV.css">
        <title>Information RDV</title>
    </head>

<br>

<?php



require 'Events.php';
require '../header/header.php';
require '../prendreRDV/bootstrap.php';
?>

<br>

<?php 
$events = new Events();
if (!isset($_GET['id'])){
	echo 'page introuvable';
}
$event = $events->find($_GET['id']);
?>

<div class="hautdePage">
<p><b>Information sur le RDV </b></p>
</div>

<br>
<h1>Patient : <?= $event['name']; ?> </h1>

<br>

<ul>

	<li>Date : <?= (new DateTime($event['start']))->format('d/m/Y'); ?></li>
	<li>Heure de démarage : <?= (new DateTime($event['start']))->format('H:i'); ?></li>
	<li>Heure de fin : <?= (new DateTime($event['end']))->format('H:i'); ?></li>
	<li>Description : <br>
		<?= $event['description'] ?></li>

</ul>


<?php require '../footer/footer.php' ?>
