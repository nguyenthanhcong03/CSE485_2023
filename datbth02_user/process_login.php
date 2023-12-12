<?php
    include 'connection.php';
    if(isset($_POST['email']) && isset($_POST['pass'])){
        $user = $_POST['email'];
        $pass = $_POST['pass'];
        try{
            $database = new Database();
            $db = $database->getConnection();
            $sql = "SELECT * FROM cms_user WHERE(email = '$user')";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $row = $stmt->fetch();
                $pass_saved = $row['password'];
                if(password_verify($pass, $pass_saved) ){
                    session_start();
                    $_SESSION['isLogined'] = $user; 
                    if($row['type'] == 1){
                        header("Location:dashboard.php");
                    }
                    else{
                        header("Location:index.php");
                    }
                    
                }else{
                    $error = "Password invalid";
                    header("Location:login.php?error=$error");
                }
            }else{
                $error = "Email not found";
                header("Location:login.php?error=$error");
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>


