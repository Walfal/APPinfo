<?php 


function recuperationTheme($BDD, $FAQTrad){
    $req = query($BDD, "SELECT DISTINCT theme FROM $FAQTrad");
    //$req = query($BDD, "SELECT DISTINCT theme FROM ?", [$FAQTrad]);
    return $req->fetchAll();
}

function recuperationQuestionRep($BDD, $FAQTrad, $theme){
    $req = query($BDD, "SELECT idFAQ, question, reponse FROM $FAQTrad WHERE theme = ?", [$theme]);
    return $req -> fetchAll();
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

function ajouterQuestion($BDD,$FAQTrad, $theme,$question, $reponse){
    insert($BDD, "INSERT INTO $FAQTrad (question, reponse, theme) VALUES (?, ?, ?)", [$question, $reponse, $theme]);
}

function modifierQuestion($BDD, $FAQTrad, $theme,$question,$reponse,$idFAQ){
    $req = $BDD->prepare("UPDATE $FAQTrad SET theme = $theme, question = $question, reponse = $reponse WHERE idFAQ = $idFAQ");
    return $req -> execute();
}

function supprimerQuestion($BDD, $FAQTrad, $id){
    if(isset($_POST["supprimer".$id.""])){
        $req = $BDD->prepare("DELETE FROM $FAQTrad WHERE idFAQ = $id ");
        $req -> execute();
        header('Refresh: ../FAQ/FAQ.php');
    }
    
}
