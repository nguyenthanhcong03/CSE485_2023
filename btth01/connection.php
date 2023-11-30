<?php
$host = "localhost";
$databasename = "btth01_cse485";
$user = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$host; dbname=$databasename", username: $user, password: $password);

}catch(PDOException $e){
    echo $e ->getMessage();
}
?>