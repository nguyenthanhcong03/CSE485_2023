<?php
    include '../../connection.php';
    $database = new Database();
    $db = $database->getConnection();
    $firstName = $_POST["txtFirstName"];
    $lastName = $_POST["txtLastName"];
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPass"];
    $type = $_POST["txtType"];
    $deleted = $_POST["txtDeleted"];
    $sql = "INSERT INTO `cms_user`(`first_name`, `last_name`, `email`, `password`, `type`, `deleted`) 
                       VALUES ('$firstName','$lastName','$email','$pass',$type,$deleted)";
    
    try{
        $db->query($sql);
        echo "Success!";
        

   }catch(PDOException $e){
       echo $e ->getMessage();
   }
    
?>
<a href="../class/user_add.php">Quay lại</a>