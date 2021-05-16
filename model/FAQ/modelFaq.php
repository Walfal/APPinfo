<?php 
    function recuperationTheme($BDD){
        $req = $BDD->prepare("SELECT DISTINCT theme FROM FAQ");
        $req -> execute();
        return $req->fetchAll();
    }

    function recuperationQuestionRep($BDD,$theme){
        $req = query($BDD, "SELECT idFAQ, question, reponse FROM FAQ WHERE theme = ?", array($theme));
        return $req -> fetchAll();
    }

    function afficherTopic($BDD){
        $themes = recuperationTheme($BDD); // ceci est un tableau
        foreach($themes as $key =>$theme){
            $key++;
            echo'<li><a href="#topic-'.$key.'" class="faq-category">'.$theme['theme'].'<i class="mob"></i></a></li>';
        }
    }



    function afficherQuestionRep($BDD){
        $themes = recuperationTheme($BDD); // ceci est un tableau
        foreach($themes as $key =>$theme){
            $key++;
            $topic = $theme['theme'];
            echo '<ul id="topic-'.$key.'" class="faq-group">
            <li class="faq-title"><h2>'.$topic.'</h2></li>';
            $topics = recuperationQuestionRep($BDD,$topic);
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
                    if($_SESSION['matricule'] == 0){
                    supprimerQuestion($BDD,$id);
                    echo'<div class="boutonFAQ"><a href="../FAQ/modifierFAQ.php?id='. $id. '"><button type="submit" id="modifier" name="modifier'.$id.'">Modifier</button></a>
                    <form method="post">
                        <button type="submit" id="supprimer" name="supprimer'.$id.'">Supprimer</button>
                    </form></div>';
                    } 
                }
               echo '</li>'; 
            }
            echo '</ul>';
        }
    }


    function ajouterQuestion($BDD,$theme,$question, $reponse){
       $req = $BDD->prepare("INSERT INTO FAQ (question, reponse, theme) VALUES ($question, $reponse, $theme)");
       return $req -> execute();

    }

    function modifierQuestion($BDD,$theme,$question,$reponse,$idFAQ){
        $req = $BDD->prepare("UPDATE FAQ SET theme = $theme, question = $question, reponse = $reponse WHERE idFAQ = $idFAQ");
        return $req -> execute();
    }

    function supprimerQuestion($BDD,$id){
        if(isset($_POST["supprimer".$id.""])){
            $req = $BDD->prepare("DELETE FROM FAQ WHERE idFAQ = $id ");
            $req -> execute();
            header('Refresh: ../FAQ/FAQ.php');
        }
        
    }