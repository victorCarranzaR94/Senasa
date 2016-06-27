<?php
  require('headerAdmin.php');
?>

   

   <!DOCTYPE html>
    <html lang="es">

    <head>
        <link rel="stylesheet" href="css/profile.css" />
    </head>

    <div id="bodySection">
        <div class="container-profile">

            <form method="post" id="formAdmin">
                <div id="contentForm">

                    <b class="title">
                      </br>
                <div id="titleProfile">Participación en Reuniones
                </div>
            </b>
                    </br>
                  
                    <form method="" action="">
                    <div id="form1">
                        
                        <label for="code" id="code">Código: </label>
                        <input type="search" value="0" class="btnReg"></br>

                        <label for="date" id="date">Fecha: </label>
                        <input name="date" type="date" required placeholder="00/0/0000" class="prof">
                        
                        <label for="institution" id="institution">Institucion Organizadora: </label>
                         <input name="institution" type="text" required placeholder="Nombre de la Institucion" class="prof">
                         
                         
                         
                         
                         
                         
                    </div>
                    <div id="form2">

                       
                         <label for="theme" id="theme">Tema: </label>
                         <input name="asistanceAcount" type="text" required placeholder="Tema de reunion" class="prof">

                         <label for="location" id="location">Ubicación: </label>
                         <input name="asistanceAcount" type="text" required placeholder="Dirección" class="prof">
                         <label for="asistanceAcount" id="asistanceAcount">Cantidad de Participantes: </label>
                         <input name="asistanceAcount" type="number" required placeholder="0" class="prof">

                    </div>
                    <br>
                    <br>
                    <div id="bottons">
                        <p>
                            <input type="submit" value="Guardar" class="btnReg">&nbsp; &nbsp;
                            <input type="reset" name="reset" onClick="window.location.replace('principal.php')" value="Cancelar" class="btnReg">
                        </p>
                    </div>
                    </form>
                </div>
            </form>
        </div>
    </div>

    </br>
   </br>
   
    
    <?php
  require('footer.php');
?>

    </html>