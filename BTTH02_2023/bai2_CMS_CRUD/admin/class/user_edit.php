<?php
    include '../../connection.php';
    $id = $_GET['id'];
    $database = new Database();
    $db = $database->getConnection();
    $sql = "SELECT * FROM `cms_user` WHERE id= $id";
    $result = $db->query($sql);
    $users = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Edit information</h3>
                <form action="../controller/process_edit_user.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id?>" id="">
                    <div class="input-group mt-3 mb-3">
                            <span class="input-group-text" id="lblId">ID</span>
                            <input type="text" class="form-control" name="txtCatId" readonly value=<?php echo $users["id"]?>>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblName">First name</span>
                        <input type="text" class="form-control" name="txtFirstName" value =" <?php echo $users["first_name"];?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblName">Last name</span>
                        <input type="text" class="form-control" name="txtLastName" value =" <?php echo $users["last_name"];?>">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="../../dashboard.php" class="btn btn-warning ">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>