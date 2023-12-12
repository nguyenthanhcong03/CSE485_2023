<?php
    include 'connection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `theloai` WHERE ma_tloai=$id";
    // echo $sql;
    try{ 
        $conn->query($sql);
        echo "Xóa thành công!";
        

   }catch(PDOException $e){
       echo "Không thể xóa nhạc này";
   }
    
?>
<a href="category.php">Quay lại</a>