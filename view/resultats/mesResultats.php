<?php
$title = "Mes résultats";
require_once '../../view/headerFooter/header.php';
require_once '../../model/BDD/connexionBDD.php';
require_once '../../controller/traduction/resultats/resultats.php';

if(!isset($_SESSION['matricule'])):
	header('Location: ../login/login.php');
endif;

$matricule = (isset($_GET['id']) && $_SESSION['matricule'] < 20) ? $_GET['id'] : $_SESSION['matricule'];
$req = query($BDD, "SELECT debut, resultat, nom FROM PriseRDV NATURAL JOIN (Test NATURAL JOIN Capteur) WHERE matricule = ? ORDER BY debut", [$matricule]);
$tests = $req->fetchAll();
$nom = recuperationUneDonnee($BDD, "Personne", "matricule", $matricule);
$nom = $nom["nom"];

if(isset($_GET['id'])):
	$id = $_GET['id'];
else:
	$id = '0';
endif;
?>

<link href="mesResultats.css" rel="stylesheet" />

<div class="title">
	<h1><?= $titre ?></h1>
	<img src="../images/icons/result.svg" alt="fiche de résultats" class="result-img" />
</div>
<div>
	<div class="results">
		<div class="result">
			<div class="date">
				<img src="../images/icons/calendarWhite.svg" alt="calendrier" class="calendar" />
				<h2><?= $date ?></h2>
			</div>
			<place>
				<centre>
					<img src="../images/icons/home.svg" alt="maison" class="home" />
					<h2><?= $centre ?></h2>
				</centre>
				<a class="getResults" href="resultatsCentre.php?id=<?= $id ?>">
					<?= $consulter ?>
				</a>
			</place>
		</div>
	</div>
</div>
<table class="resultat">
<thead>
	<tr>
		<th><?= $test1 ?></th>
		<th><?= $resultats ?></th>
		<th><?= $date ?></th>
		<!-- <th>Trame</th> -->
		<th><?= $nom1 ?></th>
		</thead>
	</tr>
	<?php foreach($tests as $test): ?>
		<tr>
		<td data-label="Type de test :"><?= $test['nom'];?></td>
		<td data-label="Résultat :"><?= $test['resultat'];?></td>
		<td data-label="Date :">
		<?php 
			setlocale(LC_TIME, 'fr_FR.utf-8','fra');
			$date = new DateTime($test['debut']);
			echo (strftime("%A %e %B %Y %k:%M", date_timestamp_get($date)));?></td>
		<td data-label="Nom du patient :"><?= $nom ?></td>
		</tr>
	<?php endforeach ?>
</table>
<?php
	require_once '../../view/headerFooter/footer.php';
?>
