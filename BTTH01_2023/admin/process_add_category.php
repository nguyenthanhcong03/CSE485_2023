<?php
    include 'connection.php';
    $catID = $_POST['txtCatID'];
    $catName = $_POST["txtCatName"];
    $sql = "INSERT INTO theloai(ma_tloai,ten_tloai) VALUES ($catID,'$catName')";
    
    try{
        $conn->query($sql);
        echo "Thêm thể loại thành công!";
        

   }catch(PDOException $e){
       echo $e ->getMessage();
   }
    
?>
<a href="add_category.php">Quay lại</a>