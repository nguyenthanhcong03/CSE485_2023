<?php
    include 'connection.php';
    $id = $_POST['id'];
    $catName = $_POST["txtCatName"];
    $sql = "UPDATE `theloai` SET `ten_tloai`='$catName' WHERE `ma_tloai`=$id";
    
    try{ 
        $conn->query($sql);
        echo "Sửa thành công!";
        

   }catch(PDOException $e){
       echo $e ->getMessage();
   }
    
?>
<a href="category.php">Quay lại</a>