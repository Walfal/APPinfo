<?php // content="text/plain; charset=utf-8"

require_once('../jpgraph/src/jpgraph.php');
require_once('../jpgraph/src/jpgraph_line.php');


$req = query($BDD, "SELECT * FROM Test WHERE idCapteur = 0");
$tests = $req->fetchAll();


$datay1 = array(20,15,23,15);


// Setup the graph
$graph = new Graph(300,250);
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

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
foreach($tests as $test){
    $dates[] = $test["debut"]->format("Y-m-d");
    $valeurs[] = $test["resultat"];
}
$graph->xaxis->SetTickLabels($dates);
$datay1 = $valeurs;
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');


$graph->legend->SetFrameWeight(1);

// Output line

$graph->Stroke();
?>