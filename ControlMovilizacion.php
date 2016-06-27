<?php
require('headerAdmin.php');
session_start();
?>

<!DOCTYPE html>
    <html lang="es">

    <head>
        <link rel="stylesheet" href="css/controlM.css" />
    </head>

<body>
 
    <div class="controlSec" id="bodySection">
        <form id="form" method="post" enctype="multipart/form-data">
            <h2> Control de Movilizacion de animales</h2>
            <div id="FormL">
                <label class="label" >N° Finca de bovinos inscritos</label><br/>
                <label class="label">N° guias oficiales entregadas</label><br/>
                <label class="label">N° copias de guias recibidas</label><br/>
                <label class="label">N° guias procesadas en base de datos</label><br/>
                <label class="label">N° procesos en base de datos</label><br/>
                <label class="label">N° guias entregadas a oficiales</label><br/>
            </div >
               <div id="FormR">
                <input class="dato" type="text" name="cantFincas"><br/>
                <input class="dato" type="text" name="guiasOficiales"><br/>
                <input class="dato" type="text" name="copiasGuiasR"><br/>
                <input class="dato" type="text" name="guiasDB"><br/>
                <input class="dato" type="text" name="procesosDB"><br/>
                <input class="dato" type="text" name="cantFincas"><br/>
                  
               </div>
             <input type="submit" value="Guardar" class="btnReg">
            
        </form>
    </div>
    
    <section> <?php  require('footer.php'); ?> </section>
</body>


</html>