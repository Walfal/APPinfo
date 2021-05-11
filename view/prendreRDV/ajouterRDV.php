<?php 
$title = 'Ajouter un RDV';
require '../headerFooter/header.php'; 
require_once '../../model/BDD/connexionBDD.php';

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
endif?>

<br><br>
<link rel="stylesheet" href="ajouterRDV.css">

<div class = "hautPage">
	<p class="titrePage"><b>Prendre rendez-vous</b></p>
	<img class="imgCalendrier" src="../images/icons/calendrier.svg" alt="icone profil patient">
</div>

<div class="recherche">
	<p class="indication"><b>Rentrez les informations suivantes pour prendre RDV :</b></p>
<form class="aRemplir" method="post">
	<input width="50px" class="nom" type="text" placeholder="Matricule" name="matricule" id="matricule" required
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
	<span class="indication"><b>Sélectionnez les tests à effectuer :</b></span>
	<br><br>
	<label><input class="Test" type="checkbox" name ="test[]" value="0">Fréquence Cardiaque</input></label>
	<label><input class="Test" type="checkbox" name ="test[]" value="1">Temps de réaction à une lumière</input></label>
	<label><input class="Test" type="checkbox" name ="test[]" value="2">Temps de réaction à un son</input></label>
	<label><input class="Test" type="checkbox" name ="test[]" value="3">Température corporelle</input></label>
	<label><input class="Test" type="checkbox" name ="test[]" value="4">Reconnaissance de tonalité</input></label>


<br>
<br>
	<button>Ajouter le RDV</button>
</form>
</div>

<?php require '../headerFooter/footer.php' ?>

