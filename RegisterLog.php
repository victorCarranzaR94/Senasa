<?php
  require('headerAdmin.php');


require_once('db/db.php');
//require_once('db/constraint.php');
if(isset($_POST['regUser']))
{
	
	$tipoUsuario = $_POST['tipoUsuario'];
	$login = $_POST['login'];
	$pw = $_POST['pw'];
	$pwE=md5($pw);
	
	//require_once('db/constraint.php');
    //require_once('db/bdInsert.php');

	//$db = new bdInsert(__HOST__, __USUARIODB__, __PASSDB__,__DATABASE__);
	//$fila = mysqli_fetch_assoc($pass);
    
    if($tipoUsuario!="0" &&$login!="0" && $pw!="0")
    {
         $database->insert("tbusuario",["tipoUsuario"=>$tipoUsuario, "login"=>$login,
                           "password"=>$pwE ]);
			if($database == TRUE)
			{
				header("location:principal.php");
				exit();
			}else
            {
				header("location:login.php");
				exit();
			}
    }

}
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

                        <label for="tipoUsuario" id="tipUser">Tipo usuario:</label>
                        <input name="tipoUsuario" type="text" required placeholder="ej:administrador" class="prof">

                        <label for="login" id="login">Login:</label>
                        <input name="login" type="text" required placeholder="ej:chevex" class="prof">

                        <label for="pw" id="pw">Password:</label>
                        <input name="pw" type="password" required placeholder="**********" class="prof">



                    </div>
                    <br>
                    <br>
                    <div id="bottons">
                        <p>

                            <input type="submit" name="regUser" value="Guardar" class="btnReg"> &nbsp; &nbsp;
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