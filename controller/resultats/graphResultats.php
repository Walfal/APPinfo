<?php // content="text/plain; charset=utf-8"

session_start();
require_once('../../jpgraph/src/jpgraph.php');
require_once('../../jpgraph/src/jpgraph_line.php');
require_once('../../jpgraph/src/jpgraph_bar.php');
require_once('../../model/BDD/connexionBDD.php');

$matricule = (isset($_GET['id']) && $_SESSION['matricule'] < 20) ? $_GET['id'] : $_SESSION['matricule'];
$req = query($BDD, "SELECT debut, resultat, idCapteur FROM Test NATURAL JOIN PriseRDV WHERE matricule = ? AND idCapteur = ? ORDER BY debut", [$matricule, 0]);
$frequenceCardiaque = $req->fetchAll();

$req = query($BDD, "SELECT debut, resultat, idCapteur FROM Test NATURAL JOIN PriseRDV WHERE matricule = ? AND idCapteur = ? ORDER BY debut", [$matricule, 3]);
$temperature = $req->fetchAll();


foreach($frequenceCardiaque as $test){
    $date = new DateTime($test['debut']);
    $dates[] = $date->format("d-m-Y");
    $resultatCardio[] = $test["resultat"];
}


foreach($temperature as $test){
    //$date = new DateTime($test['debut']);
    //$dates[] = $date->format("d-m-Y");
    $resultatTemperature[] = $test["resultat"];
}


$datay1 = $resultatCardio;
$datay2 = $resultatTemperature;


// Setup the graph
$graph = new Graph(400,250);
$graph->SetScale("textlin");

$theme_class = new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Température corporelle et fréquence cardiaque');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
//$graph->yaxis->scale->SetAutoMin(20);
//$graph->y2scale->SetAutoMax(120);
$graph->SetScale('textlin',20,120);
$graph->yaxis->SetColor('blue','blue');





$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($dates);
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Cardiaque');



// Create the second line
$graph->SetYScale(0,'lin');
$p2 = new LinePlot($datay2);
$graph->AddY(0,$p2);
$graph->ynaxis[0]->SetColor('red');
$graph->ynaxis[0]->scale->SetAutoMax(30);
$graph->ynaxis[0]->scale->SetAutoMin(10);
$p2->SetColor("#B22222");
$p2->SetLegend('Température');

$graph->legend->SetFrameWeight(1);

// Output line
//$graph->Stroke();




$img = $graph->Stroke(_IMG_HANDLER);
ob_start();
imagepng($img);
$imageData = ob_get_contents();
ob_end_clean();

/*
$gdImgHandler = $graph->Stroke(_IMG_HANDLER);

$graph->img->SetImgFormat('png');
$filename = "../../view/resultats/resultatsCentre1.png";
$graph->img->Stream($filename);
#$graph->Stroke('/tmp/myimage.png');
 
// Send it back to browser
$graph->img->Headers();
$graph->img->Stream();*/
?>
