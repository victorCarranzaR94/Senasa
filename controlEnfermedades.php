<?php
require "db/db.php";
  require('headerAdmin.php');
session_start();    

$enfermedadesArray=$database->select('tbenfermedad',['nombre']);

$catAnimalArray=$database->select('tbcategoriaanimal',['nombre']);

//echo $catAnimalArray[1]['nombre'];
//$enfermedades=array('BRUC','TBC','RABIA','E.E.H','VESICULARES','PPC','N.C.I.A','SAL','L.T','EE','ENF ACUN','ENF APIC');


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Styles.css">
        <link rel="stylesheet" href="css/principal.css">

    <title>Control de Enfermedades</title>
</head>
<body>
  
  <section id="" class="big">
        <?php 
      //include ('menu.php');
      
        ?>
        
        
        
        <div class="">
   <div class="contenedorControlEnfermedades">
      <h2>Prevencion y Control de Enfermedades</h2>
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
        
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text' style=' width: 40px;'
 class='".$enfermedadesArray[$i]['nombre']."' id='txt0".$i."' /></td>";
            }
        ?>
      </tr>
      
    <tr>
<th scope="row" id="numFila1" class="Animales Vacunados Oficializados">Animales Vacunados Oficilizados</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt1".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila2" class="	
Hatos Vacunados: Oficiales">	
Hatos Vacunados: Oficiales</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt2".$i."' /></td>";
            }
        ?>    </tr>
        
 <tr>
<th scope="row" id="numFila3" class="	
Hatos Vacunados: Oficializados">	
Hatos Vacunados: Oficializados</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt3".$i."' /></td>";
            }
        ?>    </tr>
       
 <tr>
<th scope="row" id="numFila4" class="	
Total de Hatos Vacunados">	
Total de Hatos Vacunados</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt4".$i."' /></td>";
            }
        ?>    </tr>
        
<tr>
<th scope="row" id="numFila5" class="	
Animales Muestreados por Oficiales">	
Animales Muestreados por Oficiales</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt5".$i."' /></td>";
            }
        ?>    </tr>
        
<tr>
<th scope="row" id="numFila6" class="	
Animales Negativos">	
Animales Negativos</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt6".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila7" class="	
Animales Reactores">	
Animales Reactores</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt7".$i."' /></td>";
            }
        ?>    </tr>
        
    <tr>
<th scope="row" id="numFila8" class="	
Animales Marcados (con S)">	
Animales Marcados (con S)</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt8".$i."' /></td>";
            }
        ?>    </tr>
        
<tr>
<th scope="row" id="numFila9" class="	
Animales Sacrificados">	
Animales Sacrificados</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt9".$i."' /></td>";
            }
        ?>    </tr>
<tr>
<th scope="row" id="numFila10" class="	
Hatos Muestreados por Oficiales">	
Hatos Muestreados por Oficiales</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt10".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila11" class="	
Hatos Negativos">	
Hatos Negativos</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt11".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila12" class="	
Hatos Reactores">	
Hatos Reactores</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt12".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila13" class="	
Animales Muestreados Oficializados">	
Animales Muestreados Oficializados</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt13".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila14" class="	
Prueba Anillo en Leche Realizadas">	
Prueba Anillo en Leche Realizadas</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt14".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila15" class="	
Capturas Vampiros Realizadas">	
Capturas Vampiros Realizadas</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt15".$i."' /></td>";
            }
        ?>    </tr>
        
         <tr>
<th scope="row" id="numFila16" class="	
Hatos Certificados Libres">	
Hatos Certificados Libres</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt16".$i."' /></td>";
            }
        ?>    </tr>
        
 <tr>
<th scope="row" id="numFila17" class="	
Hatos Certificados Libres">	
Hatos Certificados Libres</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt17".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila18" class="	
Fincas Visitadas por Vigilancia Epidem">	
	Fincas Visitadas por Vigilancia Epidem</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt18".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila19" class="	
Fincas Atendidas por Vigilancia Epidem">	
Fincas Atendidas por Vigilancia Epidem</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt19".$i."' /></td>";
            }
        ?>    </tr>
        
        <tr>
<th scope="row" id="numFila20" class="	
	Cuarentena por sospecha de Enfermedad">	
	Cuarentena por sospecha de Enfermedad</th>
      <?php
        for($i=0;$i<12 ;$i++){
            echo "<td><input name='check' type='text'  style=' width: 40px' class='".$enfermedadesArray[$i]['nombre']."' id='txt20".$i."' /></td>";
            }
        ?>    </tr>
        
        
        

  </tbody>
        

       
       
       </table >
         
       
   </div>
   <div class="buttonsdiv">
    <input type="button"  value="vertificar"
        onclick='mapTable()'> 
        <input type="reset" class='reset' value="Volver"
        onclick="window.location.replace('principal.php')">
        </div> 
   </div>
    </section>
    
   
    
</body>


<script>
function mapTable() {
var table = document.getElementById("contenedorChecks");
var numFila = 0;
        //   document.write('picas');
var cantidadEnfermos=0;
    
var enfermedad;
var catAnimal;
for(var i=0, fila; row=table.rows[i];i++){
   
    for(var j=0, colum; colum=row.cells[j];j++){
        numFila=document.getElementById("numFila"+i);
        textBox=document.getElementById("txt"+i+""+j); 
           
        
        if(textBox!=null){
if(textBox.value!=''){
                
               enfermedad=textBox.className+"";
               catAnimal=numFila.className+"";
                cantidadEnfermos=textBox.value+'';
               
                                    
 alert(catAnimal+'---'+enfermedad+'---'+cantidadEnfermos);

                $.ajax({
                        method: "POST",
                        url: "queryControl.php",
                        data: {
                            enfer: selectedHour,
                            catAni: selectedDate,
                            cant: cantidadEnfermos
                        },
                        dataType: "text"
                    }).done(function (items) {
                        
                        
                    });
                 //document.write(catAnimal+'____'+enfermedad+'____'+textBox.value);
             // buildQuery(enfermedad,catAnimal); 
        }//fin checkBox.checked
        }
        
        
    }//fin for columnas
}//FIN FOR FILAS
//
}//end function    
        
    </script>
    <?php
  require('footer.php');
?>

</html>