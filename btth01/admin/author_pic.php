<?php
    include 'connection.php';
    $id = $_GET['id'];
    $sql = "SELECT `hinh_tgia` FROM `tacgia` WHERE ma_tgia=$id";
    $result = $conn->prepare($sql);
    $result->execute();
    $authors = $result->fetch();
    try{ 
        $conn->query($sql);
        echo $authors["hinh_tgia"];
   }catch(PDOException $e){
       echo "Không thể xem ảnh tác giả này";
   }
    
?>
<a href="author.php">Quay lại</a>