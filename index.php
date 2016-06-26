
<?php
session_start();


if(isset($_SESSION['SESSION_STARTED']) && $_SESSION['SESSION_STARTED'] == TRUE)
{
	header("location: index.php");
	exit();
}
  require('headerAdmin.php');

 
   if($_POST){
    require ("db/db.php");
    $data = $database->select("tbusuario",[ "codigo", "tipoUsuario", "login"], ["AND" => [ "login" => $_POST["login"],
                                              "password" => md5($_POST["password"])
                                                ]]);
   

    if(count($data) > 0){
     $_SESSION['user'] = $data[0]["login"];
     $_SESSION['tipoUsuario'] = $data[0]["tipoUsuario"];
     $_SESSION['idUser'] = $data[0]["codigo"];
    header("Location: principal.php");
    }else{
        header("Location: index.php");
     
    }
}

?>


<link rel="stylesheet" href="css/logueo.css">
<div id="bodySection">
 
    
    <form action= "index.php" name="logueo" id="logueo" method="post"> 
<!--               action="validateAdmin.php?type=1"   Se debe llamar la clase (s) que validan el usuario -->
        		<div>
        		<h2>Acceso al Sistema</h2>
				<p><input type="text" name="login" id="email" placeholder="Nombre Usuario" class="dato"></p>
				<p><input type="password" name="password" id="pass" placeholder="Password" class="dato"></p>
				<input class="buttonLogin" type="submit" value="Iniciar sesión" />
                </br>
				</div>
        	</form>


</div>


    <?php
  require('footer.php');
?>