<?php
require('headerAdmin.php');
session_start();
?>

<!DOCTYPE html>
    <html lang="es">

    <head>
        <link rel="stylesheet" href="css/ordenSanitaria.css" />
    </head>

<body>
    
 <form id="form" method="post" enctype="multipart/form-data">
            <h2>Registro de Orden Sanitaria</h2><br>
                
                <div class="b1text">
                
                <label class="label">Fecha</label><br><br>
                <label class="label">Rango de Hojas</label><br><br>
                <label class="label">Fecha de Emisión</label><br><br>
                <label class="label">Fecha de Vencimiento</label><br><br>
                <label class="label">Tipos de días</label><br><br>
                <label class="label">Observaciones</label><br><br><br>
                    
               </div>
     
            <div class="b1In">
                    <input class="dato" type="date" name="Fecha"><br><br>
                    <input class="dato" type="text" name="rangoHojas"><br><br>
                    <input class="dato" type="date" name="fechaEmision"> <br><br>
                    <input class="dato" type="date" name="fechaVencimiento"><br><br>
                    <input class="dato" type="text" name="tipoDias"><br><br>
                    <input class="observaciones" type="text" name="observaciones"><br><br>
                
                    <input type="submit" value="Guardar" class="btnReg">
                    <input type="submit" value="Cancelar" class="btnReg">
                </div>
     
            
        </form>
    <?php
  require('footer.php');
?>
</body>


</html>