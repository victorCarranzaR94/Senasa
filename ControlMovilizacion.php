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
 <div class="divBody">
   
    <div class="divB1">
        
         <form id="form" method="post" enctype="multipart/form-data">
            <h2> Control de Movilizacion de animales</h2><br/>
                <div class="b1In">
                    <input class="dato" type="text" name="cantFincas">
                    <input class="dato" type="text" name="guiasOficiales">
                    <input class="dato" type="text" name="copiasGuiasR"> 
                    <input class="dato" type="text" name="guiasDB">
                    <input class="dato" type="text" name="procesosDB">
                    <input class="dato" type="text" name="cantFincas">
                </div>
                <div class="b1text">
                
                <label class="label" >N° Finca de bovinos inscritos</label><br/>
                <label class="label">N° guias oficiales entregadas</label><br/>
                <label class="label">N° guias recibidas</label><br/>
                <label class="label">N° guias procesadas </label><br/>
                <label class="label">N° procesos en base de datos</label><br/>
                <label class="label">N° guias entregadas a oficiales</label><br/><br/>
                 <input type="submit" value="Guardar" class="btnReg">
               </div>
            
            
        </form>
        
    </div>
    <div class="divB2"></div>
    <div class="divB3"></div>
 </div>
     
    <section> <?php  require('footer.php'); ?> </section>
</body>


</html>