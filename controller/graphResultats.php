<?php // content="text/plain; charset=utf-8"

require_once('../jpgraph/src/jpgraph.php');
require_once('../jpgraph/src/jpgraph_line.php');
require_once('../model/BDD/connexionBDD.php');


$req = query($BDD, "SELECT debut, resultat FROM Test NATURAL JOIN PriseRDV WHERE idCapteur = 0 ORDER BY debut");

$tests = $req->fetchAll();



$datay1 = array(20,15,23,15);


// Setup the graph
$graph = new Graph(700,300);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Fréquence cardiaque');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
setlocale(LC_TIME, 'fr_FR.utf-8','fra');
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");

foreach($tests as $test){  

    $date = new DateTime($test['debut']);
    $dates[] = $date->format("d-m-Y");
    $valeurs[] = $test["resultat"];
}

$graph->xaxis->SetTickLabels($dates);
$datay1 = $valeurs;
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
//$p1->SetLegend('line 1');


$graph->legend->SetFrameWeight(1);
$graph = SetY2Scale("linlin");
$lineplot = new LinePlot([35, 45, 55]);
$graph->AddY2($lineplot);
// Output line

$graph->Stroke();
?>