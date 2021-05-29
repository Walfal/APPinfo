<?php 
function recuperationTheme($BDD, $FAQTrad){
    $req = query($BDD, "SELECT DISTINCT theme FROM $FAQTrad");
    return $req->fetchAll();
}

function recuperationQuestionRep($BDD, $FAQTrad, $theme){
    $req = query($BDD, "SELECT idFAQ, question, reponse FROM $FAQTrad WHERE theme = ?", [$theme]);
    return $req -> fetchAll();
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
