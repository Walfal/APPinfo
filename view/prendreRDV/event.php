<?php
$title = 'Information RDV';
require '../headerFooter/header.php';

require_once '../../model/RDV/events.php';
require_once '../../model/BDD/connexionBDD.php';
require '../../controller/traduction/prendreRDV/event.php';
if(!isset($_SESSION['matricule'])):
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

//Recuppération des tests à faire
$typeTests = query($BDD, "SELECT nom FROM Capteur NATURAL JOIN Test WHERE idRDV = ?", array($event['idRDV']));
?>

<br><br>
<div class="hautdePage">
<p><b><?= $titre ?></b></p>
</div>


<div class="patient">
<h1><?= $patient ?> : <?= $client['prenom'] . ' ' . $client['nom'] ?> </h1>
</div>
<br><br><br>


<table>
	<tr>
		<td class="colonne1" id="premiereLigneCol1"><?= $fiche ?> </td>
		<td id="premiereLigneCol2"><a href="../profil/voirProfilPatients.php?id=<?= $client['matricule']?>" class="profil"><?= $client['prenom'] . ' ' . $client['nom'] ?></a></td>
	</tr>
	<tr>
		<td class="colonne1"><?= $date1 ?></td>
		<td><?php
			setlocale(LC_TIME, 'fr_FR.utf-8','fra'); 
			$date = new DateTime($event['debut']);
			echo (strftime("%A %e %B %Y", date_timestamp_get($date))); ?></td>
	</tr>
	<tr>
		<td class="colonne1"><?= $heureD ?></td>
		<td id="milieuLigneCol2"><?= (new DateTime($event['debut'])) -> format('H:i'); ?></td>
	</tr>
	<tr>
		<td class="colonne1"><?= $heureF ?></td>
		<td><?= (new DateTime($event['fin'])) -> format('H:i'); ?></td>
	</tr>
	<tr>
		<td class="colonne1" id="derniereLigneCol1"><?= $test1 ?> :</td>
		<td id="derniereLigneCol2">
		<?php 
			foreach($typeTests as $typeTest){
				echo $typeTest['nom'] . '<br>';
			}
		?></td>
	</tr>
</table>



<br><br><br><br>

<?php require '../headerFooter/footer.php' ?>
