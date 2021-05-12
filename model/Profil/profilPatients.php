<?php
(!isset($_SESSION)) ? session_start(): '';
require_once '../../model/BDD/connexionBDD.php';

$nomPatient = (isset($_POST['nom'])) ? $_POST['nom'] : '';
$prenomPatient = (isset($_POST['prenom'])) ? $_POST['prenom'] : '';
$codePostal = (isset($_POST['codePostal'])) ? $_POST['codePostal'] : '';

$personnes = query($BDD, "SELECT * FROM Personne WHERE nom LIKE ? AND prenom LIKE ? AND `code postal` LIKE ?", ['%'.$nomPatient.'%','%'.$prenomPatient.'%','%'.$codePostal.'%']);
$personnes = $personnes -> fetchAll();
$retour = '';
if(count($personnes) > 0){
	foreach($personnes as $personne){
		if($personne['matricule'] > 19) {
			$retour .= '<tr>';
			$retour .= '<td data-label="Matricule :">' . $personne['matricule'] . '</td>';
			$retour .= '<td data-label="Nom :">' . $personne['nom'] . '</td>';
			$retour .= '<td data-label="Prénom :">' . $personne['prenom'] . '</td>';
			$retour .= '<td data-label="Mail :">' . $personne['mail'] . '</td>';
			$retour .= '<td data-label="N° sécu :">' . $personne['numero de securite social'] . '</td>';
			$retour .= '<td data-label="Code Postale :">' . $personne['code postal'] . '</td>';
			$retour .= '<td data-label="Actions :" width=300>';
			$retour .= '<a href="../../view/profil/voirProfilPatients.php?id=' . $personne['matricule'] . '" >Voir</a>';
			if($_SESSION['matricule'] < 20){
				$retour .= '<a href="../../view/profil/modifProfil.php?id=' . $personne['matricule'] . '" >Modifier</a>';
				$retour .= '<a href="../../view/profil/supprimerProfilPatients.php?id=' . $personne['matricule'] . '" >Supprimer</a>';
			}
			$retour .= '</td>';
			$retour .= '</tr>';
		}
	}
}else{
	$retour = '<p class="aucun">Aucun utilisateur trouvé</p>';
}

echo $retour;