<?php
require('headerAdmin.php');
session_start();

?>

<?php 
    if($_POST){
        if($_POST["guardarCM"]){
            echo "hola has precionado el guardar del form1";
        }
     
        
    }
?>

<!DOCTYPE html>
    <html lang="es">

    <head>
        <link rel="stylesheet" href="css/controlM.css" />
    </head>

<body>

        
         <form id="form3" method="post" enctype="multipart/form-data">
         <h2> Capacitacion Recibida</h2><br/><br/>
          <div class="b2In">
                    <input class="dato" type="date" name="cantFincas">
                    <input class="dato" type="text" name="guiasOficiales">
                    <input class="dato" type="text" name="copiasGuiasR"> 
                    <input class="dato" type="text" name="guiasDB">
                    <input class="dato" type="text" name="procesosDB">
                </div>
                
                <div class="b2text">
                
                <label class="label" >Fecha</label><br/><br/>
                <label class="label">Tipo evento</label><br/><br/>
                <label class="label">Tema</label><br/><br/>
                <label class="label">Lugar</label><br/><br>
                <label class="label">Numero participantes</label><br/><br>
                <br/><br/>
                 <button type="submit"  name="guardarCR" value="guardarCR " class="btnReg">Guardar</button>
                 <input type="reset" name="reset" onClick="window.location.replace('principal.php')" value="Cancelar" class="btnCancel">
               </div>
        </form>
  
      
    <section> <?php  require('footer.php'); ?> </section>
</body>


</html>