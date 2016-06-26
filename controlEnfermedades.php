<?php
require "db/db.php";

$enfermedades=array('BRUC','TBC','RABIA','E.E.H','VESICULARES','PPC','N.C.I.A','SAL','L.T','EE','ENF ACUN','ENF APIC');

if($_GET){
    
    $enfermedad = $_GET["enfermedad"];
    $catAnimal = $_GET["catAnimal"];
    
    
}



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Control de Enfermedades</title>
</head>
<body>
   
   <div class="contenedorCotrolEnfermedades">
       <table summary="Control de Enfermedades">    

           <thead>
    <tr>
      <th rowspan="2" scope="col">Descripcion</th>
      <th colspan="11" scope="col">Enfermedades</th>
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
            echo "<td><input name='check' type='checkbox' value='".$enfermedades[$i]."' id='check0".$i."' /></td>";
            }
        ?>
      </tr>
      
    <tr>
<th scope="row" id="numFila1" class="Animales Vacunados Oficializados">Animales Vacunados Oficilizados</th>
      <?php
        for($i=0;$i<=11 ;$i++){
            echo "<td><input name='check' type='checkbox' value='".$enfermedades[$i]."' id='check1".$i."' /></td>";
            }
        ?>    </tr>
        

  </tbody>
        

       
       
       </table>
         
<input type="button"  value="vertificar"
        onclick='mapTable()'> 
   </div>
   
    
</body>


<script>
function mapTable() {
var table = document.getElementById("contenedorChecks");
var numFila = 0;
        //   document.write('picas');
var numCheck=0;
    
var enfermedad;
var catAnimal;
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
              buildQuery(enfermedad,catAnimal); //document.write(checkBox.value+""+numFila.className);
                
                //if(numFila+1==1 && numCheck+1==1){
                   
                
        }//fin checkBox.checked
        }
        
        
        }//fin for columnas
    }//FIN FOR FILAS
    
//
}//end function
    
    function buildQuery(enfermedad,catAnimal){
      //  document.write(enfermedad+""+ catAnimal);
        location.href="controlEnfermedades.php?enfermedad="+enfermedad+"&catAnimal="+catAnimal+"";
        
        
    }
    
    </script>
</html>