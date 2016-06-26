<?php
session_name("user");
session_start();

if(isset($_SESSION['SESSION_STARTED']) && $_SESSION['SESSION_STARTED'] == TRUE)
{
	header("location:Index.php");
	exit();
}
  require('headerAdmin.php');
?>

<link rel="stylesheet" href="css/logueo.css">
<div id="bodySection">
 
    
    <form name="logueo" id="logueo" method="post"> 
<!--               action="validateAdmin.php?type=1"   Se debe llamar la clase (s) que validan el usuario -->
        		<div>
        		<h2>Acceso al Sistema</h2>
				<p><input type="text" name="email" id="email" placeholder="Email" class="dato"></p>
				<p><input type="password" name="pass" id="pass" placeholder="Password" class="dato"></p>
				<input class="buttonLogin" type="submit" value="Iniciar sesión" />
                </br>
				</div>
        	</form>


</div>


    <?php
  require('footer.php');
?>