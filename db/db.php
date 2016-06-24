<?php
  require "medoo.php";

        $database = new medoo([
            // required
            'database_type' => 'mysql',
            'database_name' => 'senasaco',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ]);
?>