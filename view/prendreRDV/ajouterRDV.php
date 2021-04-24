<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="ajouterRDV.css">
        <title>Ajouter un RDV</title>
    </head>

	<?php require '../header/header.php'; 
	require 'bootstrap.php';
	require 'EventGS.php';
	require 'events.php';

	// on peut faire les fonctions pour valider mais c'est long... 


	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$errors = [];
		$data = $_POST;
		if(empty($errors)){
		
			

			//nouvel essaie

			if(!empty($_POST)){
				extract($_POST);
			}
			//echo $dateNew = date_create_from_format('t)->format("Y-m-d");
			$starts =  DateTime::createFromFormat('Y-m-d H:i', $date . ' ' . $start)->format('Y-m-d H:i:s');
			$ends =  DateTime::createFromFormat('Y-m-d H:i', $date . ' ' . $end)->format('Y-m-d H:i:s');
			require_once '../prendreRDV/connexionBD.php';
			$DB->insert("INSERT INTO events (name, description, date, start, end) VALUES(?,?,?,?,?)", array($name, $description, $date, $starts, $ends));

			header('Location: calendrier.php');
			exit;
		
		}
	}

	?>


		
		<div class = "hautPage">
			<p class="titrePage"><b>Prendre rendez-vous</b></p>
			<img class="imgCalendrier" src="../images/icons/calendrier.svg" alt="icone profil patient">
		</div>
		<div class="recherche">
			<p class="indication"><b>Rentrez les informations suivantes pour prendre RDV :</b></p>
		<form class="aRemplir" method="post">
			<input width="50px" class="nom" type="text" placeholder="Nom du Patient" name="name" id="name" value="<?php if(isset($name)) {echo $name;} ?>">
			<input type="date" id="date" name="date" value="<?php if(isset($date)) {echo $date;} ?>">
			<input type="time" id="start" placeholder="HH:MM" name="start" value="<?php if(isset($start)) {echo $start;}?>">
			<input type="time" id="end" placeholder="HH:MM" name="end" value="<?php if(isset($end)) {echo $end;} ?>">
			<input type = "text" placeholder="Type de test" name="description" id="description" value="<?php if(isset($description)) {echo $description;} ?>" ></input>
			<button>Ajouter le RDV</button>
		</form>
		</div>
	</body>



<?php require '../footer/footer.php' ?>

	<!-- <footer class="bandebas">
		<p class="coordonnees"><b>COORDONNÉES</b> <br>_________</br></p>
		<p class="info"><b>Mail : </b> info@sensair.com <br><br class="info"><b>Adresse :</b> 10 rue de Vanves, 92130 Issy-Les-Moulineaux </br> <br class="info"> <b>Téléphone :</b> +33 1 23 48 87 33</br></p>
	</footer> -->

