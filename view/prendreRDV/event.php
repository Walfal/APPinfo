<?php
$title = 'Information RDV';
require '../headerFooter/header.php';

require_once '../../model/RDV/events.php';
require_once '../../model/RDV/bootstrap.php';
require_once '../../model/BDD/connexionBDD.php';

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
$heure = $event['debut'];
$memeHeure = recuperationDesTests($BDD, "$heure");

?>

<br><br>
<div class="hautdePage">
<p><b>Information sur le RDV </b></p>
</div>


<div class="patient">
<h1>Patient : <?= $client['prenom'] . ' ' . $client['nom'] ?> </h1>
</div>
<br><br><br>


<table>
	<tr>
		<td>Fiche complète du patient </td>
		<td><a href="../profil/voirProfilPatients.php" class="profil"><?= $client['prenom'] . ' ' . $client['nom'] ?></a></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><?= (new DateTime($event['debut'])) -> format('d/m/Y'); ?></td>
	</tr>
	<tr>
		<td>Heure de démarage</td>
		<td><?= (new DateTime($event['debut'])) -> format('H:i'); ?></td>
	</tr>
	<tr>
		<td>Heure de fin</td>
		<td><?= (new DateTime($event['fin'])) -> format('H:i'); ?></td>
	</tr>
	<tr>
		<td>Test(s) à faire :</td>
		<td>
		<?php 
			foreach($memeHeure as $memeTest){
		
				if ($memeTest['test'] == 0){
					echo "Fréquence cardiaque  <br>";}
				if ($memeTest['test'] == 1){
					echo "Temps de réaction à une lumière <br>";
				}
				if ($memeTest['test'] == 2){
					echo "Temps de réaction à un son  <br>";
				}
				if ($memeTest['test'] == 3){
					echo "Température corporelle  <br>";
				}
				if ($memeTest['test'] == 4){
					echo "Reconnaissance de tonalitée  <br>";
				}
			}
				?></td>
	</tr>
</table>



<br><br><br><br>



<?php require '../headerFooter/footer.php' ?>
