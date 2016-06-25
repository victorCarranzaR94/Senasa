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
                <div id="titleProfile">Registro de nuevo usuario
                </div>
            </b>
                    </br>
                  

                    <div id="form1">

                        <label for="nombre" id="name">Nombre:</label>
                        <input name="nombre" type="text" required placeholder="ej:Nombre" class="prof">

                        <label for="apellido1" id="ape1">Primer apellido:</label>
                        <input name="apellido1" type="text" required placeholder="ej:romanov" class="prof">

                        <label for="apellido2" id="ape2">Segundo apellido:</label>
                        <input name="apellido2" type="text" required placeholder="ej:romanov" class="prof">

                        <label for="edad" id="age">Edad</label>
                        <input name="edad" type="text" required placeholder="ej:15" class="prof">

                    </div>
                    <div id="form2">

                        <label for="genero" id="genero">Género</label>
                        <input name="genero" type="text" required placeholder="ej:masculino" class="prof">

                        <label for="correo" id="correo">Correo:</label>
                        <input name="correo" type="email" required placeholder="ej:name@domain.com" class="prof">

                        <label for="pw" id="pw">Password:</label>
                        <input name="pw" type="password" required placeholder="**********" class="prof">

                        <label for="pw2" id="pw2">Repetir password:</label>
                        <input name="pw2" type="password" required placeholder="**********" class="prof">

                    </div>
                    <br>
                    <br>
                    <div id="bottons">
                        <p>
                            <input type="submit" value="Guardar" class="btnReg"> &nbsp; &nbsp;
                            <input type="reset" name="reset" onClick="window.location.replace('index.php')" value="Cancelar" class="btnReg">
                        </p>
                    </div>
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