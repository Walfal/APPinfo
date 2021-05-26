<?php
$title = 'Mes résultats';
require_once '../headerFooter/header.php';
require '../../controler/traduction/resultats/resultatsTrad.php';
if(!isset($_SESSION['matricule'])):
    header('Location: ../login/login.php');
endif;

require_once '../../model/BDD/connexionBDD.php';
$matriculeTest = $_SESSION['matricule'];
$matricule = $matriculeTest;

$rdvs = recuperationDesDonnees($BDD, "PriseRDV", "matricule", $_SESSION['matricule']);
//$tests = recuperationDesDonnees($BDD, "Test", );
$nom = recuperationUneDonnee($BDD,"Personne", "matricule", $_SESSION['matricule']);
?>

<link href="mesResultats.css" rel="stylesheet"/>

<div class="title">
	<h1><?php echo $titre ?></h1>
	<img src="../images/icons/result.svg" alt="fiche de résultats" class="result-img" />
</div>
<div>
	<div class="results">
		<div class="result">
			<div class="date">
				<img src="../images/icons/calendarWhite.svg" alt="calendrier" class="calendar" />
				<h2><?php echo $date ?></h2>
			</div>
			<place>
				<centre>
					<img src="../images/icons/home.svg" alt="maison" class="home" />
					<h2><?php echo $centre ?></h2>
				</centre>
				<button class="getResults">
				<?php echo $consulter ?>
				</button>
				
			</place>
		</div>
	</div>
</div>
<table class="resultat">
	<thead>
		<tr>
			
			<th><?php echo $test1 ?></th>
			<th><?php echo $resultats ?></th>
			<th><?php echo $date ?></th>
			<!-- <th>Trame</th> -->
			<th><?php echo $nom1 ?></th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach($rdvs as $rdv):
				$tests = recuperationDesDonnees($BDD, "Test NATURAL JOIN Capteur", "idRDV", $rdv['idRDV']);
				foreach($tests as $test): 
				?>
					<tr>
					<td><?= $test['nom'];?></td>
					<td><?= $test['resultat'];?></td>
					<td><?php
					setlocale(LC_TIME, 'fr_FR.utf-8','fra'); 
					$date = new DateTime($rdv['debut']);
					echo (strftime("%A %e %B %Y %k:%M", date_timestamp_get($date)));
					?></td>
					<!-- <td><?php //echo $test['trame'];?></td> -->
					<td><?= $nom['nom'];?></td>
					</tr>
				<?php endforeach;
			endforeach; ?>
	</tbody>
</table>

<?php require_once '../headerFooter/footer.php'; ?>