<?php 
$title = 'Ajouter un RDV';
require '../headerFooter/header.php'; 
require_once '../../model/BDD/connexionBDD.php';
require '../../controller/traduction/prendreRDV/ajouterRDVTrad.php';
if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 20):
    header('Location: ../login/login.php');
endif;

if(!empty($_POST['fin'])):
	extract($_POST);
	if(count($_POST['test']) > 0):

		$debuts =  DateTime::createFromFormat('Y-m-d H:i', $date . ' ' . $debut)->format('Y-m-d H:i:s');
		$fins =  DateTime::createFromFormat('Y-m-d H:i', $date . ' ' . $fin)->format('Y-m-d H:i:s');
		insert($BDD, "INSERT INTO PriseRDV (matricule, debut, fin) VALUES(?,?,?)", array($matricule, $debuts, $fins));
		
		$req = query($BDD, "SELECT idRDV FROM PriseRDV ORDER BY idRDV DESC");
		$idRDV = $req -> fetch();
		$idRDV = $idRDV['idRDV'];

		foreach($_POST['test'] as $test){
			insert($BDD, "INSERT INTO Test (idCapteur, idRDV) VALUES(?,?)", array($test, $idRDV));
		}
		header('Location: calendrier.php');
		exit;
	endif;
endif;

$capteurs = recuperationDesDonnees($BDD, "Capteur", 1, 1);
?>

<br><br>
<link rel="stylesheet" href="ajouterRDV.css">
<div class="contenu">
<div class = "hautPage">
	<p class="titrePage"><b><?= $titre ?></b></p>
	<img class="imgCalendrier" src="../images/icons/calendrier.svg" alt="icone profil patient">
</div>

<div class="recherche">
	<p class="indication"><b><?= $consigne ?> :</b></p>
<form class="aRemplir" method="post">
	<input width="50px" class="nom" type="text" placeholder="<?= $matricule1 ?>" name="matricule" id="matricule" required
	value="<?php if(isset($name)) {echo $matricule;} ?>"
	>
	<input type="date" id="date" name="date" required
	value="<?php if(isset($date)) {echo $date;} ?>"
	>
	<input type="time" id="debut" placeholder="HH:MM" name="debut" required
	value="<?php if(isset($debut)) {echo $debut;}?>"
	>
	<input type="time" id="fin" placeholder="HH:MM" name="fin" required
	value="<?php if(isset($fin)) {echo $fin;} ?>"
	>
	<br>
	<span class="indication"><b><?= $consigne2 ?> :</b></span>
	<br><br>
	<?php foreach($capteurs as $capteur): ?>
		<label><input class="Test" type="checkbox" name ="test[]" value="<?= ++$capteur['idCapteur'] ?>"" checked><?= $capteur['nom'] ?></input></label>
	<?php endforeach; ?>

	<br><br>
	<button class ="envoie"><?= $ajouter ?></button>
</form>
</div>
</div>



<?php require '../headerFooter/footer.php' ?>

