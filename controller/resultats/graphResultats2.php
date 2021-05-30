<?php // content="text/plain; charset=utf-8"

session_start();
require_once '../../jpgraph/src/jpgraph.php';
require_once '../../jpgraph/src/jpgraph_line.php';
require_once '../../jpgraph/src/jpgraph_bar.php';
require_once '../../model/BDD/connexionBDD.php';


$matricule = (isset($_GET['id']) && $_SESSION['matricule'] < 20) ? $_GET['id'] : $_SESSION['matricule'];
$req = query($BDD, "SELECT debut, resultat, idCapteur FROM Test NATURAL JOIN PriseRDV WHERE matricule = ? AND idCapteur = ? ORDER BY debut", [$matricule, 1]);
$reactionLumiere = $req->fetchAll();

$req = query($BDD, "SELECT debut, resultat, idCapteur FROM Test NATURAL JOIN PriseRDV WHERE matricule = ? AND idCapteur = ? ORDER BY debut", [$matricule, 2]);
$reactionSon = $req->fetchAll();


foreach($reactionLumiere as $test){
    $date = new DateTime($test['debut']);
    $dates[] = $date->format("d-m-Y");
    $resultatLumiere[] = $test["resultat"];
}


foreach($reactionSon as $test){
    //$date = new DateTime($test['debut']);
    //$dates[] = $date->format("d-m-Y");
    $resultatSon[] = $test["resultat"];
}


$datay1 = $resultatSon;
$datay2 = $resultatLumiere;


// Setup the graph
$graph = new Graph(300,250);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Temps de réaction');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($dates);
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Son');

// Create the second line
$p2 = new LinePlot($datay2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Lumière');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>
