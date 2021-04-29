<?php
$title = 'Information RDV';
require '../headerFooter/header.php';

require_once '../../model/RDV/events.php';
require_once '../../model/BDD/connexionBDD.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] != 0):
    header('Location: ../login/login.php');
endif;
?>

<link rel="stylesheet" href="infoRDV.css">

<?php 
$events = new Events();
if (!isset($_GET['idRDV'])){
	echo 'page introuvable';
}

$event = $events -> find($BDD, $_GET['idRDV']);
$client = recuperationUneDonnee($BDD, 'Personne', 'matricule', $event['matricule']);
?>

<div class="hautdePage">
<p><b>Information sur le RDV </b></p>
</div>

<br>
<h1 class="patient">Patient : <?= $client['prenom'] . ' ' . $client['nom'] ?> </h1>
<br>

<ul class="vueEvenement">

	<li>Date : <?= (new DateTime($event['debut'])) -> format('d/m/Y'); ?></li>
	<li>Heure de démarage : <?= (new DateTime($event['debut'])) -> format('H:i'); ?></li>
	<li>Heure de fin : <?= (new DateTime($event['fin'])) -> format('H:i'); ?></li>
	<li>Type :	<?= $event['type'] ?></li>

</ul>

<?php require '../headerFooter/footer.php' ?>
