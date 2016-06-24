<?php 
require ("db/db.php");

if($_POST){
$data = $database->select("tbusuario", "*", [ "login" = $_POST["login"],
                                              "password" => md5($_POST["password"])]);

    if(count($data) == 1){
       $_SESSION 
    }
}

?>