<?php
require "db/db.php";
 // require('headerAdmin.php');


$enfermedadesArray=$database->select('tbcategoriaanimal',['nombre']);

$catAnimalArray=$database->select('tbcategoriaanimal',['nombre']);

//echo $catAnimalArray[1]['nombre'];
//$enfermedades=array('BRUC','TBC','RABIA','E.E.H','VESICULARES','PPC','N.C.I.A','SAL','L.T','EE','ENF ACUN','ENF APIC');

if($_GET){
    
    $enfermedad = $_GET["enfermedad"];
    $catAnimal = $_GET["catAnimal"];
    
   
   
    $codEnfermedad=$database->select('tbEnfermedad',['codigo'],['nombre'=>$enfermedad]);
    
     $codCatAnimal=$database->select('tbCategoriaAnimal',['codigo'],['nombre'=>$catAnimal]);
    
    

    $vala =$codCatAnimal[0]['codigo']."";
     
    $vale =$codEnfermedad[0]['codigo']."";
    

    $database->insert("tbenfermedadesanimales",["codCatAnimal" => $vala,
    "codEnfermedad" => $vale,
     "catidad" => 1]);

        
    
    
}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Styles.css">
        <link rel="stylesheet" href="css/principal.css">

    <title>Control de Enfermedades</title>
</head>
<body>
  
  <section id="home" class="big">
        <?php include ('menu.php');
      
        ?>
        
        
        
        <div class="bodySection">
   <div class="contenedorControlEnfermedades">
       <table border=1 summary="Control de Enfermedades" class=tablaControlEnfermedades>    

           <thead>
    <tr>
      <th rowspan="2" scope="col">Descripcion</th>
      <th colspan="12" scope="col">Enfermedades</th>
    </tr>
    <tr>
            <th scope='col'>BRUC</th>
           <th scope='col'>TBC</th>
           <th scope='col'>RABIA</th>
           <th scope='col'>E.E.H</th>
           <th scope='col'>VESICULARES</th>
           <th scope='col'>PPC</th>
          <th scope='col'>N.C.I.A</th>
          <th scope='col'>SAL</th>
         <th scope='col'>LT</th>           
         <th scope='col'>EE</th>           
         <th scope='col'>ENF ACUN</th>
         <th scope='col'>ENF APIC</th>





    </tr>
  </thead>
 
          
          <tbody id='contenedorChecks'>
   

      
       
        
          <tr>
      <th scope="row" id="numFila0"  class="Animales Vacunados por Oficiales">Animales Vacunados por Oficiales</th>
      <?php
        
        for($i=0;$i<=11 ;$i++){
            echo "<td><input name='check' type='checkbox' value='".$enfermedadesArray[$i]['nombre']."' id='check0".$i."' /></td>";
            }
        ?>
      </tr>
      
    <tr>
<th scope="row" id="numFila1" class="Animales Vacunados Oficializados">Animales Vacunados Oficilizados</th>
      <?php
        for($i=0;$i<=11 ;$i++){
            echo "<td><input name='check' type='checkbox' value='".$enfermedadesArray[$i]['nombre']."' id='check1".$i."' /></td>";
            }
        ?>    </tr>
        
        
        

  </tbody>
        

       
       
       </table >
         
       
   </div>
   <div class="buttonsdiv">
    <input type="button"  value="vertificar"
        onclick='mapTable()'> 
        <input type="button"  value="Volver"
        onclick='History.back()'>
        </div> 
   </div>
    </section>
    
   
    
</body>


<script>
function mapTable() {
var table = document.getElementById("contenedorChecks");
var numFila = 0;
        //   document.write('picas');
var numCheck=0;
var contador=0;
var enfermedad;
var catAnimal;
    var conca;
    var datos= new Array(37);
    for (var i = 0; i < 10; i++) {
  datos[i] = new Array(1);
}
for(var i=0, fila; row=table.rows[i];i++){
   
    for(var j=0, colum; colum=row.cells[j];j++){
        numFila=document.getElementById("numFila"+i);
        checkBox=document.getElementById("check"+i+""+j); 
        if(checkBox==null){
        }
        else{
            if(checkBox.checked){
                
               enfermedad=checkBox.value+"";
               catAnimal=numFila.className+"";
               
                datos[contador][0]= enfermedad; datos[contador][1]= catAnimal;
                
                
              // document.write(datos[contador][0]+''+datos[contador][1])
                contador++;
                    
                
        }//fin checkBox.checked
        }
        
    }//fin for columnas
}//FIN FOR FILAS
//
    
    var jObject={};
    for(i in datos){
        jObject[i]=datos[i];
        
    }
    /*for(var i=0;i<10;i++){
        if(datos[i][0]==null){
            
        }else{
            document.write(datos[i][0]+''+datos[i][1]);
        }
       
        }*/
    
}//end function
    
    function buildQuery(enfermedad,catAnimal){
      //  document.write(enfermedad+""+ catAnimal);
        location.href="controlEnfermedades.php?enfermedad="+enfermedad+"&catAnimal="+catAnimal+"";
            }
    


    
    </script>
    <?php
  require('footer.php');
?>

</html>