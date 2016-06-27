<?php
require "db/db.php";

echo "ddd";
if($_POST){
    $enfermededad=$_POST['enfer'];
    $categoriaAnimal=$_POST['catAni'];
    $cantidad=$_POST['cant'];
    }



$codEnfermedad=$database->select('tbEnfermedad',['codigo'],['nombre'=>$enfermededad]);
    
     $codCatAnimal=$database->select('tbCategoriaAnimal',['codigo'],['nombre'=>$categoriaAnimal]);
    
    

    $codAni =$codCatAnimal[0]['codigo']."";
     
    $codEnf =$codEnfermedad[0]['codigo']."";
    


    $database->insert("tbenfermedadesanimales",["codCatAnimal" => $codAni,
    "codEnfermedad" => $codEnf,
     "catidad" => $cantidad]);

    echo "".$codAni."".$codEnf."".$cantidad;
?>