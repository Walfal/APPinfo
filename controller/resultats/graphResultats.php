<?php // content="text/plain; charset=utf-8"
session_start();
require_once('../../jpgraph/src/jpgraph.php');
require_once('../../jpgraph/src/jpgraph_line.php');
require_once('../../jpgraph/src/jpgraph_bar.php');
require_once('../../model/BDD/connexionBDD.php');


$matricule = (isset($_GET['id']) && $_SESSION['matricule'] < 20) ? $_GET['id'] : $_SESSION['matricule'];
$req = query($BDD, "SELECT debut, resultat, idCapteur FROM Test NATURAL JOIN PriseRDV WHERE matricule = ? AND idCapteur = ? ORDER BY debut", [$matricule, 0]);


$tests = $req->fetchAll();


foreach($tests as $test){
    $date = new DateTime($test['debut']);
    $dates[] = $date->format("d-m-Y");
    $valeurs[] = $test["resultat"];
}

//bar1
$data1y=$valeurs;
//bar2
$data2y=array(180,200,220,190,170,195,190,210,200,205,195,150);


// Create the graph. These two calls are always required
$graph = new Graph(750,320,'auto');
$graph->SetScale("textlin");
$graph->SetY2Scale("lin",0,90);
$graph->SetY2OrderBack(false);

$theme_class = new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->SetMargin(40,20,46,80);

$graph->yaxis->SetTickPositions(array(0,50,100,150,200,250,300,350), array(25,75,125,175,275,325));
//$graph->y2axis->SetTickPositions(array(30,40,50,60,70,80,90));

$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->xaxis->SetTickLabels($dates[0]);

// Create the bar plots
$b1plot = new BarPlot($data1y);
$b2plot = new BarPlot($data2y);


$gbplot = new GroupBarPlot(array($b1plot,$b2plot));

// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("#0000CD");
$b1plot->SetFillColor("#0000CD");
$b1plot->SetLegend("Clients");

$b2plot->SetColor("#B0C4DE");
$b2plot->SetFillColor("#B0C4DE");
$b2plot->SetLegend("Machines");


$graph->legend->SetFrameWeight(1);
$graph->legend->SetColumns(6);
$graph->legend->SetColor('#4E4E4E','#00A78A');

$band = new PlotBand(VERTICAL,BAND_RDIAG,11,"max",'khaki4');
$band->ShowFrame(true);
$band->SetOrder(DEPTH_BACK);
$graph->Add($band);

$graph->title->Set("Combined Line and Bar plots");

// Display the graph
$graph->Stroke();
?>