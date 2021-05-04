<?php
$title = 'Mes résultats';
require_once '../headerFooter/header.php';

<<<<<<< HEAD
=======
if(!isset($_SESSION['matricule'])):
    header('Location: ../login/login.php');
endif;

>>>>>>> Raph
require_once '../../model/BDD/connexionBDD.php';
$matriculeTest = $_SESSION['matricule'];
$matricule = $matriculeTest;

$test = recuperationDesDonnees($BDD, "Test", "matricule", $matriculeTest);
$nom = recuperationUneDonnee($BDD,"Personne", "matricule", $matricule);
?>

<link href="mesResultats.css" rel="stylesheet"/>

<div class="title">
<<<<<<< HEAD
    <h1>Mes résultats</h1>
    <img src="../images/icons/result.svg" alt="fiche de résultats" class="result-img" />
</div>
<div>
    <div class="results">
        <div class="result">
            <div class="date">
                <img src="../images/icons/calendarWhite.svg" alt="calendrier" class="calendar" />
                <h2>Date</h2>
            </div>
            <place>
                <centre>
                    <img src="../images/icons/home.svg" alt="maison" class="home" />
                    <h2>Centre de Lorem</h2>
                </centre>
                <button class="getResults">
                    Consulter<br />
                    mes résultats
                </button>
                
            </place>
        </div>
    </div>
</div>
<table class="resultat">
    <thead>
        <tr>
            <th>Id Test</th>
            <th>Type de Test</th>
            <th>Résultat</th>
            <th>Date</th>
            <th>Trame</th>
            <th>Nom du patient</th>
            <th>IdCapteur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($test as $row): ?>
            <tr>
            <td><?= $row['idTest'];?></td>
            <td><?= $row['type'];?></td>
            <td><?= $row['resultat'];?></td>
            <td><?= $row['date'];?></td>
            <td><?= $row['trame'];?></td>
            <td><?= $nom['nom'];?></td>
            <td><?= $row['idCapteur'];?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php require_once '../headerFooter/footer.php'; ?>

=======
	<h1>Mes résultats</h1>
	<img src="../images/icons/result.svg" alt="fiche de résultats" class="result-img" />
</div>
<div>
	<div class="results">
		<div class="result">
			<div class="date">
				<img src="../images/icons/calendarWhite.svg" alt="calendrier" class="calendar" />
				<h2>Date</h2>
			</div>
			<place>
				<centre>
					<img src="../images/icons/home.svg" alt="maison" class="home" />
					<h2>Centre de Lorem</h2>
				</centre>
				<button class="getResults">
					Consulter<br />
					mes résultats
				</button>
				
			</place>
		</div>
	</div>
</div>
<table class="resultat">
	<thead>
		<tr>
			<!-- <th>Id Test</th> -->
			<th>Type de Test</th>
			<th>Résultat</th>
			<th>Date</th>
			<!-- <th>Trame</th> -->
			<th>Nom du patient</th>
			<!-- <th>IdCapteur</th> -->
		</tr>
	</thead>
	<tbody>
		<?php foreach($test as $row): ?>

			<tr>
			<!-- <td><?php //echo $row['idTest'];?></td> -->
			<td><?= $row['type'];?></td>
			<td><?= $row['resultat'];?></td>
			<td><?php
			setlocale(LC_TIME, 'fr_FR.utf-8','fra'); 
			$date = new DateTime($row['date']);
			echo (strftime("%A %e %B %Y %k:%M", date_timestamp_get($date)));
			//echo ->format('l j F Y, H:i');?></td>
			<!-- <td><?php //echo $row['trame'];?></td> -->
			<td><?= $nom['nom'];?></td>
			<!-- <td><?php //echo $row['idCapteur'];?></td> -->
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?php require_once '../headerFooter/footer.php'; ?>
>>>>>>> Raph
