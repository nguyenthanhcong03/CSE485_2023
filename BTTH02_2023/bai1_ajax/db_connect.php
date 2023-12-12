<?php
    //Kết nối database
    $host = "localhost";
    $databasename = "btth02_1";
    $user = "root";
    $password = "";
    try{
         $conn = new PDO("mysql:host=$host; dbname=$databasename", username: $user, password: $password);

    }catch(PDOException $e){
        echo $e ->getMessage();
    }

?>