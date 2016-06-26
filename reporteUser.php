<?php 

require_once ('jpgraph/jpgraph.php');

require_once ('jpgraph/jpgraph_bar.php');

require ('db/db.php');

$data = $database->select("tbusuario", ["login"]);
$data1 = [1, 2, 44, 55, 44];
//$data1 = $database->select("tbhojavisita", );
//definiciones formato generales
$grafico = new Graph(500, 400, "auto");
$grafico->SetScale("textint");
$grafico->title->Set("ejemplo");
$grafico->xaxis->title->Set("Usuario");
$grafico->xaxis->SetTickLabels($data["login"]);
$grafico->yaxis->title->Set("Cantidad de hojas");

//ingresan los datos al arreglo de datos que ira en el grafico.
$barplots = new BarPlot($data1);

//un gradiente horizontal
$barplots->SetFillGradient("#FA58F4", "#81BEF7", GRAD_HOR);

$barplots->SetWidth(30);

$grafico->add($barplots);

$grafico->Stroke();

?>