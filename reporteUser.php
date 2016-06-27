<?php 

require_once ('jpgraph/jpgraph.php');

require_once ('jpgraph/jpgraph_bar.php');

require ('db/db.php');

$data = $database->select("tbusuario", ["login"]);

for($i=0; $i<count($data); $i++){
    $datas[] = $data[$i]["login"];
}
/*$data1 = [1, 2, 44, 55, 44];
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

$grafico->Stroke();*/


$datos = array(62,105);
 
//Instancia del objeto del tipo Graph en donde como parametro
// se le pasan los valore de ancho y altura
$grafica = new Graph(700,440);
$grafica->SetScale("textlin");
 
//Posición de los puntos del eje de las Y
$mayor = array(0,30,60,90,120,150);
$menor = array(15,45,75,105,135);
 
$grafica->yaxis->SetTickPositions($mayor,$menor); 
$grafica->SetBox(false);
//Nombre de las columnas
$grafica->xaxis->SetTickLabels($datas);
 
//Objeto del tipo BarPlot que se le enviara a la gráfica y el cual
//recibe como parametros los datos a graficar
$barras = new BarPlot($datos);
 
$grafica->Add($barras);
//Color de los bordes 
 
//Color de borde de las barras
$barras->SetColor("white");
//Color de relleno de las barras
$barras->SetFillColor("#4B0082");
//Ancho de las barras
$barras->SetWidth(45);
 
$grafica->title->Set("Numero de hojas por Usuario");
$grafica->title->SetFont(FF_TIMES,FS_ITALIC,18);
$grafica->Stroke();

?>