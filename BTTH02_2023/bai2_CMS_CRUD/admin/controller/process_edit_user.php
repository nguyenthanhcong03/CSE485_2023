<?php
     include '../../connection.php';
    $id = $_POST['id'];
    $database = new Database();
    $db = $database->getConnection();
    $firstName = $_POST["txtFirstName"];
    $lastName = $_POST["txtLastName"];
    $sql = "UPDATE `cms_user` SET `first_name`='$firstName',`last_name`='$lastName'  WHERE `id`=$id";
    
    try{ 
        $db->query($sql);
        echo "Sửa thành công!";
        

   }catch(PDOException $e){
       echo $e ->getMessage();
   }
    
?>
<a href="../../dashboard.php">Quay lại</a>