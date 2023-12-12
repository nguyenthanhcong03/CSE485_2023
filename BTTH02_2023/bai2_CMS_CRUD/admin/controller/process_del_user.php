<?php
    include '../../connection.php';
    $id = $_GET['id'];
    $database = new Database();
    $db = $database->getConnection();
    $sql = "DELETE FROM `cms_user` WHERE id=$id";
    // echo $sql;
    try{ 
        $db->query($sql);
        echo "Success!";
        

   }catch(PDOException $e){
       echo "Cant delete";
   }
    
?>
<a href="../../dashboard.php">Back</a>