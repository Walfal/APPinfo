<?php
//pour vérifier donnée qui vient de l'extérieur
function checkInput($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = htmlentities($data);
	return $data;
}


function afficherTopic($BDD, $FAQTrad){
	$themes = recuperationTheme($BDD, $FAQTrad); // ceci est un tableau
	foreach($themes as $key => $theme){
			$key++;
			echo'<li><a href="#topic-'.$key.'" class="faq-category">'.$theme['theme'].'<i class="mob"></i></a></li>';
	}
}

function afficherQuestionRep($BDD, $FAQTrad, $modif, $suppr){
	$themes = recuperationTheme($BDD, $FAQTrad); // ceci est un tableau
	foreach($themes as $key =>$theme){
			$key++;
			$topic = $theme['theme'];
			echo '<ul id="topic-'.$key.'" class="faq-group">
			<li class="faq-title"><h2>'.$topic.'</h2></li>';
			$topics = recuperationQuestionRep($BDD, $FAQTrad, $topic);
			foreach($topics as $indice => $questRep){
					$question = $questRep['question'];
					$reponse = $questRep['reponse'];
					$id = $questRep['idFAQ'];
					echo '<li class="faq-item">
					<a href="#0" class="faq-question"><span>'.$topic.' - '.$question.'</span></a>
					<div class="faq-response">
							<div class="text-block">
									<p>'.$reponse.'</p>
							</div>
					</div>'; 
					if(isset($_SESSION['matricule'])){
							if($_SESSION['matricule'] < 20){
							supprimerQuestion($BDD, $FAQTrad, $id);
							echo'<div class="boutonFAQ"><a href="../FAQ/modifierFAQ.php?id='. $id. '"><button type="submit" id="modifier" name="modifier '. $id .'"> ' .  $modif  . '</button></a>
							<form method="post">
									<button type="submit" id="supprimer" name="supprimer'. $id .'">' .  $suppr . ' </button>
							</form></div>';
							} 
					}
					echo '</li>'; 
			}
			echo '</ul>';
	}
}