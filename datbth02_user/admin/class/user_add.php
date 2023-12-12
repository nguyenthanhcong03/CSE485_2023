
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
                    <h3 class="text-center text-uppercase fw-bold">Add new user</h3>
                    <form action="../controller/process_add_user.php" method="post">
                        <div class="input-group mt-3 mb-3" >
                            <span class="input-group-text" id="lblID">First name</span>
                            <input type="text" class="form-control" name="txtFirstName" >
                        </div>
                        <div class="input-group mt-3 mb-3" >
                            <span class="input-group-text" id="lblName">Last name</span>
                            <input type="text" class="form-control" name="txtLastName" >
                        </div>
                        <div class="input-group mt-3 mb-3" >
                            <span class="input-group-text" id="lblName">Email</span>
                            <input type="text" class="form-control" name="txtEmail" >
                        </div>
                        <div class="input-group mt-3 mb-3" >
                            <span class="input-group-text" id="lblPass">Password</span>
                            <input type="text" class="form-control" name="txtPass" >
                        </div>
                        <div class="input-group mt-3 mb-3" >
                            <span class="input-group-text" id="lblType">Type</span>
                            <input type="text" class="form-control" name="txtType" >
                        </div>
                        <div class="input-group mt-3 mb-3" >
                            <span class="input-group-text" id="lblDeleted">Deleted</span>
                            <input type="text" class="form-control" name="txtDeleted" >
                        </div>
                        <div class="form-group  float-end ">
                            <input type="submit" value="Thêm" class="btn btn-success">
                            <a href="../../dashboard.php" class="btn btn-warning ">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>