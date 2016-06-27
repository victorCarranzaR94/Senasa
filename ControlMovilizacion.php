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
                 <button type="submit"  name="guardarCR" value="guardarCR " class="btnRegform">Guardar</button>
                 <input type="reset" name="reset" onClick="window.location.replace('principal.php')" value="Cancelar" class="btnCancel">
               </div>
            
               
        </form>
        
  
    <section> <?php  require('footer.php'); ?> </section>
</body>


</html>