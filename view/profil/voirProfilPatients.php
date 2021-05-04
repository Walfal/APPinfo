<?php
$title = 'Profil des patients';
require_once '../headerFooter/header.php';

if(!isset($_SESSION['matricule']) || $_SESSION['matricule'] > 99):
    header('Location: ../login/login.php');
endif;

require '../../model/BDD/connexionBDD.php';

if(!empty($_GET['id'])){
	$matricule = checkInput($_GET['id']);
}

$personne = recuperationUneDonnee($BDD, 'Personne', 'matricule', $matricule);

//pour vérifier donnée qui vient de l'extérieur
function checkInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
<link href="voirProfilPatients.css" rel="stylesheet" />

<div class="title">
	<p class="textSize">
	<?= $personne['nom'] . ' ' . $personne['prenom'] ?>
	<img class="imgProfil" src="../images/icons/perm_identity-24px.svg">
	<p> 
</div>
	<div class="principal">
		<div class="left">	
			<div class="linedisplay">
				<li > Matricule : <br>
				<p><?= $personne['matricule'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li > Adresse mail : <br>
				<p><?= $personne['mail'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li> Numéro de téléphone: <br>
				<p><?= '0' . $personne['telephone'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li>Date de naissance : <br>
				<p> <?php
			setlocale(LC_TIME, 'fr_FR.utf-8','fra'); 
			$date = new DateTime(personne['date de naissance']);
			echo (strftime("%A %e %B %Y", date_timestamp_get($date))); ?></p></li>
			</div>
			<div class="linedisplay"> 
				<li> Genre : </label> <br>
				<p><?= ($personne['sexe'] == 0) ? 'No précisé' : ($personne['sexe'] == 1) ? 'Homme' : 'Femme' ?></p></li>
			</div>
			<div class="linedisplay">
				<li>Numéro de sécurité social : <br>
				<p> <?= $personne['numero de securite social'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li > poids : <br>
				<p><?= $personne['poids'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li>taille : <br>
				<p> <?= $personne['taille'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li> Adresse : <br>
				<p><?= $personne['adresse'] ?></p></li>	
			</div>
			<div class="linedisplay">
				<li > Ville : <br>
				<p><?= $personne['ville'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li>Code postal : <br>
				<p> <?= $personne['code postal'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li > Rôle : <br>
				<p><?= $personne['role'] ?></p></li>
			</div>
			<div class="linedisplay">
				<li > Médecin : <br>
				<p><?php
				$medecin = recuperationUneDonnee($BDD, 'Personne', 'matricule', $personne['medecin']);
				echo $medecin['nom'] . ' ' . $medecin['prenom'] . ' (matricule: ' . $personne['medecin'] . ')';
				?></p></li>
			</div>
		</div>
		<div class="right">
			<img src="../images/icons/user.png/>"  alt="image profil"/>
		</div>
		<div class = "separation">
			<label> _______________________________________________________________________________________________________________ </label>
		</div>	
		<div class = "bouttonCentrageModif">
			<input class="styleValidate" type="button" value="Modifier mon profil">
		</div>		
	</div>
</div>	
<div class="title">
	<p class ="textSize">
	Dernier(s) test(s) passé(s)
	</p>
</div> 
<div class="dernierTest">
	<p class = "textSizeNomCentre">
		À notre dame de Lorette :
	<form action="../mesResultats/mesResultats.php">
	<input type="SUBMIT" input class="buttonResultat" value="Accéder aux résultats"></form>
	</p>
	
</div>

<?php require_once '../headerFooter/footer.php';?>