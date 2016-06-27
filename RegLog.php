<?php
  require('headerAdmin.php');

if($_POST){
 require("db/db.php");

if($_POST["pw"] == $_POST["pw2"]){
$database->insert("tbusuario",[ "login" => $_POST["login"],
                                "tipoUsuario" => $_POST["tipoUser"],
                                "password" => md5($_POST["pw"])
]);
    header("Location: principal.php");
}else{
    echo "password no coinciden";
}}
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
                  
                    <form method="post" action="RegLog.php">
                    <div id="form1">

                        <label for="correo" id="correo">Nombre de usuario</label>
                        <input name="login" type="text" required placeholder="Nombre de usuario" class="prof">
                        
                        <label for="correo" id="correo">Tipo de usuario</label>
                        <select name="tipoUser">
                            <option>Seleccione</option>
                            <option>administrador</option>
                            <option>director</option>
                            <option>estandar</option>
                        </select>
                    </div>
                    <div id="form2">

                       

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